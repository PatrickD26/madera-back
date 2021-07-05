<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
#[ApiResource]
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $rangeId;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private ?string $label;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRangeId(): ?int
    {
        return $this->rangeId;
    }

    public function setRangeId(int $rangeId): self
    {
        $this->rangeId = $rangeId;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }
}
