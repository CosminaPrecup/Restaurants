<?php

namespace Acme\RestaurantsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Images
 *
 * @ORM\Table(name="images")
 * @ORM\Entity
 */
class Images
{
    /**
     * @var string
     *
     * @ORM\Column(name="images_id", type="text", nullable=false)
     */
    private $imagesId;

    /**
     * @var string
     *
     * @ORM\Column(name="images_link", type="text", nullable=false)
     */
    private $imagesLink;

    /**
     * @var integer
     *
     * @ORM\Column(name="images_main", type="integer", nullable=false)
     */
    private $imagesMain;

    /**
     * @var string
     *
     * @ORM\Column(name="places_name", type="text", nullable=false)
     */
    private $placesName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
