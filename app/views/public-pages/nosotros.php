<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Elegancia y Estilo</title>
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
        
        .hero {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            min-height: 70vh;
        }
        
        .hero-content h1 {
            color: #2c2c2c;
            font-size: 3.5rem;
            font-weight: 300;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            letter-spacing: 1px;
        }
        
        .hero-content p {
            color: #666;
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 2rem;
        }
        
        .hero-buttons {
            display: flex;
            gap: 1rem;
        }
        
        .primary-btn {
            background: linear-gradient(135deg, #d4af37 0%, #c9a432 100%);
            color: white;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            transition: transform 0.2s;
        }
        
        .primary-btn:hover {
            transform: translateY(-2px);
        }
        
        .secondary-btn {
            background: transparent;
            color: #2c2c2c;
            padding: 1rem 2.5rem;
            border: 2px solid #e8e6e0;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .secondary-btn:hover {
            background: white;
            border-color: #d4af37;
        }
        
        .hero-image {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(3, 120px);
            gap: 0.8rem;
        }
        
        .photo-item {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            overflow: hidden;
            position: relative;
            background-size: cover;
            background-position: center;
        }
        
        .photo-item::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.1) 0%, rgba(201, 164, 50, 0.1) 100%);
        }
        
        .photo-1 { grid-column: 1 / 2; grid-row: 1 / 3; background: linear-gradient(135deg, #f5e6d3 0%, #e8d9c5 100%); }
        .photo-2 { grid-column: 2 / 3; grid-row: 1 / 2; background: linear-gradient(135deg, #fff5e6 0%, #ffe8cc 100%); }
        .photo-3 { grid-column: 3 / 4; grid-row: 1 / 3; background: linear-gradient(135deg, #fef9f3 0%, #f5ebe0 100%); }
        .photo-4 { grid-column: 2 / 3; grid-row: 2 / 4; background: linear-gradient(135deg, #f8f4ef 0%, #e8dfd5 100%); }
        .photo-5 { grid-column: 1 / 2; grid-row: 3 / 4; background: linear-gradient(135deg, #fdf8f3 0%, #f0e6d8 100%); }
        .photo-6 { grid-column: 3 / 4; grid-row: 3 / 4; background: linear-gradient(135deg, #faf5f0 0%, #ebe2d5 100%); }
        
        .features {
            max-width: 1200px;
            margin: 6rem auto;
            padding: 0 2rem;
        }
        
        .features-header {
            text-align: center;
            margin-bottom: 4rem;
        }
        
        .features-header h2 {
            color: #2c2c2c;
            font-size: 2.5rem;
            font-weight: 300;
            margin-bottom: 1rem;
            letter-spacing: 1px;
        }
        
        .features-header p {
            color: #666;
            font-size: 1.1rem;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }
        
        .feature-card {
            background: white;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.06);
            border-left: 4px solid #d4af37;
            transition: transform 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #d4af37 0%, #c9a432 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
        }
        
        .feature-card h3 {
            color: #2c2c2c;
            font-size: 1.3rem;
            font-weight: 400;
            margin-bottom: 1rem;
        }
        
        .feature-card p {
            color: #666;
            line-height: 1.7;
        }
        
        footer {
            background: white;
            padding: 3rem 2rem;
            margin-top: 6rem;
            box-shadow: 0 -2px 12px rgba(0,0,0,0.06);
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
        }
        
        .footer-section h4 {
            color: #2c2c2c;
            font-size: 1.1rem;
            font-weight: 400;
            margin-bottom: 1rem;
            letter-spacing: 1px;
        }
        
        .footer-section p,
        .footer-section a {
            color: #666;
            text-decoration: none;
            line-height: 2;
            display: block;
        }
        
        .footer-section a:hover {
            color: #d4af37;
        }
        
        @media (max-width: 768px) {
            .hero {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .nav-links {
                display: none;
            }
        }
    </style>
</head>
<body>
<!--    <header>
        <nav>
            <div class="logo">MARCA</div>
            <ul class="nav-links">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
            <a href="#" class="cta-btn">Comenzar</a>
        </nav>
    </header>-->
    
<!--    <section class="hero">
        <div class="hero-content">
            <h1>Tu día perfecto comienza aquí</h1>
            <p>Inmortalizamos los momentos más especiales de tu boda con elegancia y sensibilidad. Cada imagen cuenta tu historia única, preservando las emociones y detalles que harán de este día un recuerdo eterno.</p>
            <div class="hero-buttons">
                <button class="primary-btn">Ver portafolio</button>
                <button class="secondary-btn">Cotizar ahora</button>
            </div>
        </div>
        <div class="hero-image">
            <div class="photo-item photo-1"></div>
            <div class="photo-item photo-2"></div>
            <div class="photo-item photo-3"></div>
            <div class="photo-item photo-4"></div>
            <div class="photo-item photo-5"></div>
            <div class="photo-item photo-6"></div>
        </div>
    </section>-->
    
    <section class="features">
        <div class="features-header">
            <h2>¿Por qué elegirnos?</h2>
            <p>Características que nos hacen únicos</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">✦</div>
                <h3>Calidad Superior</h3>
                <p>Cada proyecto es tratado con el máximo cuidado y atención, garantizando resultados excepcionales que superan expectativas.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Rapidez</h3>
                <p>Entregamos resultados en tiempo récord sin comprometer la calidad. Tu tiempo es valioso y lo respetamos.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3>Precisión</h3>
                <p>Atención meticulosa a cada detalle para asegurar que todo funcione exactamente como debe, sin margen de error.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">💎</div>
                <h3>Diseño Premium</h3>
                <p>Estética refinada que combina funcionalidad con belleza, creando experiencias memorables y distintivas.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3>Seguridad</h3>
                <p>Protección integral de tu información con los más altos estándares de seguridad y privacidad.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🌟</div>
                <h3>Soporte 24/7</h3>
                <p>Asistencia continua cuando la necesites. Estamos aquí para ayudarte en cada paso del camino.</p>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>MARCA</h4>
                <p>Creando experiencias excepcionales desde 2025.</p>
            </div>
            <div class="footer-section">
                <h4>Enlaces</h4>
                <a href="#">Inicio</a>
                <a href="#">Servicios</a>
                <a href="#">Nosotros</a>
                <a href="#">Contacto</a>
            </div>
            <div class="footer-section">
                <h4>Legal</h4>
                <a href="#">Términos de uso</a>
                <a href="#">Privacidad</a>
                <a href="#">Cookies</a>
            </div>
            <div class="footer-section">
                <h4>Contacto</h4>
                <p>info@marca.com</p>
                <p>+51 999 999 999</p>
            </div>
        </div>
    </footer>
</body>
</html>