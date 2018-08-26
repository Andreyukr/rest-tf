<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonalRepository")
 */
class Personal
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secondName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $alternateName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secretWord;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $birthDay;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $birthPlace;

    /**
     * @ORM\Column(type="integer")
     */
    private $citizenshipCountryId;

    /**
     * @ORM\Column(type="boolean")
     */
    private $hasGreenCard;

    /**
     * @ORM\Column(type="boolean")
     */
    private $nameWasChanged;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $previousFirstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $previousSecondName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $previousLastName;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $nameDateOfChange;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getSecondName(): ?string
    {
        return $this->secondName;
    }

    public function setSecondName(string $secondName): self
    {
        $this->secondName = $secondName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getAlternateName(): ?string
    {
        return $this->alternateName;
    }

    public function setAlternateName(string $alternateName): self
    {
        $this->alternateName = $alternateName;

        return $this;
    }

    public function getSecretWord(): ?string
    {
        return $this->secretWord;
    }

    public function setSecretWord(string $secretWord): self
    {
        $this->secretWord = $secretWord;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getBirthDay(): ?string
    {
        return $this->birthDay;
    }

    public function setBirthDay(string $birthDay): self
    {
        $this->birthDay = $birthDay;

        return $this;
    }

    public function getBirthPlace(): ?string
    {
        return $this->birthPlace;
    }

    public function setBirthPlace(string $birthPlace): self
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }

    public function getCitizenshipCountryId(): ?int
    {
        return $this->citizenshipCountryId;
    }

    public function setCitizenshipCountryId(int $citizenshipCountryId): self
    {
        $this->citizenshipCountryId = $citizenshipCountryId;

        return $this;
    }

    public function getHasGreenCard(): ?bool
    {
        return $this->hasGreenCard;
    }

    public function setHasGreenCard(bool $hasGreenCard): self
    {
        $this->hasGreenCard = $hasGreenCard;

        return $this;
    }

    public function getNameWasChanged(): ?bool
    {
        return $this->nameWasChanged;
    }

    public function setNameWasChanged(bool $nameWasChanged): self
    {
        $this->nameWasChanged = $nameWasChanged;

        return $this;
    }

    public function getPreviousFirstName(): ?string
    {
        return $this->previousFirstName;
    }

    public function setPreviousFirstName(string $previousFirstName): self
    {
        $this->previousFirstName = $previousFirstName;

        return $this;
    }

    public function getPreviousSecondName(): ?string
    {
        return $this->previousSecondName;
    }

    public function setPreviousSecondName(string $previousSecondName): self
    {
        $this->previousSecondName = $previousSecondName;

        return $this;
    }

    public function getPreviousLastName(): ?string
    {
        return $this->previousLastName;
    }

    public function setPreviousLastName(string $previousLastName): self
    {
        $this->previousLastName = $previousLastName;

        return $this;
    }

    public function getNameDateOfChange(): ?\DateTimeInterface
    {
        return $this->nameDateOfChange;
    }

    public function setNameDateOfChange(?\DateTimeInterface $nameDateOfChange): self
    {
        $this->nameDateOfChange = $nameDateOfChange;

        return $this;
    }
}
