<?php

require_once MODELS_PATH . '/User.php';

class ControllerAdmin {

    public function inicio() {
        if (isset($_SESSION['user'])) {
            header('Location: '. ADMIN_URL.'dashboard');
            exit;
        }
        $error = $_SESSION['error_login'] ?? '';
        unset($_SESSION['error_login']);
        require_once ADMIN_VIEW_PATH . 'login.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            $user = new User();
            if ($user->validateUser($email, $password)) {
                $_SESSION['user'] = [
                    'id' => $user->id,
                    'nombre' => $user->nombre,
                    'rol_id' => $user->rol_id
                ];
                header('Location: '. ADMIN_URL.'dashboard');
                exit;
            } else {
                $_SESSION['error_login'] = "Correo o contraseña incorrectos";
                header('Location: '. ADMIN_URL);
                exit;
            }
        }
    }
    
    public function dashboard() {
        if (!isset($_SESSION['user'])) {
            header('Location: '. ADMIN_URL);
            exit;
        }
        require_once ADMIN_VIEW_PATH . 'dashboard.php';
    }

    public function logout() {
        session_destroy();
        header('Location: '. ADMIN_URL);
        exit;
    }
}