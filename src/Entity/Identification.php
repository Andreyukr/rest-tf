<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IdentificationRepository")
 */
class Identification
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
     * @ORM\Column(type="string", length=100)
     */
    private $passportNo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $passportIssueDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $passportIssuePlace;

    /**
     * @ORM\Column(type="string")
     */
    private $idCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nalogRegisterDate;

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

    public function getPassportNo(): ?string
    {
        return $this->passportNo;
    }

    public function setPassportNo(string $passportNo): self
    {
        $this->passportNo = $passportNo;

        return $this;
    }

    public function getPassportIssueDate(): ?string
    {
        return $this->passportIssueDate;
    }

    public function setPassportIssueDate(string $passportIssueDate): self
    {
        $this->passportIssueDate = $passportIssueDate;

        return $this;
    }

    public function getPassportIssuePlace(): ?string
    {
        return $this->passportIssuePlace;
    }

    public function setPassportIssuePlace(string $passportIssuePlace): self
    {
        $this->passportIssuePlace = $passportIssuePlace;

        return $this;
    }

    public function getIdCode(): ?string
    {
        return $this->idCode;
    }

    public function setIdCode(string $idCode): self
    {
        $this->idCode = $idCode;

        return $this;
    }

    public function getNalogRegisterDate(): ?string
    {
        return $this->nalogRegisterDate;
    }

    public function setNalogRegisterDate(string $nalogRegisterDate): self
    {
        $this->nalogRegisterDate = $nalogRegisterDate;

        return $this;
    }
}
