<?php

namespace App\Entity;

use App\Repository\AssignRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssignRepository::class)]
class Assign
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date', nullable: true)]
    private $startDate;

    #[ORM\Column(type: 'date', nullable: true)]
    private $endDate;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'assigns')]
    private $user;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'approves')]
    private $approver;

    #[ORM\OneToOne(targetEntity: Equipment::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $equipment;

    #[ORM\ManyToOne(targetEntity: AssignStatus::class, inversedBy: 'assigns')]
    #[ORM\JoinColumn(nullable: false)]
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getApprover(): ?User
    {
        return $this->approver;
    }

    public function setApprover(?User $approver): self
    {
        $this->approver = $approver;

        return $this;
    }

    public function getEquipment(): ?Equipment
    {
        return $this->equipment;
    }

    public function setEquipment(Equipment $equipment): self
    {
        $this->equipment = $equipment;

        return $this;
    }

    public function getStatus(): ?AssignStatus
    {
        return $this->status;
    }

    public function setStatus(?AssignStatus $status): self
    {
        $this->status = $status;

        return $this;
    }
  
}