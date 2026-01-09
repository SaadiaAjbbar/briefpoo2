<?php

namespace App\Models;

class Reader extends User
{
    public function __construct()
    {
        $this->role = 'reader';
    }
}
