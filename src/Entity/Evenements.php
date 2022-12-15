<?php

namespace App\Entity;

use App\Repository\EvenementsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvenementsRepository::class)]
class Evenements
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $periode = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $level_alert = null;

    #[ORM\Column(nullable: true)]
    private ?float $pic_de_crue = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $lieu = null;

    #[ORM\Column(nullable: true)]
    private ?float $coordonnee_x = null;

    #[ORM\Column(nullable: true)]
    private ?float $coordonnee_y = null;

    #[ORM\ManyToOne(inversedBy: 'evenements')]
    private ?Departements $dep = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function gettitle(): ?string
    {
        return $this->title;
    }

    public function settitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getimage(): ?string
    {
        return $this->image;
    }

    public function setimage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPeriode(): ?string
    {
        return $this->periode;
    }

    public function setPeriode(?string $periode): self
    {
        $this->periode = $periode;

        return $this;
    }

    public function getLevelAlert(): ?string
    {
        return $this->level_alert;
    }

    public function setLevelAlert(?string $level_alert): self
    {
        $this->level_alert = $level_alert;

        return $this;
    }

    public function getPicDeCrue(): ?float
    {
        return $this->pic_de_crue;
    }

    public function setPicDeCrue(?float $pic_de_crue): self
    {
        $this->pic_de_crue = $pic_de_crue;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getCoordonneeX(): ?float
    {
        return $this->coordonnee_x;
    }

    public function setCoordonneeX(?float $coordonnee_x): self
    {
        $this->coordonnee_x = $coordonnee_x;

        return $this;
    }

    public function getCoordonneeY(): ?float
    {
        return $this->coordonnee_y;
    }

    public function setCoordonneeY(?float $coordonnee_y): self
    {
        $this->coordonnee_y = $coordonnee_y;

        return $this;
    }

    public function getDep(): ?departements
    {
        return $this->dep;
    }

    public function setDep(?departements $dep): self
    {
        $this->dep = $dep;

        return $this;
    }
}