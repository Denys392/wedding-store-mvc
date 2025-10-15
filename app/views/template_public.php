<?php
// Incluye el CSS del header (ajusta la ruta según tu estructura)
?>

<html>
    <head>
        <title>title</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            header {
                background: white;
                padding: 1.2rem 2rem;
                box-shadow: 0 2px 12px rgba(0,0,0,0.06);
                position: sticky;
                top: 0;
                z-index: 100;
            }

            nav {
                max-width: 1200px;
                margin: 0 auto;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .logo {
                color: #2c2c2c;
                font-size: 1.5rem;
                font-weight: 300;
                letter-spacing: 2px;
            }

            .nav-links {
                display: flex;
                gap: 2rem;
                list-style: none;
            }

            .nav-links a {
                color: #666;
                text-decoration: none;
                font-size: 0.95rem;
                transition: color 0.3s;
            }

            .nav-links a:hover {
                color: #d4af37;
            }

            .cta-btn {
                background: linear-gradient(135deg, #d4af37 0%, #c9a432 100%);
                color: white;
                padding: 0.6rem 1.8rem;
                border: none;
                border-radius: 6px;
                cursor: pointer;
                font-size: 0.9rem;
                transition: transform 0.2s;
                text-decoration: none;
            }

            .cta-btn:hover {
                transform: translateY(-2px);
            }

            @media (max-width: 768px) {
                .nav-links {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <header>

            <nav>
                <div class="logo">MARCA</div>
                <ul class="nav-links">
                    <li><a href="<?php echo PUBLIC_URL.'inicio';?>">Inicio</a></li>
                    <li><a href="<?php echo PUBLIC_URL.'servicios';?>">Servicios</a></li>
                    <li><a href="<?php echo PUBLIC_URL.'nosotros';?>">Nosotros</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
                <a href="#" class="cta-btn">Comenzar</a>
            </nav>
        </header>
    </body>
</html>
