<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RangeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RangeRepository::class)
 */
#[ApiResource]
class Range
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
    private ?int $externalFinishId;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $isolantTypeId;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $frameQualityId;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $coatTypeId;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private ?string $label;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExternalFinishId(): ?int
    {
        return $this->externalFinishId;
    }

    public function setExternalFinishId(int $externalFinishId): self
    {
        $this->externalFinishId = $externalFinishId;

        return $this;
    }

    public function getIsolantTypeId(): ?int
    {
        return $this->isolantTypeId;
    }

    public function setIsolantTypeId(int $isolantTypeId): self
    {
        $this->isolantTypeId = $isolantTypeId;

        return $this;
    }

    public function getFrameQualityId(): ?int
    {
        return $this->frameQualityId;
    }

    public function setFrameQualityId(int $frameQualityId): self
    {
        $this->frameQualityId = $frameQualityId;

        return $this;
    }

    public function getCoatTypeId(): ?int
    {
        return $this->coatTypeId;
    }

    public function setCoatTypeId(int $coatTypeId): self
    {
        $this->coatTypeId = $coatTypeId;

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
