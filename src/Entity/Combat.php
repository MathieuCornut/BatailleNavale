<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CombatRepository")
 */
class Combat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Timestamp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $joueur1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $joueur2;

    /**
     * @ORM\Column(type="integer")
     */
    private $countBateauJ1;

    /**
     * @ORM\Column(type="integer")
     */
    private $countBateauJ2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vainqueur;

    /**
     * @ORM\Column(type="text")
     */
    private $logs;

    /**
     * @ORM\Column(type="integer")
     */
    private $Status;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $turn;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTimestamp(): ?\DateTimeInterface
    {
        return $this->Timestamp;
    }

    public function setTimestamp(\DateTimeInterface $Timestamp): self
    {
        $this->Timestamp = $Timestamp;

        return $this;
    }

    public function getJoueur1(): ?string
    {
        return $this->joueur1;
    }

    public function setJoueur1(string $joueur1): self
    {
        $this->joueur1 = $joueur1;

        return $this;
    }

    public function getJoueur2(): ?string
    {
        return $this->joueur2;
    }

    public function setJoueur2(?string $joueur2): self
    {
        $this->joueur2 = $joueur2;

        return $this;
    }

    public function getCountBateauJ1(): ?int
    {
        return $this->countBateauJ1;
    }

    public function setCountBateauJ1(int $countBateauJ1): self
    {
        $this->countBateauJ1 = $countBateauJ1;

        return $this;
    }

    public function getCountBateauJ2(): ?int
    {
        return $this->countBateauJ2;
    }

    public function setCountBateauJ2(int $countBateauJ2): self
    {
        $this->countBateauJ2 = $countBateauJ2;

        return $this;
    }

    public function getVainqueur(): ?string
    {
        return $this->vainqueur;
    }

    public function setVainqueur(?string $vainqueur): self
    {
        $this->vainqueur = $vainqueur;

        return $this;
    }

    public function getLogs(): ?string
    {
        return $this->logs;
    }

    public function setLogs(string $logs): self
    {
        $this->logs = $logs;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->Status;
    }

    public function setStatus(int $Status): self
    {
        $this->Status = $Status;

        return $this;
    }

    public function getTurn(): ?int
    {
        return $this->turn;
    }

    public function setTurn(?int $turn): self
    {
        $this->turn = $turn;

        return $this;
    }
}
