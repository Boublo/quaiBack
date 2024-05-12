<?php

namespace App\Entity;

use App\Repository\RestaurantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RestaurantRepository::class)]
class Restaurant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $QuaiAntique = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuaiAntique(): ?string
    {
        return $this->QuaiAntique;
    }

    public function setQuaiAntique(string $QuaiAntique): static
    {
        $this->QuaiAntique = $QuaiAntique;

        return $this;
    }
}
