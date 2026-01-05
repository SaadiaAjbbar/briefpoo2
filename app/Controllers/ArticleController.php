<?php

namespace App\Controllers;

use App\Core\Controller;

class ArticleController extends Controller {

    public function show() {
        $this->view('article/liste');
    }
}


