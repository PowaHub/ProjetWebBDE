<?php

namespace ProjetWebBDE\ProjetWebBDEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * participer
 *
 * @ORM\Table(name="participer")
 * @ORM\Entity(repositoryClass="ProjetWebBDE\ProjetWebBDEBundle\Repository\participerRepository")
 */
class participer
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
     * @ORM\Column(name="remarque_participation", type="string", length=255)
     */
    private $remarqueParticipation;


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
     * Set remarqueParticipation
     *
     * @param string $remarqueParticipation
     *
     * @return participer
     */
    public function setRemarqueParticipation($remarqueParticipation)
    {
        $this->remarqueParticipation = $remarqueParticipation;

        return $this;
    }

    /**
     * Get remarqueParticipation
     *
     * @return string
     */
    public function getRemarqueParticipation()
    {
        return $this->remarqueParticipation;
    }
}

