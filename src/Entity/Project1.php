<?php

namespace App\Entity;

use App\Repository\Project1Repository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Project1Repository::class)]
class Project1
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $project2 = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: 'float')]
    private ?float $price = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProject2(): ?string
    {
        return $this->project2;
    }

    public function setProject2(string $project2): static
    {
        $this->project2 = $project2;

        return $this;
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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }
}
