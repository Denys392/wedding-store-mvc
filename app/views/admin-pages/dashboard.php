<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header('Location: ' . ADMIN_URL);
    exit;
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Admin</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: linear-gradient(135deg, #f5f5f0 0%, #e8e6e0 100%);
                min-height: 100vh;
            }

            header {
                background: white;
                padding: 1.2rem 2rem;
                box-shadow: 0 2px 12px rgba(0,0,0,0.06);
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            header h1 {
                color: #2c2c2c;
                font-size: 1.5rem;
                font-weight: 300;
                letter-spacing: 1px;
            }

            .user-info {
                display: flex;
                gap: 1rem;
                align-items: center;
            }

            .user-info span {
                color: #666;
                font-size: 0.95rem;
            }

            .logout-btn {
                background: linear-gradient(135deg, #d4af37 0%, #c9a432 100%);
                color: white;
                padding: 0.5rem 1.5rem;
                border: none;
                border-radius: 6px;
                cursor: pointer;
                font-size: 0.9rem;
                transition: transform 0.2s;
            }

            .logout-btn:hover {
                transform: translateY(-2px);
            }

            .container {
                max-width: 1200px;
                margin: 2rem auto;
                padding: 0 2rem;
            }

            .stats {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 1.5rem;
                margin-bottom: 2rem;
            }

            .stat-card {
                background: white;
                padding: 2rem;
                border-radius: 12px;
                box-shadow: 0 4px 16px rgba(0,0,0,0.06);
                border-left: 4px solid #d4af37;
            }

            .stat-card h3 {
                color: #666;
                font-size: 0.9rem;
                font-weight: 400;
                margin-bottom: 0.5rem;
                text-transform: uppercase;
                letter-spacing: 0.5px;
            }

            .stat-card p {
                color: #2c2c2c;
                font-size: 2rem;
                font-weight: 300;
            }

            .content-section {
                background: white;
                padding: 2rem;
                border-radius: 12px;
                box-shadow: 0 4px 16px rgba(0,0,0,0.06);
            }

            .content-section h2 {
                color: #2c2c2c;
                font-size: 1.3rem;
                font-weight: 300;
                margin-bottom: 1.5rem;
                letter-spacing: 0.5px;
            }

            .action-btn {
                background: linear-gradient(135deg, #d4af37 0%, #c9a432 100%);
                color: white;
                padding: 0.7rem 1.8rem;
                border: none;
                border-radius: 6px;
                cursor: pointer;
                font-size: 0.95rem;
                transition: transform 0.2s;
                margin-bottom: 1.5rem;
            }

            .action-btn:hover {
                transform: translateY(-2px);
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            th {
                text-align: left;
                padding: 1rem;
                background: #fafafa;
                color: #666;
                font-weight: 500;
                font-size: 0.9rem;
                text-transform: uppercase;
                letter-spacing: 0.5px;
            }

            td {
                padding: 1rem;
                border-bottom: 1px solid #f0f0f0;
                color: #2c2c2c;
            }

            tr:hover {
                background: #fafafa;
            }

            .edit-btn, .delete-btn {
                padding: 0.4rem 1rem;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 0.85rem;
                margin-right: 0.5rem;
            }

            .edit-btn {
                background: #e8e6e0;
                color: #2c2c2c;
            }

            .delete-btn {
                background: #ffe0e0;
                color: #c41e3a;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Dashboard</h1>
            <div class="user-info">
                <span>Bienvenido, <?= htmlspecialchars($user['nombre']) ?></span>
                <button class="logout-btn a">Cerrar sesión</button>
            </div>
        </header>

        <div class="container">
            <div class="stats">
                <div class="stat-card">
                    <h3>Usuarios</h3>
                    <p>245</p>
                </div>
                <div class="stat-card">
                    <h3>Productos</h3>
                    <p>89</p>
                </div>
                <div class="stat-card">
                    <h3>Ventas</h3>
                    <p>1,234</p>
                </div>
                <div class="stat-card">
                    <h3>Ingresos</h3>
                    <p>$45,678</p>
                </div>
            </div>

            <div class="content-section">
                <h2>Gestión de contenido</h2>
                <button class="action-btn">+ Agregar nuevo</button>

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Producto ejemplo 1</td>
                            <td>14/10/2025</td>
                            <td>Activo</td>
                            <td>
                                <button class="edit-btn">Editar</button>
                                <button class="delete-btn">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Producto ejemplo 2</td>
                            <td>13/10/2025</td>
                            <td>Activo</td>
                            <td>
                                <button class="edit-btn">Editar</button>
                                <button class="delete-btn">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>Producto ejemplo 3</td>
                            <td>12/10/2025</td>
                            <td>Inactivo</td>
                            <td>
                                <button class="edit-btn">Editar</button>
                                <button class="delete-btn">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <script>
            document.querySelector('.logout-btn').addEventListener('click', function () {
                window.location.href = "<?= ADMIN_URL ?>logout";
            });
        </script>
    </body>
</html>