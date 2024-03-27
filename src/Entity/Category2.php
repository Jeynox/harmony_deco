<?php

namespace App\Entity;

use App\Repository\Category2Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Category2Repository::class)]
class Category2
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'category2', targetEntity: SousCategory2::class)]
    private Collection $sousCategory2s;

    public function __construct()
    {
        $this->sousCategory2s = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, SousCategory2>
     */
    public function getSousCategory2s(): Collection
    {
        return $this->sousCategory2s;
    }

    public function addSousCategory2(SousCategory2 $sousCategory2): static
    {
        if (!$this->sousCategory2s->contains($sousCategory2)) {
            $this->sousCategory2s->add($sousCategory2);
            $sousCategory2->setCategory2($this);
        }

        return $this;
    }

    public function removeSousCategory2(SousCategory2 $sousCategory2): static
    {
        if ($this->sousCategory2s->removeElement($sousCategory2)) {
            // set the owning side to null (unless already changed)
            if ($sousCategory2->getCategory2() === $this) {
                $sousCategory2->setCategory2(null);
            }
        }

        return $this;
    }
}
