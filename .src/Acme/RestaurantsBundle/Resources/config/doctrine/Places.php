<?php



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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="places_id", type="text", nullable=false)
     */
    private $placesId;

    /**
     * @var string
     *
     * @ORM\Column(name="places_name", type="text", nullable=false)
     */
    private $placesName;

    /**
     * @var string
     *
     * @ORM\Column(name="places_address", type="text", nullable=false)
     */
    private $placesAddress;

    /**
     * @var integer
     *
     * @ORM\Column(name="places_rating", type="integer", nullable=false)
     */
    private $placesRating;

    /**
     * @var string
     *
     * @ORM\Column(name="places_lat", type="text", nullable=false)
     */
    private $placesLat;

    /**
     * @var string
     *
     * @ORM\Column(name="places_lng", type="text", nullable=false)
     */
    private $placesLng;

    /**
     * @var integer
     *
     * @ORM\Column(name="places_open_now", type="integer", nullable=false)
     */
    private $placesOpenNow;

    /**
     * @var string
     *
     * @ORM\Column(name="places_reference", type="text", nullable=false)
     */
    private $placesReference;

    /**
     * @var string
     *
     * @ORM\Column(name="places_types", type="text", nullable=false)
     */
    private $placesTypes;

    /**
     * @var string
     *
     * @ORM\Column(name="places_icon", type="text", nullable=false)
     */
    private $placesIcon;


}
