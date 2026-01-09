<?php

namespace App\Models;

class Author extends User
{
    public function __construct()
    {
        $this->role = 'author';
    }
}
