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
    private $nomProposition;

    /**
     * @var string
     *
     * @ORM\Column(name="description_prop", type="string", length=255)
     */
    private $descriptionProposition;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_prop", type="string", length=255)
     */
    private $lieuProposition;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date1_prop", type="datetime")
     */
    private $date1Proposition;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date2_prop", type="datetime")
     */
    private $date2Proposition;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date3_prop", type="datetime")
     */
    private $date3Proposition;

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
    private $prixProposition;

    /**
     * @var bool
     *
     * @ORM\Column(name="recurrence_prop", type="boolean")
     */
    private $recurrenceProposition;

    /**
     * @var string
     *
     * @ORM\Column(name="recurrence_comm", type="string", length=255)
     */
    private $recurrenceComm;




    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomProposition
     *
     * @param string $nomProposition
     *
     * @return proposition_activite
     */
    public function setNomProposition($nomProposition)
    {
        $this->nomProposition = $nomProposition;

        return $this;
    }

    /**
     * Get nomProposition
     *
     * @return string
     */
    public function getNomProposition()
    {
        return $this->nomProposition;
    }

    /**
     * Set descriptionProposition
     *
     * @param string $descriptionProposition
     *
     * @return proposition_activite
     */
    public function setDescriptionProposition($descriptionProposition)
    {
        $this->descriptionProposition = $descriptionProposition;

        return $this;
    }

    /**
     * Get descriptionProposition
     *
     * @return string
     */
    public function getDescriptionProposition()
    {
        return $this->descriptionProposition;
    }

    /**
     * Set lieuProposition
     *
     * @param string $lieuProposition
     *
     * @return proposition_activite
     */
    public function setLieuProposition($lieuProposition)
    {
        $this->lieuProposition = $lieuProposition;

        return $this;
    }

    /**
     * Get lieuProposition
     *
     * @return string
     */
    public function getLieuProposition()
    {
        return $this->lieuProposition;
    }

    /**
     * Set date1Proposition
     *
     * @param \DateTime $date1Proposition
     *
     * @return proposition_activite
     */
    public function setDate1Proposition($date1Proposition)
    {
        $this->date1Proposition = $date1Proposition;

        return $this;
    }

    /**
     * Get date1Proposition
     *
     * @return \DateTime
     */
    public function getDate1Proposition()
    {
        return $this->date1Proposition;
    }

    /**
     * Set date2Proposition
     *
     * @param \DateTime $date2Proposition
     *
     * @return proposition_activite
     */
    public function setDate2Proposition($date2Proposition)
    {
        $this->date2Proposition = $date2Proposition;

        return $this;
    }

    /**
     * Get date2Proposition
     *
     * @return \DateTime
     */
    public function getDate2Proposition()
    {
        return $this->date2Proposition;
    }

    /**
     * Set date3Proposition
     *
     * @param \DateTime $date3Proposition
     *
     * @return proposition_activite
     */
    public function setDate3Proposition($date3Proposition)
    {
        $this->date3Proposition = $date3Proposition;

        return $this;
    }

    /**
     * Get date3Proposition
     *
     * @return \DateTime
     */
    public function getDate3Proposition()
    {
        return $this->date3Proposition;
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
     * @return integer
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
     * @return integer
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
     * @return integer
     */
    public function getComptDate3()
    {
        return $this->comptDate3;
    }

    /**
     * Set prixProposition
     *
     * @param float $prixProposition
     *
     * @return proposition_activite
     */
    public function setPrixProposition($prixProposition)
    {
        $this->prixProposition = $prixProposition;

        return $this;
    }

    /**
     * Get prixProposition
     *
     * @return float
     */
    public function getPrixProposition()
    {
        return $this->prixProposition;
    }

    /**
     * Set recurrenceProposition
     *
     * @param boolean $recurrenceProposition
     *
     * @return proposition_activite
     */
    public function setRecurrenceProposition($recurrenceProposition)
    {
        $this->recurrenceProposition = $recurrenceProposition;

        return $this;
    }

    /**
     * Get recurrenceProposition
     *
     * @return boolean
     */
    public function getRecurrenceProposition()
    {
        return $this->recurrenceProposition;
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
