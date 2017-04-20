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
     * @ORM\Column(name="nom_Article", type="text")
     */
    private $nomArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="description_Article", type="string", length=255)
     */
    private $descriptionArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie_Article", type="string", length=255)
     */
    private $categorieArticle;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_Article", type="float")
     */
    private $prixArticle;

    /**
     * @var int
     *
     * @ORM\Column(name="stock_Article", type="smallint")
     */
    private $stockArticle;

    /**
     * @ORM\OneToOne(targetEntity="Boutique\BoutiqueBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    public $media;





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
     * Set nomArticle
     *
     * @param string $nomArticle
     *
     * @return Article
     */
    public function setNomArticle($nomArticle)
    {
        $this->nomArticle = $nomArticle;

        return $this;
    }

    /**
     * Get nomArticle
     *
     * @return string
     */
    public function getNomArticle()
    {
        return $this->nomArticle;
    }

    /**
     * Set descriptionArticle
     *
     * @param string $descriptionArticle
     *
     * @return Article
     */
    public function setDescriptionArticle($descriptionArticle)
    {
        $this->descriptionArticle = $descriptionArticle;

        return $this;
    }

    /**
     * Get descriptionArticle
     *
     * @return string
     */
    public function getDescriptionArticle()
    {
        return $this->descriptionArticle;
    }

    /**
     * Set categorieArticle
     *
     * @param string $categorieArticle
     *
     * @return Article
     */
    public function setCategorieArticle($categorieArticle)
    {
        $this->categorieArticle = $categorieArticle;

        return $this;
    }

    /**
     * Get categorieArticle
     *
     * @return string
     */
    public function getCategorieArticle()
    {
        return $this->categorieArticle;
    }

    /**
     * Set prixArticle
     *
     * @param float $prixArticle
     *
     * @return Article
     */
    public function setPrixArticle($prixArticle)
    {
        $this->prixArticle = $prixArticle;

        return $this;
    }

    /**
     * Get prixArticle
     *
     * @return float
     */
    public function getPrixArticle()
    {
        return $this->prixArticle;
    }

    /**
     * Set stockArticle
     *
     * @param integer $stockArticle
     *
     * @return Article
     */
    public function setStockArticle($stockArticle)
    {
        $this->stockArticle = $stockArticle;

        return $this;
    }

    /**
     * Get stockArticle
     *
     * @return integer
     */
    public function getStockArticle()
    {
        return $this->stockArticle;
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
}
