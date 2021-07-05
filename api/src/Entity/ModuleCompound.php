<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ModuleCompoundRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ModuleCompoundRepository::class)
 */
#[ApiResource]
class ModuleCompound
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
    private ?int $familyId;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private ?string $nature;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private ?string $characteristics;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private ?string $unitUsage;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $unitPrice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFamilyId(): ?int
    {
        return $this->familyId;
    }

    public function setFamilyId(int $familyId): self
    {
        $this->familyId = $familyId;

        return $this;
    }

    public function getNature(): ?string
    {
        return $this->nature;
    }

    public function setNature(string $nature): self
    {
        $this->nature = $nature;

        return $this;
    }

    public function getCharacteristics(): ?string
    {
        return $this->characteristics;
    }

    public function setCharacteristics(string $characteristics): self
    {
        $this->characteristics = $characteristics;

        return $this;
    }

    public function getUnitUsage(): ?string
    {
        return $this->unitUsage;
    }

    public function setUnitUsage(string $unitUsage): self
    {
        $this->unitUsage = $unitUsage;

        return $this;
    }

    public function getUnitPrice(): ?int
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(int $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }
}
