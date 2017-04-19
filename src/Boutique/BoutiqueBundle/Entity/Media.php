<?php

namespace Boutique\BoutiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="Boutique\BoutiqueBundle\Repository\MediaRepository")
 */
class Media
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_media", type="text")
     */
    private $nomMedia;

    /**
     * @var string
     *
     * @ORM\Column(name="type_media", type="text")
     */
    private $typeMedia;

    /**
     * @var string
     *
     * @ORM\Column(name="url_media", type="text")
     */
    private $urlMedia;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomMedia
     *
     * @param string $nomMedia
     *
     * @return Media
     */
    public function setNomMedia($nomMedia)
    {
        $this->nomMedia = $nomMedia;

        return $this;
    }

    /**
     * Get nomMedia
     *
     * @return string
     */
    public function getNomMedia()
    {
        return $this->nomMedia;
    }

    /**
     * Set typeMedia
     *
     * @param string $typeMedia
     *
     * @return Media
     */
    public function setTypeMedia($typeMedia)
    {
        $this->typeMedia = $typeMedia;

        return $this;
    }

    /**
     * Get typeMedia
     *
     * @return string
     */
    public function getTypeMedia()
    {
        return $this->typeMedia;
    }

    /**
     * Set urlMedia
     *
     * @param string $urlMedia
     *
     * @return Media
     */
    public function setUrlMedia($urlMedia)
    {
        $this->urlMedia = $urlMedia;

        return $this;
    }

    /**
     * Get urlMedia
     *
     * @return string
     */
    public function getUrlMedia()
    {
        return $this->urlMedia;
    }
}
