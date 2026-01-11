<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Controllers\ArticleController;

class HomeController extends Controller
{
    public function index()
    {
        $ArticleController = new ArticleController();
        $articles = $ArticleController->show();
        $this->view('home', [
            'articles' => $articles
        ]);
    }
}
