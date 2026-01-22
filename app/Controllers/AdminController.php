<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use PDO;

class AdminController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            header('Location: /login');
            exit;
        }

        $db = Database::getInstance();

        $stmt = $db->query("SELECT * FROM categories");
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->view('admin/home', [
            'categories' => $categories
        ]);
    }

    public function createCategoryForm()
    {
        $this->view('admin/create_category');
    }

    public function storeCategory()
    {
        $db = Database::getInstance();

        $titre = trim($_POST['titre']);
        $id_admin = $_SESSION['user']['id'];

        $sql = "INSERT INTO categories (titre, id_admin) VALUES (?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$titre, $id_admin]);

        header('Location: /admin');
        exit;
    }
}
