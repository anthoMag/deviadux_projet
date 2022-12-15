<?php

namespace App\Entity;

use App\Repository\DepartementsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DepartementsRepository::class)]
class Departements
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 3, nullable: true)]
    private ?string $code_dep = null;

    #[ORM\ManyToOne(inversedBy: 'departements')]
    private ?Regions $reg = null;

    #[ORM\OneToMany(mappedBy: 'dep', targetEntity: Evenements::class)]
    private Collection $evenements;

    public function __construct()
    {
        $this->evenements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCodeDep(): ?string
    {
        return $this->code_dep;
    }

    public function setCodeDep(?string $code_dep): self
    {
        $this->code_dep = $code_dep;

        return $this;
    }

    public function getReg(): ?regions
    {
        return $this->reg;
    }

    public function setReg(?regions $reg): self
    {
        $this->reg = $reg;

        return $this;
    }

    /**
     * @return Collection<int, Evenements>
     */
    public function getEvenements(): Collection
    {
        return $this->evenements;
    }

    public function addEvenement(Evenements $evenement): self
    {
        if (!$this->evenements->contains($evenement)) {
            $this->evenements->add($evenement);
            $evenement->setDep($this);
        }

        return $this;
    }

    public function removeEvenement(Evenements $evenement): self
    {
        if ($this->evenements->removeElement($evenement)) {
            // set the owning side to null (unless already changed)
            if ($evenement->getDep() === $this) {
                $evenement->setDep(null);
            }
        }

        return $this;
    }

}
