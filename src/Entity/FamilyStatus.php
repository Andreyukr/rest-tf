<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FamilyStatusRepository")
 */
class FamilyStatus
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
    private $familyStatusId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $spouseFirstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $spouseSecondName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $spouseLastName;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $spouseBirthDay;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $spouseDateOfMarriage;

    /**
     * @ORM\Column(type="integer")
     */
    private $dependantNumber;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $childrenUnder18NumberId;

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

    public function getFamilyStatusId(): ?int
    {
        return $this->familyStatusId;
    }

    public function setFamilyStatusId(int $familyStatusId): self
    {
        $this->familyStatusId = $familyStatusId;

        return $this;
    }

    public function getSpouseFirstName(): ?string
    {
        return $this->spouseFirstName;
    }

    public function setSpouseFirstName(string $spouseFirstName): self
    {
        $this->spouseFirstName = $spouseFirstName;

        return $this;
    }

    public function getSpouseSecondName(): ?string
    {
        return $this->spouseSecondName;
    }

    public function setSpouseSecondName(string $spouseSecondName): self
    {
        $this->spouseSecondName = $spouseSecondName;

        return $this;
    }

    public function getSpouseLastName(): ?string
    {
        return $this->spouseLastName;
    }

    public function setSpouseLastName(string $spouseLastName): self
    {
        $this->spouseLastName = $spouseLastName;

        return $this;
    }

    public function getSpouseBirthDay(): ?\DateTimeInterface
    {
        return $this->spouseBirthDay;
    }

    public function setSpouseBirthDay(?\DateTimeInterface $spouseBirthDay): self
    {
        $this->spouseBirthDay = $spouseBirthDay;

        return $this;
    }

    public function getSpouseDateOfMarriage(): ?\DateTimeInterface
    {
        return $this->spouseDateOfMarriage;
    }

    public function setSpouseDateOfMarriage(?\DateTimeInterface $spouseDateOfMarriage): self
    {
        $this->spouseDateOfMarriage = $spouseDateOfMarriage;

        return $this;
    }

    public function getDependantNumber(): ?int
    {
        return $this->dependantNumber;
    }

    public function setDependantNumber(int $dependantNumber): self
    {
        $this->dependantNumber = $dependantNumber;

        return $this;
    }

    public function getChildrenUnder18NumberId(): ?int
    {
        return $this->childrenUnder18NumberId;
    }

    public function setChildrenUnder18NumberId(?int $childrenUnder18NumberId): self
    {
        $this->childrenUnder18NumberId = $childrenUnder18NumberId;

        return $this;
    }
}
