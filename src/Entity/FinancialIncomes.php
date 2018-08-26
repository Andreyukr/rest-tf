<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FinancialIncomesRepository")
 */
class FinancialIncomes
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
    private $pesonalId;

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

    public function getPesonalId(): ?int
    {
        return $this->pesonalId;
    }

    public function setPesonalId(int $pesonalId): self
    {
        $this->pesonalId = $pesonalId;

        return $this;
    }
}
