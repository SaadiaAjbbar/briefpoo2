<?php

namespace App\Models;

class Like
{
    private int $id;
    private int $idReader;
    private int $idArticle;

    public function getId(): int
    {
        return $this->id;
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
}
