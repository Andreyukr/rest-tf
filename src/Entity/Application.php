<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ApplicationRepository")
 */
class Application
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
    private $managerMarkId;

    /**
     * @ORM\Column(type="float")
     */
    private $downPaymentAmount;

    /**
     * @ORM\Column(type="float")
     */
    private $requestedLoanAmount;

    /**
     * @ORM\Column(type="array")
     */
    private $purchaseLoanRequest;

    /**
     * @ORM\Column(type="integer")
     */
    private $requestedLoanTerm;

    /**
     * @ORM\Column(type="integer")
     */
    private $personalId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getManagerMarkId(): ?int
    {
        return $this->managerMarkId;
    }

    public function setManagerMarkId(int $managerMarkId): self
    {
        $this->managerMarkId = $managerMarkId;

        return $this;
    }

    public function getDownPaymentAmount(): ?float
    {
        return $this->downPaymentAmount;
    }

    public function setDownPaymentAmount(float $downPaymentAmount): self
    {
        $this->downPaymentAmount = $downPaymentAmount;

        return $this;
    }

    public function getRequestedLoanAmount(): ?float
    {
        return $this->requestedLoanAmount;
    }

    public function setRequestedLoanAmount(float $requestedLoanAmount): self
    {
        $this->requestedLoanAmount = $requestedLoanAmount;

        return $this;
    }

    public function getPurchaseLoanRequest(): ?array
    {
        return $this->purchaseLoanRequest;
    }

    public function setPurchaseLoanRequest(array $purchaseLoanRequest): self
    {
        $this->purchaseLoanRequest = $purchaseLoanRequest;

        return $this;
    }

    public function getRequestedLoanTerm(): ?int
    {
        return $this->requestedLoanTerm;
    }

    public function setRequestedLoanTerm(int $requestedLoanTerm): self
    {
        $this->requestedLoanTerm = $requestedLoanTerm;

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
