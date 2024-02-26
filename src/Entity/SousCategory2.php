<?php

namespace App\Entity;

use App\Repository\SousCategory2Repository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SousCategory2Repository::class)]
class SousCategory2
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'sousCategory2s')]
    private ?Category2 $category2 = null;

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

    public function getCategory2(): ?Category2
    {
        return $this->category2;
    }

    public function setCategory2(?Category2 $category2): static
    {
        $this->category2 = $category2;

        return $this;
    }
}
