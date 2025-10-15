<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['errores'])) {
//    echo $_SESSION['errores'];
    unset($_SESSION['errores']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error 404 - Página no encontrada</title>
    <style>
        body {
            background: #23272e;
            color: #e74c3c;
            font-family: 'Segoe UI', Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .error-container {
            background: #2c2f36;
            padding: 40px 50px;
            border-radius: 16px;
            box-shadow: 0 6px 24px rgba(0,0,0,0.3);
            text-align: center;
        }
        h1 {
            font-size: 3em;
            margin: 0 0 20px;
            color: #ff7675;
            letter-spacing: 2px;
        }
        p {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: #fafafa;
        }
        a {
            display: inline-block;
            padding: 12px 28px;
            background: #e74c3c;
            color: #fff;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.2s;
        }
        a:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>Error 404</h1>
        <p>La página que intentas acceder no existe.</p>
        <a href="<?php echo PUBLIC_URL.'inicio';?>">Volver al inicio</a>
    </div>
</body>
</html>