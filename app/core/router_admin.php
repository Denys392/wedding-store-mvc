<?php
//// =============================================
//// Router para el panel admin (URLs limpias)
//// =============================================
//
//// Obtiene la ruta limpia desde la URL
//$url = isset($_GET['url']) ? $_GET['url'] : '';
//$segments = explode('/', trim($url, '/'));
//
//$controlador = !empty($segments[0]) ? $segments[0] : 'admin';
//$accion = isset($segments[1]) ? $segments[1] : 'inicio';
//
//// Sanitizar los valores (evita inyecciones)
//$controlador = preg_replace('/[^a-zA-Z0-9_]/', '', $controlador);
//$accion = preg_replace('/[^a-zA-Z0-9_]/', '', $accion);
//
//// Construir la ruta del controlador
//$archivo = APP_PATH . "controllers/Controller" . ucfirst($controlador) . ".php";
//
//// =============================================
//// Cargar el controlador y ejecutar acción
//// =============================================
//if (file_exists($archivo)) {
//    require_once $archivo;
//    $clase = "Controller" . ucfirst($controlador);
//
//    if (class_exists($clase)) {
//        $control = new $clase();
//
//        if (method_exists($control, $accion)) {
//            $control->$accion();
//        } else {
//            // Acción no encontrada
//            require_once APP_PATH . "controllers/ControllerError.php";
//            $error = new ControllerError();
//            $error->notFound();
//        }
//    } else {
//        // Clase no existe
//        require_once APP_PATH . "controllers/ControllerError.php";
//        $error = new ControllerError();
//        $error->notFound();
//    }
//} else {
//    session_start();
//        $_SESSION['errores'] = 'URL RECIBIDA: ' . ($_GET['url'] ?? 'SIN URL');
//    require_once APP_PATH . "controllers/ControllerError.php";
//    $error = new ControllerError();
//    $error->notFound();
//}