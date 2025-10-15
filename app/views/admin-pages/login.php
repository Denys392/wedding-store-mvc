<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .container {
            background: white;
            padding: 3rem 2.5rem;
            border-radius: 12px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.08);
            width: 90%;
            max-width: 380px;
        }
        
        h1 {
            color: #2c2c2c;
            font-size: 1.8rem;
            font-weight: 300;
            margin-bottom: 2rem;
            text-align: center;
            letter-spacing: 1px;
        }
        
        .error {
            background: #fff5f5;
            color: #c41e3a;
            padding: 0.75rem;
            border-radius: 6px;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            border-left: 3px solid #c41e3a;
        }
        
        input {
            width: 100%;
            padding: 0.9rem 1rem;
            margin-bottom: 1.2rem;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            font-size: 0.95rem;
            transition: all 0.3s;
            background: #fafafa;
        }
        
        input:focus {
            outline: none;
            border-color: #d4af37;
            background: white;
        }
        
        button {
            width: 100%;
            padding: 0.95rem;
            background: linear-gradient(135deg, #d4af37 0%, #c9a432 100%);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            letter-spacing: 0.5px;
        }
        
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.3);
        }
        
        button:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Iniciar sesión</h1>
        <?php if (!empty($error)): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
            <form method="POST" action="<?= ADMIN_URL ?>login">
            <input type="email" name="email" placeholder="Correo" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>