<?php
//// =============================================
//// Router para el sitio público
//// =============================================
//
//// Controlador y acción por defecto
//$controlador = isset($_GET['controlador']) ? trim($_GET['controlador']) : 'pages';
//$accion = isset($_GET['accion']) ? trim($_GET['accion']) : 'inicio';
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
//    // Archivo no encontrado
//    require_once APP_PATH . "controllers/ControllerError.php";
//    $error = new ControllerError();
//    $error->notFound();
//}