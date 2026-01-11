<?php

namespace App\Models;

class ArticleCategory
{
    private int $id;
    private int $idArticle;
    private int $idCategorie;

    public function getId(): int
    {
        return $this->id;
    }

    public function setIdArticle(int $idArticle): void
    {
        $this->idArticle = $idArticle;
    }

    public function getIdArticle(): int
    {
        return $this->idArticle;
    }

    public function setIdCategorie(int $idCategorie): void
    {
        $this->idCategorie = $idCategorie;
    }

    public function getIdCategorie(): int
    {
        return $this->idCategorie;
    }
}
