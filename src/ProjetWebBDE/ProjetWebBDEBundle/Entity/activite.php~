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
     * @ORM\Column(name="nom_Activite", type="string", length=255)
     */
    private $nomActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_Activite", type="string", length=255)
     */
    private $lieuActivite;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_Activite", type="float")
     */
    private $prixActivite;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date_Activite", type="date")
     */
    private $dateActivite;

    /**
     * @var \Time
     *
     * @ORM\Column(name="time_Activite", type="time")
     */
    private $heureActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="description_Activite", type="string", length=255)
     */
    private $descriptionActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="recurrence_activite", type="string", length=255)
     */
    private $recurrenceActivite;





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
     * Set nomActivite
     *
     * @param string $nomActivite
     *
     * @return activite
     */
    public function setNomActivite($nomActivite)
    {
        $this->nomActivite = $nomActivite;

        return $this;
    }

    /**
     * Get nomActivite
     *
     * @return string
     */
    public function getNomActivite()
    {
        return $this->nomActivite;
    }

    /**
     * Set lieuActivite
     *
     * @param string $lieuActivite
     *
     * @return activite
     */
    public function setLieuActivite($lieuActivite)
    {
        $this->lieuActivite = $lieuActivite;

        return $this;
    }

    /**
     * Get lieuActivite
     *
     * @return string
     */
    public function getLieuActivite()
    {
        return $this->lieuActivite;
    }

    /**
     * Set prixActivite
     *
     * @param float $prixActivite
     *
     * @return activite
     */
    public function setPrixActivite($prixActivite)
    {
        $this->prixActivite = $prixActivite;

        return $this;
    }

    /**
     * Get prixActivite
     *
     * @return float
     */
    public function getPrixActivite()
    {
        return $this->prixActivite;
    }

    /**
     * Set dateActivite
     *
     * @param \DateTime $dateActivite
     *
     * @return activite
     */
    public function setDateActivite($dateActivite)
    {
        $this->dateActivite = $dateActivite;

        return $this;
    }

    /**
     * Get dateActivite
     *
     * @return \DateTime
     */
    public function getDateActivite()
    {
        return $this->dateActivite;
    }

    /**
     * Set heureActivite
     *
     * @param \DateTime $heureActivite
     *
     * @return activite
     */
    public function setHeureActivite($heureActivite)
    {
        $this->heureActivite = $heureActivite;

        return $this;
    }

    /**
     * Get heureActivite
     *
     * @return \DateTime
     */
    public function getHeureActivite()
    {
        return $this->heureActivite;
    }

    /**
     * Set descriptionActivite
     *
     * @param string $descriptionActivite
     *
     * @return activite
     */
    public function setDescriptionActivite($descriptionActivite)
    {
        $this->descriptionActivite = $descriptionActivite;

        return $this;
    }

    /**
     * Get descriptionActivite
     *
     * @return string
     */
    public function getDescriptionActivite()
    {
        return $this->descriptionActivite;
    }

    /**
     * Set recurrenceActivite
     *
     * @param string $recurrenceActivite
     *
     * @return activite
     */
    public function setRecurrenceActivite($recurrenceActivite)
    {
        $this->recurrenceActivite = $recurrenceActivite;

        return $this;
    }

    /**
     * Get recurrenceActivite
     *
     * @return string
     */
    public function getRecurrenceActivite()
    {
        return $this->recurrenceActivite;
    }
}
