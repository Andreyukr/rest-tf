<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FinancialPropertyRepository")
 */
class FinancialProperty
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
    private $typeId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $typeOfOwnershipId;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isCollateral;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="integer")
     */
    private $personalId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeId(): ?int
    {
        return $this->typeId;
    }

    public function setTypeId(int $typeId): self
    {
        $this->typeId = $typeId;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTypeOfOwnershipId(): ?int
    {
        return $this->typeOfOwnershipId;
    }

    public function setTypeOfOwnershipId(int $typeOfOwnershipId): self
    {
        $this->typeOfOwnershipId = $typeOfOwnershipId;

        return $this;
    }

    public function getIsCollateral(): ?bool
    {
        return $this->isCollateral;
    }

    public function setIsCollateral(bool $isCollateral): self
    {
        $this->isCollateral = $isCollateral;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

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
}
