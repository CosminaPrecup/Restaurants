<?php
namespace Acme\RestaurantsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Acme\RestaurantsBundle\Entity\Places;
class Pagecontroller extends Controller
{

 public function indexAction(Request $request)
 {  
      ini_set('max_execution_time', 300);
      $places_raiting= $request->query->get('raiting');
      $em = $this->getDoctrine();
      $pagetoken1="";
      //$this->getPlaces($pagetoken1,$em);
      if (isset($places_raiting)){
      $query=$em->getManager()->createQuery(
                'SELECT p from AcmeRestaurantsBundle:Places p
                 WHERE p.placesRating = :places_raiting '
                 )->setParameter(':places_raiting',$places_raiting);
                 $places=$query->getResult();
      }  
      else
      { 
       $places = $em->getRepository('AcmeRestaurantsBundle:Places')
                    ->findAll();       
      }
      $images=$this->selectimages();
      return $this->render('AcmeRestaurantsBundle:Default:index.html.twig', array(
                                     'images'      => $images,   
                                     'places'      => $places,
                                        ));
 }
  
 private function SelectPlaceWithId($places_id,$em)
 { 
     $query=$em->getManager()
               ->createQuery(
                 'SELECT p from AcmeRestaurantsBundle:Places p
                  WHERE p.placesId = :id ')
               ->setParameter(':id',$places_id);
     $id=$query->getResult();  
     return $id;
 }
  
 
 private function InserNewPlace($places_id,$places_name,$places_address,$places_rating,
              $places_lat,$places_lng,$places_open_now,$places_reference,$places_types,$places_icon,$place_photo)
 {
    $place=new Places();
    $place->setPlacesId($places_id);
    $place->setPlacesName($places_name);
    $place->setPlacesAddress($places_address);
    $place->setPlacesRating($places_rating);
    $place->setPlacesLat($places_lat);
    $place->setPlacesLng($places_lng);
    $place->setPlacesOpenNow($places_open_now);
    $place->setPlacesReference($places_reference);
    $place->setPlacesTypes($places_types);
    $place->setPlacesIcon($places_icon);
    $place->setPlacePhoto($place_photo);
    $em = $this->getDoctrine()->getManager();
    $em->persist($place);
    $em->flush();              
 } 

 function getPlaces($pagetoken,$em)
 {  
    sleep(2);    
    $pagetoken=rawurlencode($pagetoken);
    $urltest="https://maps.googleapis.com/maps/api/place/textsearch/json?query=restaurants+in+Cluj-Napoca&types=food|cafe&sensor=true&radius=5000&location=46.778125,23.597732&key=AIzaSyDebLnPBz09xodVnFIzNq2WRTVxuOsCJgc&pagetoken=$pagetoken";
    $url=str_replace("\"","",$urltest);
    $tuCurl = curl_init();
    curl_setopt($tuCurl, CURLOPT_URL, $url);
    curl_setopt($tuCurl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, 1);
    $tuData = curl_exec($tuCurl);
    curl_close($tuCurl);
    $tuData_a=json_decode($tuData);
    $i=0;
    if (isset($tuData_a->status) && $tuData_a->status == "OK")
    { 
      while ($i<20)
      {
       
        $places_name='';
        $places_address='';
        $places_id=''; 
        $places_rating=0;
        $places_lat=0;
        $places_lng=0;
        $places_icon=0;
        $places_open_now=0;
        $places_reference=0;
        $places_types=''; 
        if (isset($tuData_a->results[$i]->name)){     
        $places_name = $tuData_a->results[$i]->name;
        }
        if (isset($tuData_a->results[$i]->formatted_address)){    
        $places_address = $tuData_a->results[$i]->formatted_address;
        }
        if (isset($tuData_a->results[$i]->id)){
        $places_id=$tuData_a->results[$i]->id;
        }
        if (isset($tuData_a->results[$i]->rating)){
        $places_rating=$tuData_a->results[$i]->rating;
        }
        if (isset($tuData_a->results[$i]->geometry->location->lat)){
        $places_lat=$tuData_a->results[$i]->geometry->location->lat;
        }
        if (isset($tuData_a->results[$i]->geometry->location->lng)){
        $places_lng=$tuData_a->results[$i]->geometry->location->lng;
        }
        if (isset($tuData_a->results[$i]->icon)){
        $places_icon=$tuData_a->results[$i]->icon;
        }
        if (isset($tuData_a->results[$i]->opening_hours->open_now)){
        $places_open_now=$tuData_a->results[$i]->opening_hours->open_now;
        }
        if (isset($tuData_a->results[$i]->reference)){
        $places_reference=$tuData_a->results[$i]->reference;
       
        }
         if (isset($tuData_a->results[$i]->types[0])){
         $places_types=$tuData_a->results[$i]->types[0];
         }
         $places_types.=" ";
         if (isset($tuData_a->results[$i]->types[2]))
         {
         $places_types.=$tuData_a->results[$i]->types[1];
         }
         $places_types.=" ";
         if (isset($tuData_a->results[$i]->types[2]))
         {
         $places_types.=$tuData_a->results[$i]->types[2];
         }         
         $photo_reference=""; 
         if (isset($tuData_a->results[$i]->photos[0])){ 
         $photo_reference = $tuData_a->results[$i]->photos[0]->photo_reference;      
         } 
         
         $id=$this->SelectPlaceWithId($places_id,$em);
         
         $place_photo=$this->RedirectUrl($photo_reference);
         if (empty($id))
         {  
        
         $this->InserNewPlace($places_id,$places_name,$places_address,$places_rating,
              $places_lat,$places_lng,$places_open_now,$places_reference,$places_types,$places_icon,$place_photo);              
         }
        $i++;
        sleep(2);
      }
    }
      else echo $tuData_a->status;
      if (isset($tuData_a->next_page_token)){
        $pagetoken=$tuData_a->next_page_token;
        $this->getPlaces($pagetoken,$em);
      }
      return $pagetoken;		
 }
 
private function selectimages()
{
  $em=$this->getDoctrine()->getManager();
  $images = $em->createQueryBuilder()
               ->select('i')
               ->from('AcmeRestaurantsBundle:Images',  'i')
               ->getQuery()
               ->getResult();
   return $images;
 }
 public function RedirectUrl($photo_reference)
 {
    $urlpicture="https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=$photo_reference&sensor=true&key=AIzaSyDa5Q4aq-rfNjpv-VrUoEVqGZuJW54vz4M";
    $tuCurl = curl_init($urlpicture);
    curl_setopt($tuCurl, CURLOPT_URL, $urlpicture);
    curl_setopt($tuCurl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($tuCurl);
    $last_url1 = curl_getinfo($tuCurl); 
    $last_url = $last_url1['redirect_url'];
    return $last_url;
 }
 
}


