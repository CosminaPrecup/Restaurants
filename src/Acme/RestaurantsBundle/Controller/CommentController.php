<?php
// Acme\RestaurantsBundle/Controller/CommentController.php

namespace Acme\RestaurantsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\RestaurantsBundle\Entity\Comment;
use Acme\RestaurantsBundle\Form\CommentType;
use Acme\RestaurantsBundle\Entity\Places;
use Doctrine\DBAL\DriverManager;


class CommentController extends Controller
{ 

    public function createAction($id)
    {
      
      $place = $this->getPlace($id);
      $request = $this->getRequest();
      $comment  = new Comment();
      $createArray =($request->request->get('comment'));
      $comment_approved=1;
      $place_id=$place->getPlacesId();
      $comment_content=$createArray['commentContent'];
      $comment_user=$createArray['commentUser'];
      $form    = $this->createForm(new CommentType(), $comment);
      
      
      if ((isset($comment_content))&&(isset($comment_user)))
      {  
      
      
        $this->insertCommnet($place_id,$comment_user,$comment_approved,$comment_content);
        
           
        
            return $this->redirect($this->generateUrl('_show'
               , array(
                'id'    => $id,
                'comment' => $comment->getCommentId()
                )));
      }
        
      
       
            return $this->render('AcmeRestaurantsBundle:Comment:form.html.twig', array(
             'comment' => $comment,
             'form'    => $form->createView(),
             'id'      => $id 
              ));
        
     }
   
    protected function getPlace($id)
    {   
        $em = $this->getDoctrine()->getManager();
        $place = $em->getRepository('AcmeRestaurantsBundle:Places')->find($id);
        if (!$place) {
            throw $this->createNotFoundException('Unable to find Places post.');
                   }
      
        return $place;
    }
  
    private function insertCommnet($place_id,$comment_user,$comment_approved,$comment_content)
    {
        $comment=new Comment();
        $comment->setId(0);
        $comment->setPlaceId($place_id);
        $comment->setCommentUser($comment_user);
        $comment->setCommentApproved($comment_approved);
        $comment->setCommentCreated(new \DateTime);      
        $comment->setCommentUpdated(new \DateTime);
        $comment->setCommentContent($comment_content);      
        $em = $this->getDoctrine()->getManager();
        $em->persist($comment);
        $em->flush();      
    }
  
    public  function commentsAction($id)
    {
        $place = $this->getPlace($id);
        $place_id=$place->getPlacesId();
        $em = $this->getDoctrine()->getManager();
        $query=$em->createQuery(
                'SELECT c from AcmeRestaurantsBundle:Comment c
                 WHERE c.placeId = :place_id '
                 )->setParameter(':place_id',$place_id);
        $comments=$query->getResult();
    
        return $this->render('AcmeRestaurantsBundle:Comment:index.html.twig', array(
             'comments' => $comments,
          ));
        
    }
    

}
