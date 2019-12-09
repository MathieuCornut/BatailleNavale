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
    private $Statut;

    /**
     * @ORM\Column(type="array")
     */
    private $hpJ1 = [];

    /**
     * @ORM\Column(type="array")
     */
    private $hpJ2 = [];

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

    public function getStatut(): ?int
    {
        return $this->Statut;
    }

    public function setStatut(int $Statut): self
    {
        $this->Statut = $Statut;

        return $this;
    }

    public function getHpJ1(): ?array
    {
        return $this->hpJ1;
    }

    public function setHpJ1(array $hpJ1): self
    {
        $this->hpJ1 = $hpJ1;

        return $this;
    }

    public function getHpJ2(): ?array
    {
        return $this->hpJ2;
    }

    public function setHpJ2(array $hpJ2): self
    {
        $this->hpJ2 = $hpJ2;

        return $this;
    }
}
