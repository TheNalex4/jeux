<?php

namespace App\Entity;

use App\Repository\StatsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StatsRepository::class)
 */
class Stats
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @ORM\Column(type="integer")
     */
    private $victoires;

    /**
     * @ORM\Column(type="integer")
     */
    private $defaites;

    /**
     * @ORM\Column(type="integer")
     */
    private $parties;

    /**
     * @ORM\Column(type="integer")
     */
    private $partie_en_cour;

    /**
     * @ORM\Column(type="integer")
     */
    private $partie_termine;

    public function getId(): ?int
    {
        return $this->id;
    }





    public function getVictoires(): ?int
    {
        return $this->victoires;
    }

    public function setVictoires(int $victoires): self
    {
        $this->victoires = $victoires;

        return $this;
    }

    public function getDefaites(): ?int
    {
        return $this->defaites;
    }

    public function setDefaites(int $defaites): self
    {
        $this->defaites = $defaites;

        return $this;
    }

    public function getParties(): ?int
    {
        return $this->parties;
    }

    public function setParties(int $parties): self
    {
        $this->parties = $parties;

        return $this;
    }

    public function getPartieEnCour(): ?int
    {
        return $this->partie_en_cour;
    }

    public function setPartieEnCour(int $partie_en_cour): self
    {
        $this->partie_en_cour = $partie_en_cour;

        return $this;
    }

    public function getPartieTermine(): ?int
    {
        return $this->partie_termine;
    }

    public function setPartieTermine(int $partie_termine): self
    {
        $this->partie_termine = $partie_termine;

        return $this;
    }


}
