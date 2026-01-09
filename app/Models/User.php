<?php

namespace App\Models;

abstract class User
{
    protected int $id;
    protected string $nom;
    protected string $email;
    protected string $motPasse;
    protected string $role;

    public function getId(): int
    {
        return $this->id;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setMotPasse(string $motPasse): void
    {
        $this->motPasse = $motPasse;
    }

    public function getMotPasse(): string
    {
        return $this->motPasse;
    }

    public function getRole(): string
    {
        return $this->role;
    }
}
