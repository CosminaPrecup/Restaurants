<?php
namespace Acme\RestaurantsBundle\Entity\Repository;
use Doctrine\ORM\EntityRepository;
use Acme\RestaurantsBundle\Entity\Places;
class PlacesRepository extends EntityRepository
{
  
    public function getLatestBlogs($limit = null)
    {
        
       echo "aaaaaaaaaaa";  
      $qb = $this->createQueryBuilder('b')
                   ->select('b');        
      if (false === is_null($limit))
            $qb->setMaxResults($limit);

       return $qb->getQuery()
                  ->getResult();
    }
   
}

?>
