<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PaymentMethodRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PaymentMethodRepository::class)
 */
#[ApiResource]
class PaymentMethod
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private ?string $label;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $percentageSum;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPercentageSum(): ?int
    {
        return $this->percentageSum;
    }

    public function setPercentageSum(int $percentageSum): self
    {
        $this->percentageSum = $percentageSum;

        return $this;
    }
}
