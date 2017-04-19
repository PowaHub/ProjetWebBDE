<?php

namespace Boutique\BoutiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity(repositoryClass="Boutique\BoutiqueBundle\Repository\FactureRepository")
 */
class Facture
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
     * @ORM\Column(name="total_facture", type="float")
     */
    private $totalFacture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_facture", type="date")
     */
    private $dateFacture;


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
     * Set totalFacture
     *
     * @param float $totalFacture
     *
     * @return Facture
     */
    public function setTotalFacture($totalFacture)
    {
        $this->totalFacture = $totalFacture;

        return $this;
    }

    /**
     * Get totalFacture
     *
     * @return float
     */
    public function getTotalFacture()
    {
        return $this->totalFacture;
    }

    /**
     * Set dateFacture
     *
     * @param \DateTime $dateFacture
     *
     * @return Facture
     */
    public function setDateFacture($dateFacture)
    {
        $this->dateFacture = $dateFacture;

        return $this;
    }

    /**
     * Get dateFacture
     *
     * @return \DateTime
     */
    public function getDateFacture()
    {
        return $this->dateFacture;
    }
}
