<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="date")
     */
    private $registration_date;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $last_login;

    /**
     * @ORM\Column(type="integer")
     */
    private $count_combat;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $count_victory;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getRegistrationDate(): ?\DateTimeInterface
    {
        return $this->registration_date;
    }

    public function setRegistrationDate(\DateTimeInterface $registration_date): self
    {
        $this->registration_date = $registration_date;

        return $this;
    }

    public function getLastLogin(): ?\DateTimeInterface
    {
        return $this->last_login;
    }

    public function setLastLogin(?\DateTimeInterface $last_login): self
    {
        $this->last_login = $last_login;

        return $this;
    }

    public function getCountCombat(): ?int
    {
        return $this->count_combat;
    }

    public function setCountCombat(int $count_combat): self
    {
        $this->count_combat = $count_combat;

        return $this;
    }

    public function getCountVictory(): ?int
    {
        return $this->count_victory;
    }

    public function setCountVictory(?int $count_victory): self
    {
        $this->count_victory = $count_victory;

        return $this;
    }

    public function getRatio(int $CountCombat, int $CountVictory) {
        if($CountCombat == 0 OR $CountVictory == 0) {
            return '0';
        }
        else {
           $division = ($CountVictory/$CountCombat)*100;
            return round($division,1);
        }    
    }

    public function getPosition($user,$ranking) {
        return array_search($user->id, array_column($ranking,'id')) + 1;
    }

    public function getLastLoginStr($last) {
        $now = new \DateTime();

        $difference = date_diff($last,$now);

        if($difference->format('%y') >= 1) {
            $diff = $difference->format('%y')." ans";
        }
        else if($difference->format('%i') < 1) {
            $diff = "peu";
        }
        else if($difference->format('%h') < 1) {
            $diff = $difference->format('%i')." minutes";
        }
        else if($difference->format('%d') < 1) {
            $diff = $difference->format('%h')." heures";
        }
        else if($difference->format('%m') < 1) {
            $diff = $difference->format('%d')." jours";
        }
        else if($difference->format('%y') < 1) {
            $diff = $difference->format('%m')." mois";
        }
        return $diff;
    }
}
