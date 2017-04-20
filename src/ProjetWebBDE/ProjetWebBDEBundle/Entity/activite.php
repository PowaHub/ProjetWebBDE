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
     * @ORM\Column(name="description_Activite", type="string", length=255)
     */
    private $descriptionActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_Activite", type="string", length=255)
     */
    private $lieuActivite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_Activite", type="datetime")
     */
    private $dateActivite;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_Activite", type="float")
     */
    private $prixActivite;

    /**
     * @var bool
     *
     * @ORM\Column(name="recurrence_Activite", type="boolean")
     */
    private $recurrenceActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="recurrence_commentaire", type="string", length=255)
     */
    private $recurrenceCommentaire;



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
     * Set recurrenceActivite
     *
     * @param boolean $recurrenceActivite
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
     * @return boolean
     */
    public function getRecurrenceActivite()
    {
        return $this->recurrenceActivite;
    }

    /**
     * Set recurrenceCommentaire
     *
     * @param string $recurrenceCommentaire
     *
     * @return activite
     */
    public function setRecurrenceCommentaire($recurrenceCommentaire)
    {
        $this->recurrenceCommentaire = $recurrenceCommentaire;

        return $this;
    }

    /**
     * Get recurrenceCommentaire
     *
     * @return string
     */
    public function getRecurrenceCommentaire()
    {
        return $this->recurrenceCommentaire;
    }
}
