<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AngleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AngleRepository::class)
 */
#[ApiResource]
class Angle
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
    private ?int $moduleId;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private ?string $section;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $length;

    /**
     * @ORM\Column(type="boolean")
     */
    private ?bool $isEntrant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModuleId(): ?int
    {
        return $this->moduleId;
    }

    public function setModuleId(int $moduleId): self
    {
        $this->moduleId = $moduleId;

        return $this;
    }

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(string $section): self
    {
        $this->section = $section;

        return $this;
    }

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function setLength(int $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getIsEntrant(): ?bool
    {
        return $this->isEntrant;
    }

    public function setIsEntrant(bool $isEntrant): self
    {
        $this->isEntrant = $isEntrant;

        return $this;
    }
}
