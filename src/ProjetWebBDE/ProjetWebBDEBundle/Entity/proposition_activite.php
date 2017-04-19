<?php

namespace ProjetWebBDE\ProjetWebBDEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * proposition_activite
 *
 * @ORM\Table(name="proposition_activite")
 * @ORM\Entity(repositoryClass="ProjetWebBDE\ProjetWebBDEBundle\Repository\proposition_activiteRepository")
 */
class proposition_activite
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
     * @ORM\Column(name="nom_prop", type="string", length=255)
     */
    private $nomProp;

    /**
     * @var string
     *
     * @ORM\Column(name="description_prop", type="string", length=255)
     */
    private $descriptionProp;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_prop", type="string", length=255)
     */
    private $lieuProp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date1_prop", type="datetime")
     */
    private $date1Prop;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date2_prop", type="datetime")
     */
    private $date2Prop;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date3_prop", type="datetime")
     */
    private $date3Prop;

    /**
     * @var int
     *
     * @ORM\Column(name="compt_date1", type="integer")
     */
    private $comptDate1;

    /**
     * @var int
     *
     * @ORM\Column(name="compt_date2", type="integer")
     */
    private $comptDate2;

    /**
     * @var int
     *
     * @ORM\Column(name="compt_date3", type="integer")
     */
    private $comptDate3;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_prop", type="float")
     */
    private $prixProp;

    /**
     * @var bool
     *
     * @ORM\Column(name="recurrence_prop", type="boolean")
     */
    private $recurrenceProp;

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
     * Set nomProp
     *
     * @param string $nomProp
     *
     * @return proposition_activite
     */
    public function setNomProp($nomProp)
    {
        $this->nomProp = $nomProp;

        return $this;
    }

    /**
     * Get nomProp
     *
     * @return string
     */
    public function getNomProp()
    {
        return $this->nomProp;
    }

    /**
     * Set descriptionProp
     *
     * @param string $descriptionProp
     *
     * @return proposition_activite
     */
    public function setDescriptionProp($descriptionProp)
    {
        $this->descriptionProp = $descriptionProp;

        return $this;
    }

    /**
     * Get descriptionProp
     *
     * @return string
     */
    public function getDescriptionProp()
    {
        return $this->descriptionProp;
    }

    /**
     * Set lieuProp
     *
     * @param string $lieuProp
     *
     * @return proposition_activite
     */
    public function setLieuProp($lieuProp)
    {
        $this->lieuProp = $lieuProp;

        return $this;
    }

    /**
     * Get lieuProp
     *
     * @return string
     */
    public function getLieuProp()
    {
        return $this->lieuProp;
    }

    /**
     * Set date1Prop
     *
     * @param \DateTime $date1Prop
     *
     * @return proposition_activite
     */
    public function setDate1Prop($date1Prop)
    {
        $this->date1Prop = $date1Prop;

        return $this;
    }

    /**
     * Get date1Prop
     *
     * @return \DateTime
     */
    public function getDate1Prop()
    {
        return $this->date1Prop;
    }

    /**
     * Set date2Prop
     *
     * @param \DateTime $date2Prop
     *
     * @return proposition_activite
     */
    public function setDate2Prop($date2Prop)
    {
        $this->date2Prop = $date2Prop;

        return $this;
    }

    /**
     * Get date2Prop
     *
     * @return \DateTime
     */
    public function getDate2Prop()
    {
        return $this->date2Prop;
    }

    /**
     * Set date3Prop
     *
     * @param \DateTime $date3Prop
     *
     * @return proposition_activite
     */
    public function setDate3Prop($date3Prop)
    {
        $this->date3Prop = $date3Prop;

        return $this;
    }

    /**
     * Get date3Prop
     *
     * @return \DateTime
     */
    public function getDate3Prop()
    {
        return $this->date3Prop;
    }

    /**
     * Set comptDate1
     *
     * @param integer $comptDate1
     *
     * @return proposition_activite
     */
    public function setComptDate1($comptDate1)
    {
        $this->comptDate1 = $comptDate1;

        return $this;
    }

    /**
     * Get comptDate1
     *
     * @return int
     */
    public function getComptDate1()
    {
        return $this->comptDate1;
    }

    /**
     * Set comptDate2
     *
     * @param integer $comptDate2
     *
     * @return proposition_activite
     */
    public function setComptDate2($comptDate2)
    {
        $this->comptDate2 = $comptDate2;

        return $this;
    }

    /**
     * Get comptDate2
     *
     * @return int
     */
    public function getComptDate2()
    {
        return $this->comptDate2;
    }

    /**
     * Set comptDate3
     *
     * @param integer $comptDate3
     *
     * @return proposition_activite
     */
    public function setComptDate3($comptDate3)
    {
        $this->comptDate3 = $comptDate3;

        return $this;
    }

    /**
     * Get comptDate3
     *
     * @return int
     */
    public function getComptDate3()
    {
        return $this->comptDate3;
    }

    /**
     * Set prixProp
     *
     * @param integer $prixProp
     *
     * @return proposition_activite
     */
    public function setPrixProp($prixProp)
    {
        $this->prixProp = $prixProp;

        return $this;
    }

    /**
     * Get prixProp
     *
     * @return int
     */
    public function getPrixProp()
    {
        return $this->prixProp;
    }

    /**
     * Set recurrenceProp
     *
     * @param boolean $recurrenceProp
     *
     * @return proposition_activite
     */
    public function setRecurrenceProp($recurrenceProp)
    {
        $this->recurrenceProp = $recurrenceProp;

        return $this;
    }

    /**
     * Get recurrenceProp
     *
     * @return bool
     */
    public function getRecurrenceProp()
    {
        return $this->recurrenceProp;
    }

    /**
     * Set recurrenceComm
     *
     * @param string $recurrenceComm
     *
     * @return proposition_activite
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

