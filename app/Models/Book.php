<?php

namespace App\Models;

class Book
{
    private static $books = [
        1 => ['id' => 1, 'title' => 'Book 1', 'description' => 'First book description'],
        2 => ['id' => 2, 'title' => 'Book 2', 'description' => 'Second book description'],
        3 => ['id' => 3, 'title' => 'Book 3', 'description' => 'Third book description'],
    ];

    public static function all(): array
    {
        return array_values(self::$books);
    }

    public static function find($id)
    {
        return self::$books[$id] ?? null;
    }
}
