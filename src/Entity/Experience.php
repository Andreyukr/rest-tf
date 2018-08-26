<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExperienceRepository")
 */
class Experience
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
    private $workPlaceName;

    /**
     * @ORM\Column(type="string")
     */
    private $workPlaceTaxNumber;

    /**
     * @ORM\Column(type="integer")
     */
    private $workPlaceAreaId;

    /**
     * @ORM\Column(type="integer")
     */
    private $workPositionTypeId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $workPosition;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $workAddr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $workPhone;

    /**
     * @ORM\Column(type="integer")
     */
    private $workScheduleId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $workStartDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $workExperience;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Pyfxtybt;

    /**
     * @ORM\Column(type="integer")
     */
    private $workGeneralExperience;

    /**
     * @ORM\Column(type="integer")
     */
    private $educationLevelId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prevWorkPlaceName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prevWorkPosition;

    /**
     * @ORM\Column(type="integer")
     */
    private $personalId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWorkPlaceName(): ?string
    {
        return $this->workPlaceName;
    }

    public function setWorkPlaceName(string $workPlaceName): self
    {
        $this->workPlaceName = $workPlaceName;

        return $this;
    }

    public function getWorkPlaceTaxNumber(): ?string
    {
        return $this->workPlaceTaxNumber;
    }

    public function setWorkPlaceTaxNumber(string $workPlaceTaxNumber): self
    {
        $this->workPlaceTaxNumber = $workPlaceTaxNumber;

        return $this;
    }

    public function getWorkPlaceAreaId(): ?int
    {
        return $this->workPlaceAreaId;
    }

    public function setWorkPlaceAreaId(int $workPlaceAreaId): self
    {
        $this->workPlaceAreaId = $workPlaceAreaId;

        return $this;
    }

    public function getWorkPositionTypeId(): ?int
    {
        return $this->workPositionTypeId;
    }

    public function setWorkPositionTypeId(int $workPositionTypeId): self
    {
        $this->workPositionTypeId = $workPositionTypeId;

        return $this;
    }

    public function getWorkPosition(): ?string
    {
        return $this->workPosition;
    }

    public function setWorkPosition(string $workPosition): self
    {
        $this->workPosition = $workPosition;

        return $this;
    }

    public function getWorkAddr(): ?string
    {
        return $this->workAddr;
    }

    public function setWorkAddr(string $workAddr): self
    {
        $this->workAddr = $workAddr;

        return $this;
    }

    public function getWorkPhone(): ?string
    {
        return $this->workPhone;
    }

    public function setWorkPhone(string $workPhone): self
    {
        $this->workPhone = $workPhone;

        return $this;
    }

    public function getWorkScheduleId(): ?int
    {
        return $this->workScheduleId;
    }

    public function setWorkScheduleId(int $workScheduleId): self
    {
        $this->workScheduleId = $workScheduleId;

        return $this;
    }

    public function getWorkStartDate(): ?string
    {
        return $this->workStartDate;
    }

    public function setWorkStartDate(string $workStartDate): self
    {
        $this->workStartDate = $workStartDate;

        return $this;
    }

    public function getWorkExperience(): ?string
    {
        return $this->workExperience;
    }

    public function setWorkExperience(string $workExperience): self
    {
        $this->workExperience = $workExperience;

        return $this;
    }

    public function getPyfxtybt(): ?string
    {
        return $this->Pyfxtybt;
    }

    public function setPyfxtybt(string $Pyfxtybt): self
    {
        $this->Pyfxtybt = $Pyfxtybt;

        return $this;
    }

    public function getWorkGeneralExperience(): ?int
    {
        return $this->workGeneralExperience;
    }

    public function setWorkGeneralExperience(int $workGeneralExperience): self
    {
        $this->workGeneralExperience = $workGeneralExperience;

        return $this;
    }

    public function getEducationLevelId(): ?int
    {
        return $this->educationLevelId;
    }

    public function setEducationLevelId(int $educationLevelId): self
    {
        $this->educationLevelId = $educationLevelId;

        return $this;
    }

    public function getPrevWorkPlaceName(): ?string
    {
        return $this->prevWorkPlaceName;
    }

    public function setPrevWorkPlaceName(string $prevWorkPlaceName): self
    {
        $this->prevWorkPlaceName = $prevWorkPlaceName;

        return $this;
    }

    public function getPrevWorkPosition(): ?string
    {
        return $this->prevWorkPosition;
    }

    public function setPrevWorkPosition(string $prevWorkPosition): self
    {
        $this->prevWorkPosition = $prevWorkPosition;

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
