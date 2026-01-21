<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use PDO;

class AuthController extends Controller
{
    public function loginForm()
    {
        $this->view("/auth/login");
    }

    public function registerForm()
    {
        $this->view("/auth/register");
    }

    public function register()
{
    $db = Database::getInstance();

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    if (!in_array($role, ['reader', 'author'])) {
        $role = 'reader';
    }

    $sql = "INSERT INTO users (nom, email, mot_passe, role)
            VALUES (?, ?, ?, ?)";

    $stmt = $db->prepare($sql);
    $stmt->execute([$nom, $email, $password, $role]);

    header('Location: /login');
    exit;
}


    public function login()
    {
        $db = Database::getInstance();

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['mot_passe'])) {
            $_SESSION['user'] = $user;
            header('Location: /');
            exit;
        }

        header('Location: /login');
    }
}
