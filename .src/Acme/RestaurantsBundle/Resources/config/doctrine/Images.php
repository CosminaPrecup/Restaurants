<?php



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
     * @var integer
     *
     * @ORM\Column(name="images_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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


}
