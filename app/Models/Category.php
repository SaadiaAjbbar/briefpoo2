<?php

namespace App\Models;

class Category
{
    private int $id;
    private string $titre;
    private int $idAdmin;

    public function getId(): int
    {
        return $this->id;
    }

    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setIdAdmin(int $idAdmin): void
    {
        $this->idAdmin = $idAdmin;
    }

    public function getIdAdmin(): int
    {
        return $this->idAdmin;
    }
}
