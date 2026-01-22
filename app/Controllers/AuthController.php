<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use PDO;

class AuthController extends Controller
{
    public function loginForm()
    {
        $this->view('/auth/login');
    }

    public function registerForm()
    {
        $this->view('/auth/register');
    }

    public function register()
    {
        $db = Database::getInstance();

        $nom = trim($_POST['nom']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $role = $_POST['role'] ?? 'reader';

        if (!in_array($role, ['reader', 'author'])) {
            $role = 'reader';
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (nom, email, mot_passe, role)
                VALUES (?, ?, ?, ?)";

        $stmt = $db->prepare($sql);
        $stmt->execute([$nom, $email, $hashedPassword, $role]);

        header('Location: /login');
        exit;
    }

   public function login()
{

    $db = Database::getInstance();

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        header('Location: /login');
        exit;
    }

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    

    if (!$user || !password_verify($password, $user['mot_passe'])) {
        echo "password incorrect";
        header('Location: /login');
        exit;
    }

    session_regenerate_id(true);
    $_SESSION['user'] = $user;

    switch ($user['role']) {
        case 'admin':
            header('Location: /admin');
            break;
        case 'author':
            header('Location: /author');
            break;
        default:
            header('Location: /');
    }
    exit;
}


    public function logout()
    {
        session_destroy();
        header('Location: /login');
        exit;
    }
}
