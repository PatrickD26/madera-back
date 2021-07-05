<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\QuoteRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuoteRepository::class)
 */
#[ApiResource]
class Quote
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
    private ?int $stateId;

    /**
     * @ORM\Column(type="datetime")
     */
    private ?DateTimeInterface $creationDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private ?DateTimeInterface $lastModificationDate;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $lastModifiedBy;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $totalWithTax;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $totalWithoutTax;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $discount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStateId(): ?int
    {
        return $this->stateId;
    }

    public function setStateId(int $stateId): self
    {
        $this->stateId = $stateId;

        return $this;
    }

    public function getCreationDate(): ?DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(DateTimeInterface $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getLastModificationDate(): ?DateTimeInterface
    {
        return $this->lastModificationDate;
    }

    public function setLastModificationDate(DateTimeInterface $lastModificationDate): self
    {
        $this->lastModificationDate = $lastModificationDate;

        return $this;
    }

    public function getLastModifiedBy(): ?int
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(int $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    public function getTotalWithTax(): ?int
    {
        return $this->totalWithTax;
    }

    public function setTotalWithTax(int $totalWithTax): self
    {
        $this->totalWithTax = $totalWithTax;

        return $this;
    }

    public function getTotalWithoutTax(): ?int
    {
        return $this->totalWithoutTax;
    }

    public function setTotalWithoutTax(int $totalWithoutTax): self
    {
        $this->totalWithoutTax = $totalWithoutTax;

        return $this;
    }

    public function getDiscount(): ?int
    {
        return $this->discount;
    }

    public function setDiscount(?int $discount): self
    {
        $this->discount = $discount;

        return $this;
    }
}
