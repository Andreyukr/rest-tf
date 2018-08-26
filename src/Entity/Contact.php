<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 */
class Contact
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
     * @ORM\Column(type="string", length=255)
     */
    private $clientEmail;

    /**
     * @ORM\Column(type="array")
     */
    private $contactPersonsContacts;

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

    public function getClientEmail(): ?string
    {
        return $this->clientEmail;
    }

    public function setClientEmail(string $clientEmail): self
    {
        $this->clientEmail = $clientEmail;

        return $this;
    }

    public function getContactPersonsContacts(): ?array
    {
        return $this->contactPersonsContacts;
    }

    public function setContactPersonsContacts(array $contactPersonsContacts): self
    {
        $this->contactPersonsContacts = $contactPersonsContacts;

        return $this;
    }
}
