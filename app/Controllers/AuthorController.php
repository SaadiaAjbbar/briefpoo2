<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use PDO;

class AuthorController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'author') {
            header('Location: /login');
            exit;
        }

        $db = Database::getInstance();

        $stmt = $db->prepare("
            SELECT a.id, a.titre, a.content, a.date_creation, GROUP_CONCAT(c.titre SEPARATOR ', ') as categories
            FROM articles a
            LEFT JOIN article_categories ac ON a.id = ac.id_article
            LEFT JOIN categories c ON ac.id_categorie = c.id
            WHERE a.id_author = ?
            GROUP BY a.id
            ORDER BY a.date_creation DESC
        ");
        $stmt->execute([$_SESSION['user']['id']]);
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->view('author/home', ['articles' => $articles]);
    }

    public function createArticleForm()
    {
        $db = Database::getInstance();

        $stmt = $db->query("SELECT * FROM categories");
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->view('author/create_article', ['categories' => $categories]);
    }

    public function storeArticle()
    {
        $db = Database::getInstance();

        $titre = trim($_POST['titre']);
        $content = trim($_POST['content']);
        $id_author = $_SESSION['user']['id'];
        $selectedCategories = $_POST['categories'] ?? [];

        $stmt = $db->prepare("INSERT INTO articles (titre, content, id_author) VALUES (?, ?, ?)");
        $stmt->execute([$titre, $content, $id_author]);
        $articleId = $db->lastInsertId();

        if (!empty($selectedCategories)) {
            $stmt = $db->prepare("INSERT INTO article_categories (id_article, id_categorie) VALUES (?, ?)");
            foreach ($selectedCategories as $catId) {
                $stmt->execute([$articleId, $catId]);
            }
        }

        header('Location: /author');
        exit;
    }
}
