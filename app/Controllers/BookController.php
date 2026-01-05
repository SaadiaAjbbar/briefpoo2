<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $this->view('books', compact('books'));
    }

    public function show($id = null)
    {
        $book = $id ? Book::find($id) : null;
        $this->view('book_show', ['book' => $book, 'title' => 'Book Details']);
    }
}
