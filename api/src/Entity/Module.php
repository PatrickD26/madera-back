<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ModuleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ModuleRepository::class)
 */
#[ApiResource]
class Module
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
    private ?int $productId;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $rangeId;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private ?string $label;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $measureUnit;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private ?string $caracteristics;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(int $productId): self
    {
        $this->productId = $productId;

        return $this;
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

    public function getMeasureUnit(): ?int
    {
        return $this->measureUnit;
    }

    public function setMeasureUnit(int $measureUnit): self
    {
        $this->measureUnit = $measureUnit;

        return $this;
    }

    public function getCaracteristics(): ?string
    {
        return $this->caracteristics;
    }

    public function setCaracteristics(?string $caracteristics): self
    {
        $this->caracteristics = $caracteristics;

        return $this;
    }
}
