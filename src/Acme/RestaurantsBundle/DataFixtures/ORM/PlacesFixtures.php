<?php
/*
namespace Acme\RestaurantsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Acme\RestaurantsBundle\Entity\Places;
use Doctrine\DBAL\DriverManager;
use Acme\RestaurantsBundle\Entity\Comment;

class PlacesFixtures extends AbstractFixture implements OrderedFixtureInterface
{   
    public function load(ObjectManager $manager)
    { 
      $em = $this->getDoctrine()->getManager();            
      $places = $em->createQueryBuilder()
                    ->select('p')
                    ->from('AcmeRestaurantsBundle:Places',  'p')
                    ->getQuery()
                    ->getResult();

        $manager->flush();
        
        foreach ($places as $place)
        {
   
        $manager->flush();

        $this->addReference('1', $place.placesID);
        $this->addReference('2', $place.placesID);
        $this->addReference('3', $place.placesID);
        $this->addReference('4', $place.placesID);
        $this->addReference('5', $place.placesID);
        }
    }

    public function getOrder()
    {
        return 1;
    }

 * }
 */