<?php

namespace Boutique\BoutiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="Boutique\BoutiqueBundle\Repository\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="nom_art", type="text")
     */
    private $nomArt;

    /**
     * @var string
     *
     * @ORM\Column(name="description_art", type="string", length=255)
     */
    private $descriptionArt;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_art", type="float")
     */
    private $prixArt;

    /**
     * @var int
     *
     * @ORM\Column(name="stock_art", type="smallint")
     */
    private $stockArt;

    /**
     * @ORM\OneToOne(targetEntity="Boutique\BoutiqueBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    public $media;

    /*/**
     * @ORM\OneToOne(targetEntity="Boutique\BoutiqueBundle\Entity\Categorie", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
   /* public $categorie;*/
    


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
     * Set nomArt
     *
     * @param string $nomArt
     *
     * @return Article
     */
    public function setNomArt($nomArt)
    {
        $this->nomArt = $nomArt;

        return $this;
    }

    /**
     * Get nomArt
     *
     * @return string
     */
    public function getNomArt()
    {
        return $this->nomArt;
    }

    /**
     * Set descriptionArt
     *
     * @param string $descriptionArt
     *
     * @return Article
     */
    public function setDescriptionArt($descriptionArt)
    {
        $this->descriptionArt = $descriptionArt;

        return $this;
    }

    /**
     * Get descriptionArt
     *
     * @return string
     */
    public function getDescriptionArt()
    {
        return $this->descriptionArt;
    }

    /**
     * Set prixArt
     *
     * @param float $prixArt
     *
     * @return Article
     */
    public function setPrixArt($prixArt)
    {
        $this->prixArt = $prixArt;

        return $this;
    }

    /**
     * Get prixArt
     *
     * @return float
     */
    public function getPrixArt()
    {
        return $this->prixArt;
    }

    /**
     * Set stockArt
     *
     * @param integer $stockArt
     *
     * @return Article
     */
    public function setStockArt($stockArt)
    {
        $this->stockArt = $stockArt;

        return $this;
    }

    /**
     * Get stockArt
     *
     * @return int
     */
    public function getStockArt()
    {
        return $this->stockArt;
    }

    /**
     * Set media
     *
     * @param \Boutique\BoutiqueBundle\Entity\Media $media
     *
     * @return Article
     */
    public function setMedia(\Boutique\BoutiqueBundle\Entity\Media $media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \Boutique\BoutiqueBundle\Entity\Media
     */
    public function getMedia()
    {
        return $this->media;
    }

    /*/**
     * Set categorie
     *
     * @param \Boutique\BoutiqueBundle\Entity\Categorie $categorie
     *
     * @return Article
     */
    /*public function setCategorie(\Boutique\BoutiqueBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Boutique\BoutiqueBundle\Entity\Categorie
     */
    /*public function getCategorie()
    {
        return $this->categorie;
    }*/
}
