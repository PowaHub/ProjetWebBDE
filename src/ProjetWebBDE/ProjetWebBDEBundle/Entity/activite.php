<?php

namespace ProjetWebBDE\ProjetWebBDEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * activite
 *
 * @ORM\Table(name="activite")
 * @ORM\Entity(repositoryClass="ProjetWebBDE\ProjetWebBDEBundle\Repository\activiteRepository")
 */
class activite
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
     * @ORM\Column(name="nom_act", type="string", length=255)
     */
    private $nomAct;

    /**
     * @var string
     *
     * @ORM\Column(name="description_act", type="string", length=255)
     */
    private $descriptionAct;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_act", type="string", length=255)
     */
    private $lieuAct;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_act", type="datetime")
     */
    private $dateAct;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_act", type="float")
     */
    private $prixAct;

    /**
     * @var bool
     *
     * @ORM\Column(name="recurrence_act", type="boolean")
     */
    private $recurrenceAct;

    /**
     * @var string
     *
     * @ORM\Column(name="recurrence_comm", type="string", length=255)
     */
    private $recurrenceComm;


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
     * Set nomAct
     *
     * @param string $nomAct
     *
     * @return activite
     */
    public function setNomAct($nomAct)
    {
        $this->nomAct = $nomAct;

        return $this;
    }

    /**
     * Get nomAct
     *
     * @return string
     */
    public function getNomAct()
    {
        return $this->nomAct;
    }

    /**
     * Set descriptionAct
     *
     * @param string $descriptionAct
     *
     * @return activite
     */
    public function setDescriptionAct($descriptionAct)
    {
        $this->descriptionAct = $descriptionAct;

        return $this;
    }

    /**
     * Get descriptionAct
     *
     * @return string
     */
    public function getDescriptionAct()
    {
        return $this->descriptionAct;
    }

    /**
     * Set lieuAct
     *
     * @param string $lieuAct
     *
     * @return activite
     */
    public function setLieuAct($lieuAct)
    {
        $this->lieuAct = $lieuAct;

        return $this;
    }

    /**
     * Get lieuAct
     *
     * @return string
     */
    public function getLieuAct()
    {
        return $this->lieuAct;
    }

    /**
     * Set dateAct
     *
     * @param \DateTime $dateAct
     *
     * @return activite
     */
    public function setDateAct($dateAct)
    {
        $this->dateAct = $dateAct;

        return $this;
    }

    /**
     * Get dateAct
     *
     * @return \DateTime
     */
    public function getDateAct()
    {
        return $this->dateAct;
    }

    /**
     * Set prixAct
     *
     * @param float $prixAct
     *
     * @return activite
     */
    public function setPrixAct($prixAct)
    {
        $this->prixAct = $prixAct;

        return $this;
    }

    /**
     * Get prixAct
     *
     * @return float
     */
    public function getPrixAct()
    {
        return $this->prixAct;
    }

    /**
     * Set recurrenceAct
     *
     * @param boolean $recurrenceAct
     *
     * @return activite
     */
    public function setRecurrenceAct($recurrenceAct)
    {
        $this->recurrenceAct = $recurrenceAct;

        return $this;
    }

    /**
     * Get recurrenceAct
     *
     * @return bool
     */
    public function getRecurrenceAct()
    {
        return $this->recurrenceAct;
    }

    /**
     * Set recurrenceComm
     *
     * @param string $recurrenceComm
     *
     * @return activite
     */
    public function setRecurrenceComm($recurrenceComm)
    {
        $this->recurrenceComm = $recurrenceComm;

        return $this;
    }

    /**
     * Get recurrenceComm
     *
     * @return string
     */
    public function getRecurrenceComm()
    {
        return $this->recurrenceComm;
    }
}

