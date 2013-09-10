<?php
// src/Acme/RestaurantsBundle/Entity/Repository/CommentRepository.php

namespace Acme\RestaurantsBundle\Entity\Repository;
use Doctrine\ORM\EntityRepository;

class CommentRepository extends EntityRepository
{
    public function getCommentsForPlace($blogId, $approved = true)
    {
        echo "sssssss";
        $qb = $this->createQueryBuilder('c')
                   ->select('c')
                   ->where('c.blog = :blog_id')
                   ->addOrderBy('c.created')
                   ->setParameter('blog_id', $blogId);

        if (false === is_null($approved))
            $qb->andWhere('c.approved = :approved')
               ->setParameter('approved', $approved);

        return $qb->getQuery()
                  ->getResult();
    }
}
