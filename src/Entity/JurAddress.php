<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JurAddressRepository")
 */
class JurAddress
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
    private $personalId;

    /**
     * @ORM\Column(type="integer")
     */
    private $postCode;

    /**
     * @ORM\Column(type="integer")
     */
    private $regionalCodeId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $district;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $street;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $houseNo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $flat;

    /**
     * @ORM\Column(type="boolean")
     */
    private $jurAddressIsAddress;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPostCode(): ?int
    {
        return $this->postCode;
    }

    public function setPostCode(int $postCode): self
    {
        $this->postCode = $postCode;

        return $this;
    }

    public function getRegionalCodeId(): ?int
    {
        return $this->regionalCodeId;
    }

    public function setRegionalCodeId(int $regionalCodeId): self
    {
        $this->regionalCodeId = $regionalCodeId;

        return $this;
    }

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function setDistrict(string $district): self
    {
        $this->district = $district;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getHouseNo(): ?string
    {
        return $this->houseNo;
    }

    public function setHouseNo(string $houseNo): self
    {
        $this->houseNo = $houseNo;

        return $this;
    }

    public function getFlat(): ?string
    {
        return $this->flat;
    }

    public function setFlat(string $flat): self
    {
        $this->flat = $flat;

        return $this;
    }

    public function getJurAddressIsAddress(): ?bool
    {
        return $this->jurAddressIsAddress;
    }

    public function setJurAddressIsAddress(bool $jurAddressIsAddress): self
    {
        $this->jurAddressIsAddress = $jurAddressIsAddress;

        return $this;
    }
}
