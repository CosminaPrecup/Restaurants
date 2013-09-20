<?php

namespace Acme\RestaurantsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\DBAL\DriverManager;
use Acme\RestaurantsBundle\Form\EnquiryType;
use Acme\RestaurantsBundle\Form\ContactType;
use Acme\RestaurantsBundle\Form\UsersType;
use Acme\RestaurantsBundle\Entity\Contact;
use Acme\RestaurantsBundle\Entity\Images;
use Acme\RestaurantsBundle\Entity\Places;
use Symfony\Component\HttpFoundation\Request;

ini_set('max_execution_time', 300);

class DefaultController extends Controller
{
    public function indexAction()
    { 
      return $this->render('AcmeRestaurantsBundle:Default:index.html.twig');
    }
   
    public function imagesAction()
    {
      ini_set('max_execution_time', 300);
      $em = $this->getDoctrine()->getManager();
      $pagetoken="";
      $type='gym';
      $this->getPhotos($pagetoken,$em,$type);
       
      return $this->render('AcmeRestaurantsBundle:Default:images.html.twig');
    }
     
    public function getPhotos($pagetoken,$em,$type)
    {       
      sleep(1);    
      $pagetoken=rawurlencode($pagetoken);
      $urltest="https://maps.googleapis.com/maps/api/place/nearbysearch/json?&types=".$type."&sensor=true&radius=5000&location=46.778125,23.597732&key=AIzaSyDa5Q4aq-rfNjpv-VrUoEVqGZuJW54vz4M&pagetoken=$pagetoken";
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
        $photo_reference=""; 
        $images_id=0;   
        if (isset($tuData_a->results[$i]->photos[0])){ 
        $photo_reference = $tuData_a->results[$i]->photos[0]->photo_reference;
        }            
        if (isset($tuData_a->results[$i]->id)){
        $images_id=$tuData_a->results[$i]->id;
        }
        if (isset($tuData_a->results[$i]->name)){
        $places_name=$tuData_a->results[$i]->name;    
        }
        $places_reference=""; 
        if (isset($tuData_a->results[$i]->reference)){
        $places_reference=$tuData_a->results[$i]->reference;
       
        }
        
        //$this->getPhotosByReference($places_reference);
      
        
        $id=$this->SelectImageWithId($images_id,$em);
        $photo_link=$this->RedirectUrl($photo_reference);
        
            
        if (empty($id))
        {        
          $this->InsertNewImage($photo_link,$images_id,$places_name);               
        }        
        $i=$i+1;
       }        
      }
     
      if (isset($tuData_a->next_page_token)){
      $pagetoken=$tuData_a->next_page_token;
      $this->getPhotos($pagetoken,$em,$type);  
      }
         return $pagetoken;
      }
    
    function getPhotosByReference($places_reference)
    {
      //$pagetoken=rawurlencode($pagetoken);
      //  var_dump($places_reference);
      $urltest="https://maps.googleapis.com/maps/api/place/details/json?reference=".$places_reference."&sensor=true&key=AIzaSyDa5Q4aq-rfNjpv-VrUoEVqGZuJW54vz4M";
      $url=str_replace("\"","",$urltest);
      $tuCurl = curl_init();
      curl_setopt($tuCurl, CURLOPT_URL, $url);
      curl_setopt($tuCurl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, 1);
      $tuData = curl_exec($tuCurl);
      curl_close($tuCurl);
      $tuData_a=json_decode($tuData);
      
      
     var_dump($tuData_a);   
         
         
    }   
      
      
      
    private function InsertNewImage($photo_link,$images_id,$places_name)
    {
        $image=new Images();
        $image->setImagesLink($photo_link);
        $image->setImagesId($images_id);
        $image->setPlacesName($places_name);
        $image->setImagesMain(0);
        $em = $this->getDoctrine()->getManager();
        $em->persist($image);
        $em->flush();          
    }
    
    private function SelectImageWithId($images_id,$em)
    {
       $query=$em->createQuery(
                'SELECT i from AcmeRestaurantsBundle:Images i
                 WHERE i.imagesId = :id '
                 )->setParameter(':id',$images_id);
        $id=$query->getResult();  
           
        return $id;
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
 
    function showAction($id)   
    {
       $em = $this->getDoctrine()->getManager();
       $places = $em->getRepository('AcmeRestaurantsBundle:Places')->find($id);
       if (!$places) {
            throw $this->createNotFoundException('Unable to find Places post.');
                  }
       $places_id=$places->getPlacesId();
       $comments = $em->getRepository('AcmeRestaurantsBundle:Comment')->find($places_id);
       
       return $this->render('AcmeRestaurantsBundle:Default:show.html.twig', array(
            'places'      => $places,
            'comments'  => $comments,  
        ));        
   
   }
   function sidebarAction(Request $request)
   {  
      $form = $this->get('form.factory')->create(new EnquiryType());
      $sidebarArray =($request->request->get('sidebar'));
      $places_raiting=$sidebarArray['Raiting'];
      if ((isset($places_raiting))) {
           
      return $this->redirect($this->generateUrl('_homepage',
             array('raiting' => $places_raiting,'form' => $form )));
      }
         
      return $this->render('AcmeRestaurantsBundle:Default:sidebar.html.twig', array(
            'form'        => $form->createView(),
        ));
         
    }
   
   function contactAction(Request $request)
   {
 
    $form = $this->get('form.factory')->create(new ContactType());
    $contactArray =($request->request->get('contact'));
    $contact_name=$contactArray['Name'];
    $contact_email=$contactArray['Email'];
    $contact_subject=$contactArray['Subject'];
    $contact_body=$contactArray['Body'];
     
    if ((isset($contact_name))&&(isset($contact_email))&&(isset($contact_subject))&&
                (isset($contact_body))) {           
            $this->InsertContact($contact_name,$contact_email,$contact_subject,$contact_body);
            
            return $this->redirect($this->generateUrl('_contact',
                    array('name' => $contact_name,
                          'email' =>$contact_email,
                          'subject' =>$contact_subject,
                          'body'    =>$contact_body,
                          'form' => $form )));
                                       }
        
     return $this->render('AcmeRestaurantsBundle:Default:contact.html.twig',array(
            'form'  => $form->createView(),
            
        ));
    }
   
    private function InsertContact($name,$email,$subject,$body)
    {
      $contact=new Contact();
      $contact->setContactName($name);
      $contact->setContactEmail($email);
      $contact->setConatctSubject($subject);
      $contact->setContactBody($body);
      $em = $this->getDoctrine()->getManager();
      $em->persist($contact);
      $em->flush();
     }
  
    function loginAction(Request $request)
    {
      $form=$this->get('form.factory')->create(new UsersType());
      $loginArray =($request->request->get('login'));
      $login_name=$loginArray['Username'];
      $login_password=$loginArray['Password'];
      
      $session = $this->getRequest()->getSession();
      $session->set('name', $login_name);
        
        
      if (isset($login_name)&&(isset($login_password)))
      { 
       $id=$this->CheckUser($login_name,$login_password);
         if (empty($id))
         {
              return $this->redirect($this->generateURL('_login',
                    array( 'login_name' => $login_name,
                           'login_password' =>$login_password,
                           'form'       => $form )
                    ));   
                
          }
          else
          {     
            return $this->redirect($this->generateURL('_homepage'));
          } 
       }
        
       return $this->render('AcmeRestaurantsBundle:Default:login.html.twig',array(
            'form' =>$form->createView() 
             ));
      }
   
     private function CheckUser($users_name,$users_password)
     {
        
        $em = $this->getDoctrine()->getManager();
        $query=$em->createQuery(
              'SELECT u from AcmeRestaurantsBundle:Users u
              WHERE (u.usersName = :usersName) AND (u.usersPassword = :usersPassword )');                              
        $query->setParameters(array(  
                   ':usersName' => $users_name,
                   ':usersPassword' => $users_password,
                              ));
        $id=$query->getResult();
     
        return $id;        
     }
     
   
     
     
 }



