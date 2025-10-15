<?php
// =============================================
// Router principal (sitio público + admin)
// =============================================

session_start();

// 1️⃣ Obtener la URL limpia
$url = isset($_GET['url']) ? trim($_GET['url'], '/') : '';
$segments = explode('/', $url);

// 2️⃣ Determinar el tipo de ruta
// Ejemplo: admin/dashboard → es del panel admin
$isAdmin = isset($segments[0]) && $segments[0] === 'admin';
$isAdminLogin = isset($segments[0]) && $segments[0] === 'login';

// 3️⃣ Definir controlador y acción
if ($isAdmin || $isAdminLogin) {
    // Siempre usa ControllerAdmin para rutas admin
    $controlador = 'admin';
    // Acción es el siguiente segmento, o 'inicio' si no está
    $accion = isset($segments[1]) && $segments[1] !== '' ? $segments[1] : 'inicio';
} else {
    $controlador = !empty($segments[0]) ? $segments[0] : 'inicio';
    $accion = isset($segments[1]) ? $segments[1] : 'inicio';
}

// 4️⃣ Sanitizar entradas
$controlador = preg_replace('/[^a-zA-Z0-9_]/', '', $controlador);
$accion = preg_replace('/[^a-zA-Z0-9_]/', '', $accion);

// 5️⃣ Construir ruta del controlador
$archivo = APP_PATH . "controllers/Controller" . ucfirst($controlador) . ".php";

// =============================================
// 6️⃣ Cargar controlador y ejecutar acción
// =============================================
if (file_exists($archivo)) {
    require_once $archivo;
    $clase = "Controller" . ucfirst($controlador);

    if (class_exists($clase)) {
        $control = new $clase();

        if (method_exists($control, $accion)) {
            $control->$accion();
        } else {
            require_once APP_PATH . "controllers/ControllerError.php";
            (new ControllerError())->notFound();
        }
    } else {
        require_once APP_PATH . "controllers/ControllerError.php";
        (new ControllerError())->notFound();
    }
} else {
    $_SESSION['errores'] = "AADASDAS " . $archivo . ' ??? '.$controlador. ' ' .$accion;
    require_once APP_PATH . "controllers/ControllerError.php";
    (new ControllerError())->notFound();
}
