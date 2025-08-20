<?php
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../Models/User.php';

class AuthController extends BaseController {
    public function login() {
        $error = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username'] ?? '');
            $password = trim($_POST['password'] ?? '');
            $userModel = new User();
            if ($userModel->verifyLogin($username, $password)) {
                $_SESSION['user'] = $username;
                header('Location: index.php?controller=book&action=index');
                exit;
            } else {
                $error = "Usuario o contraseña incorrectos";
            }
        }
        $this->render('auth/login', ['error' => $error]);
    }

    public function logout() {
        session_destroy();
        header('Location: index.php');
        exit;
    }
}
