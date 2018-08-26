<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CustomerSelectionRepository")
 */
class CustomerSelection
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $productId;

    /**
     * @ORM\Column(type="integer")
     */
    private $personalId;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $confirmed;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $printFormStatus;

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

    public function getPersonalId(): ?int
    {
        return $this->personalId;
    }

    public function setPersonalId(int $personalId): self
    {
        $this->personalId = $personalId;

        return $this;
    }

    public function getConfirmed(): ?bool
    {
        return $this->confirmed;
    }

    public function setConfirmed(?bool $confirmed): self
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    public function getPrintFormStatus(): ?bool
    {
        return $this->printFormStatus;
    }

    public function setPrintFormStatus(?bool $printFormStatus): self
    {
        $this->printFormStatus = $printFormStatus;

        return $this;
    }
}
