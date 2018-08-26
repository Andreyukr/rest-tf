<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FinancialExpencesRepository")
 */
class FinancialExpences
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $monthlyAmount;

    /**
     * @ORM\Column(type="integer")
     */
    private $monthlyTypeId;

    /**
     * @ORM\Column(type="integer")
     */
    private $personalId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMonthlyAmount(): ?string
    {
        return $this->monthlyAmount;
    }

    public function setMonthlyAmount(string $monthlyAmount): self
    {
        $this->monthlyAmount = $monthlyAmount;

        return $this;
    }

    public function getMonthlyTypeId(): ?int
    {
        return $this->monthlyTypeId;
    }

    public function setMonthlyTypeId(int $monthlyTypeId): self
    {
        $this->monthlyTypeId = $monthlyTypeId;

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
