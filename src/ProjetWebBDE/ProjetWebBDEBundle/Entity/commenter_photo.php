<?php

namespace ProjetWebBDE\ProjetWebBDEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commenter_photo
 *
 * @ORM\Table(name="commenter_photo")
 * @ORM\Entity(repositoryClass="ProjetWebBDE\ProjetWebBDEBundle\Repository\commenter_photoRepository")
 */
class commenter_photo
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_comm_photo", type="datetime")
     */
    private $dateCommPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_comm_photo", type="string", length=255)
     */
    private $texteCommPhoto;


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
     * Set dateCommPhoto
     *
     * @param \DateTime $dateCommPhoto
     *
     * @return commenter_photo
     */
    public function setDateCommPhoto($dateCommPhoto)
    {
        $this->dateCommPhoto = $dateCommPhoto;

        return $this;
    }

    /**
     * Get dateCommPhoto
     *
     * @return \DateTime
     */
    public function getDateCommPhoto()
    {
        return $this->dateCommPhoto;
    }

    /**
     * Set texteCommPhoto
     *
     * @param string $texteCommPhoto
     *
     * @return commenter_photo
     */
    public function setTexteCommPhoto($texteCommPhoto)
    {
        $this->texteCommPhoto = $texteCommPhoto;

        return $this;
    }

    /**
     * Get texteCommPhoto
     *
     * @return string
     */
    public function getTexteCommPhoto()
    {
        return $this->texteCommPhoto;
    }
}

