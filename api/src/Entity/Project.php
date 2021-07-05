<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProjectRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
#[ApiResource]
class Project
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
    private ?int $quoteId;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $salesmanId;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $clientId;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private ?string $name;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private ?string $reference;

    /**
     * @ORM\Column(type="datetime")
     */
    private ?DateTimeInterface $creationDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuoteId(): ?int
    {
        return $this->quoteId;
    }

    public function setQuoteId(int $quoteId): self
    {
        $this->quoteId = $quoteId;

        return $this;
    }

    public function getSalesmanId(): ?int
    {
        return $this->salesmanId;
    }

    public function setSalesmanId(int $salesmanId): self
    {
        $this->salesmanId = $salesmanId;

        return $this;
    }

    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    public function setClientId(int $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

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
}
