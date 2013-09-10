<?php
namespace Acme\RestaurantsBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="Acme\RestaurantsBundle\Entity\Repository\CommentRepository")
 * @ORM\Table(name="comment")
 * @ORM\HasLifecycleCallbacks
 */
class Comment
{
    /**
     * @var string
     *
     * @ORM\Column(name="place_id", type="text", nullable=false)
     */
    private $placeId;
    /**
     * @var string
     *
     * @ORM\Column(name="comment_user", type="text", nullable=false)
     */
    private $commentUser;
     /**
     * @var integer
     *
     * @ORM\Column(name="comment_approved", type="integer", nullable=false)
     */
    private $commentApproved;
   /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_created", type="datetime", nullable=false)
     */
    private $commentCreated;
   /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_updated", type="datetime", nullable=false)
     */
    private $commentUpdated;
   /**
     * @var string
     *
     * @ORM\Column(name="comment_content", type="text", nullable=false)
     */
    private $commentContent;
   /**
     * @var integer
     * @ORM\Column(name="comment_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\ManyToOne(targetEntity="Places", inversedBy="comments")
     * @ORM\JoinColumn(name="comment_id", referencedColumnName="id")

     */
    private $commentId;
    
   
    public function __construct()
    {
        $this->setCommentCreated(new \DateTime());
        $this->setCommentUpdated(new \DateTime());

        $this->setCommentApproved(1);
    }
      
   /**
     * Set placeId
     *
     * @param string $placeId
     * @return Comment
     */
    
    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;
    
        return $this;
    }
   /**
     * Get placeId
     *
     * @return string 
     */
    public function getPlaceId()
    {
        return $this->placeId;
    }

    /**
     * Set commentUser
     *
     * @param string $commentUser
     * @return Comment
     */
    public function setCommentUser($commentUser)
    {
        $this->commentUser = $commentUser;
    
        return $this;
    }

    /**
     * Get commentUser
     *
     * @return string 
     */
    public function getCommentUser()
    {
        return $this->commentUser;
    }

    /**
     * Set commentApproved
     *
     * @param integer $commentApproved
     * @return Comment
     */
    public function setCommentApproved($commentApproved)
    {
        $this->commentApproved = $commentApproved;
    
        return $this;
    }

    /**
     * Get commentApproved
     *
     * @return integer 
     */
    public function getCommentApproved()
    {
        return $this->commentApproved;
    }

    /**
     * Set commentCreated
     * 
     * @param \DateTime $commentCreated
     * @return Comment
     */
    public function setCommentCreated(\DateTime $commentCreated)
    {
      
        $this->commentCreated = $commentCreated;
    
        return $this;
    }

    /**
     * Get commentCreated
     *
     * 
     * @return \DateTime 
     */
    public function getCommentCreated()
    {
        return $this->commentCreated;
    }

    /**
     * Set commentUpdated
     *
     * @param \DateTime $commentUpdated
     * @return Comment
     */
    public function setCommentUpdated( \DateTime $commentUpdated)
    {
        $this->commentUpdated = $commentUpdated;
    
        return $this;
    }
    
    /**
     * Get commentUpdated
     *
     * @return \DateTime 
     */
    public function getCommentUpdated()
    {
        return $this->commentUpdated;
    }

    /**
     * Set commentContent
     *
     * @param string $commentContent
     * @return Comment
     */
    public function setCommentContent($commentContent)
    {
        $this->commentContent = $commentContent;
    
        return $this;
    }

    /**
     * Get commentContent
     *
     * @return string 
     */
    //this is fun?I'm becoming a programmer Really?:))
    public function getCommentContent()
    {
        return $this->commentContent;
    }

    /**
     * Get commentId
     *
     * @return integer 
     */
    public function getCommentId()
    {
        return $this->commentId;
    }
    /*
        public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('user', new NotBlank(array(
            'message' => 'You must enter your name'
        )));
        $metadata->addPropertyConstraint('comment', new NotBlank(array(
            'message' => 'You must enter a comment'
        )));
    }
     
     */
    
    public function __toString()
    {
    return $this->getCommentContent();
    }
    public function addComment($places_id)
    {
        
        
        
    }
    /**
     * @var integer
     */
    private $id;


    /**
     * Set id
     *
     * @param integer $id
     * @return Comment
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}