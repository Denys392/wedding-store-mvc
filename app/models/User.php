<?php

require_once dirname(__DIR__) . '/core/Database.php';

class User {

    private $pdo;
    
    public $id;
    public $nombre;
    public $email;
    public $password_hash;
    public $rol_id;
    public $activo;

    public function __construct() {
        $this->pdo = Database::getInstance()->getConnection();
    }

    // Obtener todos los usuarios
    public function getAll() {
        $stmt = $this->pdo->query("SELECT id, nombre, email, rol_id, activo FROM usuarios");
        return $stmt->fetchAll();
    }

    // Validar usuario (login por correo y contraseña)
    public function validateUser($email, $password) {
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email LIMIT 1");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password_hash'])) {
            $this->id = $user['id'];
            $this->nombre = $user['nombre'];
            $this->email = $user['email'];
            $this->rol_id = $user['rol_id'];
            $this->activo = $user['activo'];
            return true;
        }

        return false;
    }

    // Crear usuario (con hash de contraseña)
    public function create($nombre, $email, $password, $rol_id = 2, $activo = 1) {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->pdo->prepare("INSERT INTO usuarios (nombre, email, password_hash, rol_id, activo, creado_en, actualizado_en) VALUES (:nombre, :email, :hash, :rol_id, :activo, NOW(), NOW())");
        return $stmt->execute([
            'nombre' => $nombre,
            'email' => $email,
            'hash' => $hash,
            'rol_id' => $rol_id,
            'activo' => $activo
        ]);
    }
}