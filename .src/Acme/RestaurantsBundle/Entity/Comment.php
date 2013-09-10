<?php

namespace Acme\RestaurantsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

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
     *
     * @ORM\Column(name="comment_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentId;


}
