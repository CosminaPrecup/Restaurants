<?php

namespace Acme\RestaurantsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Places
 *
 * @ORM\Table(name="places")
 * @ORM\Entity
 */
class Places
{
    /**
     * @var string
     *
     * @ORM\Column(name="places_id", type="string", length=255, nullable=true)
     */
    private $placesId;

    /**
     * @var string
     *
     * @ORM\Column(name="places_name", type="string", length=255, nullable=false)
     */
    private $placesName;

    /**
     * @var string
     *
     * @ORM\Column(name="places_address", type="string", length=255, nullable=true)
     */
    private $placesAddress;

    /**
     * @var integer
     *
     * @ORM\Column(name="places_rating", type="integer", nullable=true)
     */
    private $placesRating;

    /**
     * @var string
     *
     * @ORM\Column(name="places_lat", type="string", length=255, nullable=true)
     */
    private $placesLat;

    /**
     * @var string
     *
     * @ORM\Column(name="places_lng", type="string", length=255, nullable=true)
     */
    private $placesLng;

    /**
     * @var string
     *
     * @ORM\Column(name="places_open_now", type="string", length=255, nullable=true)
     */
    private $placesOpenNow;

    /**
     * @var string
     *
     * @ORM\Column(name="places_reference", type="string", length=255, nullable=true)
     */
    private $placesReference;

    /**
     * @var string
     *
     * @ORM\Column(name="places_types", type="string", length=255, nullable=true)
     */
    private $placesTypes;

    /**
     * @var string
     *
     * @ORM\Column(name="places_icon", type="string", length=255, nullable=true)
     */
    private $placesIcon;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
