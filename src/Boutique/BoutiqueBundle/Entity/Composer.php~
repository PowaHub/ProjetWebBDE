<?php

namespace Boutique\BoutiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composer
 *
 * @ORM\Table(name="composer")
 * @ORM\Entity(repositoryClass="Boutique\BoutiqueBundle\Repository\ComposerRepository")
 */
class Composer
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
     * @var float
     *
     * @ORM\Column(name="prix_achat", type="float")
     */
    private $prixAchat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_achat", type="date")
     */
    private $dateAchat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_achat", type="time")
     */
    private $heureAchat;


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
     * Set prixAchat
     *
     * @param float $prixAchat
     *
     * @return Composer
     */
    public function setPrixAchat($prixAchat)
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    /**
     * Get prixAchat
     *
     * @return float
     */
    public function getPrixAchat()
    {
        return $this->prixAchat;
    }

    /**
     * Set dateAchat
     *
     * @param \DateTime $dateAchat
     *
     * @return Composer
     */
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    /**
     * Get dateAchat
     *
     * @return \DateTime
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * Set heureAchat
     *
     * @param \DateTime $heureAchat
     *
     * @return Composer
     */
    public function setHeureAchat($heureAchat)
    {
        $this->heureAchat = $heureAchat;

        return $this;
    }

    /**
     * Get heureAchat
     *
     * @return \DateTime
     */
    public function getHeureAchat()
    {
        return $this->heureAchat;
    }
}
