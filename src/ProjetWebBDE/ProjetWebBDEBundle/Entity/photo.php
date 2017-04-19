<?php

namespace ProjetWebBDE\ProjetWebBDEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity(repositoryClass="ProjetWebBDE\ProjetWebBDEBundle\Repository\photoRepository")
 */
class photo
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
     * @ORM\Column(name="nom_photo", type="string", length=255)
     */
    private $nomPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="url_photo", type="string", length=255)
     */
    private $urlPhoto;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_like", type="integer")
     */
    private $nbLike;


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
     * Set nomPhoto
     *
     * @param string $nomPhoto
     *
     * @return photo
     */
    public function setNomPhoto($nomPhoto)
    {
        $this->nomPhoto = $nomPhoto;

        return $this;
    }

    /**
     * Get nomPhoto
     *
     * @return string
     */
    public function getNomPhoto()
    {
        return $this->nomPhoto;
    }

    /**
     * Set urlPhoto
     *
     * @param string $urlPhoto
     *
     * @return photo
     */
    public function setUrlPhoto($urlPhoto)
    {
        $this->urlPhoto = $urlPhoto;

        return $this;
    }

    /**
     * Get urlPhoto
     *
     * @return string
     */
    public function getUrlPhoto()
    {
        return $this->urlPhoto;
    }

    /**
     * Set nbLike
     *
     * @param integer $nbLike
     *
     * @return photo
     */
    public function setNbLike($nbLike)
    {
        $this->nbLike = $nbLike;

        return $this;
    }

    /**
     * Get nbLike
     *
     * @return int
     */
    public function getNbLike()
    {
        return $this->nbLike;
    }
}

