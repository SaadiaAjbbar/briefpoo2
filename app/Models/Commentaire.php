<?php

namespace App\Models;

class Commentaire
{
    private int $id;
    private string $contenu;
    private int $idReader;
    private int $idArticle;
    private string $dateCreation;

    public function getId(): int
    {
        return $this->id;
    }

    public function setContenu(string $contenu): void
    {
        $this->contenu = $contenu;
    }

    public function getContenu(): string
    {
        return $this->contenu;
    }

    public function setIdReader(int $idReader): void
    {
        $this->idReader = $idReader;
    }

    public function getIdReader(): int
    {
        return $this->idReader;
    }

    public function setIdArticle(int $idArticle): void
    {
        $this->idArticle = $idArticle;
    }

    public function getIdArticle(): int
    {
        return $this->idArticle;
    }

    public function getDateCreation(): string
    {
        return $this->dateCreation;
    }
}
