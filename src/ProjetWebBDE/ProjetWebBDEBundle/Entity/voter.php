<?php

namespace ProjetWebBDE\ProjetWebBDEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * voter
 *
 * @ORM\Table(name="voter")
 * @ORM\Entity(repositoryClass="ProjetWebBDE\ProjetWebBDEBundle\Repository\voterRepository")
 */
class voter
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

