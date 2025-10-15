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
            margin: 6rem auto 4rem;
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
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
        }
        
        .feature-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.06);
            overflow: hidden;
            transition: transform 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
        }
        
        .feature-image {
            width: 100%;
            height: 280px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .feature-image::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.1) 100%);
        }
        
        .feature-content {
            padding: 2rem;
        }
        
        .feature-tag {
            display: inline-block;
            background: linear-gradient(135deg, #d4af37 0%, #c9a432 100%);
            color: white;
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            margin-bottom: 1rem;
            letter-spacing: 0.5px;
        }
        
        .feature-card h3 {
            color: #2c2c2c;
            font-size: 1.4rem;
            font-weight: 400;
            margin-bottom: 0.8rem;
        }
        
        .feature-card p {
            color: #666;
            line-height: 1.7;
            margin-bottom: 1rem;
        }
        
        .feature-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            border-top: 1px solid #f0f0f0;
            font-size: 0.9rem;
            color: #999;
        }
        
        .portfolio {
            background: white;
            padding: 6rem 0;
        }
        
        .portfolio-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .portfolio-header {
            text-align: center;
            margin-bottom: 4rem;
        }
        
        .portfolio-header h2 {
            color: #2c2c2c;
            font-size: 2.5rem;
            font-weight: 300;
            margin-bottom: 1rem;
            letter-spacing: 1px;
        }
        
        .portfolio-header p {
            color: #666;
            font-size: 1.1rem;
        }
        
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-auto-rows: 280px;
            gap: 1.5rem;
        }
        
        .portfolio-item {
            background-size: cover;
            background-position: center;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s;
        }
        
        .portfolio-item:hover {
            transform: scale(1.02);
        }
        
        .portfolio-item::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.6) 100%);
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .portfolio-item:hover::before {
            opacity: 1;
        }
        
        .portfolio-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 1.5rem;
            color: white;
            transform: translateY(100%);
            transition: transform 0.3s;
        }
        
        .portfolio-item:hover .portfolio-info {
            transform: translateY(0);
        }
        
        .portfolio-info h4 {
            font-size: 1.1rem;
            font-weight: 400;
            margin-bottom: 0.3rem;
        }
        
        .portfolio-info p {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        .portfolio-item.large {
            grid-column: span 2;
            grid-row: span 2;
        }
        
        .portfolio-item.wide {
            grid-column: span 2;
        }
        
        .portfolio-item.tall {
            grid-row: span 2;
        }
        
        @media (max-width: 1024px) {
            .portfolio-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            .portfolio-grid {
                grid-template-columns: 1fr;
                grid-auto-rows: 300px;
            }
            
            .portfolio-item.large,
            .portfolio-item.wide,
            .portfolio-item.tall {
                grid-column: span 1;
                grid-row: span 1;
            }
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
    
    <section class="hero">
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
    </section>
    
    <section class="features">
        <div class="features-header">
            <h2>Momentos capturados</h2>
            <p>Cada boda cuenta una historia única</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-image" style="background: linear-gradient(135deg, #f5e6d3 0%, #e8d9c5 100%);"></div>
                <div class="feature-content">
                    <span class="feature-tag">CEREMONIA</span>
                    <h3>María & Carlos</h3>
                    <p>Una ceremonia íntima en jardín, donde las miradas lo dijeron todo. Capturamos cada emoción, desde las lágrimas de felicidad hasta las sonrisas cómplices.</p>
                    <div class="feature-meta">
                        <span>📍 Lima, Perú</span>
                        <span>Junio 2024</span>
                    </div>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-image" style="background: linear-gradient(135deg, #fff5e6 0%, #ffe8cc 100%);"></div>
                <div class="feature-content">
                    <span class="feature-tag">RECEPCIÓN</span>
                    <h3>Ana & Diego</h3>
                    <p>La fiesta comenzó con una puesta de sol espectacular. Bailaron hasta el amanecer rodeados de sus seres queridos en una celebración inolvidable.</p>
                    <div class="feature-meta">
                        <span>📍 Cusco, Perú</span>
                        <span>Agosto 2024</span>
                    </div>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-image" style="background: linear-gradient(135deg, #fef9f3 0%, #f5ebe0 100%);"></div>
                <div class="feature-content">
                    <span class="feature-tag">PRE-BODA</span>
                    <h3>Sofía & Miguel</h3>
                    <p>Sesión romántica en la playa al atardecer. El viento, el mar y su amor crearon la combinación perfecta para fotografías llenas de vida y naturalidad.</p>
                    <div class="feature-meta">
                        <span>📍 Máncora, Perú</span>
                        <span>Julio 2024</span>
                    </div>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-image" style="background: linear-gradient(135deg, #f8f4ef 0%, #e8dfd5 100%);"></div>
                <div class="feature-content">
                    <span class="feature-tag">DESTINO</span>
                    <h3>Laura & Javier</h3>
                    <p>Una boda mágica en viñedos bajo el cielo estrellado. Elegancia, romance y un entorno de ensueño que hizo de este día algo extraordinario.</p>
                    <div class="feature-meta">
                        <span>📍 Ica, Perú</span>
                        <span>Septiembre 2024</span>
                    </div>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-image" style="background: linear-gradient(135deg, #fdf8f3 0%, #f0e6d8 100%);"></div>
                <div class="feature-content">
                    <span class="feature-tag">CIVIL</span>
                    <h3>Valentina & Pablo</h3>
                    <p>Ceremonia civil íntima y emotiva, rodeados solo de familia cercana. Los detalles minimalistas crearon un ambiente cálido y lleno de significado.</p>
                    <div class="feature-meta">
                        <span>📍 Arequipa, Perú</span>
                        <span>Octubre 2024</span>
                    </div>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-image" style="background: linear-gradient(135deg, #faf5f0 0%, #ebe2d5 100%);"></div>
                <div class="feature-content">
                    <span class="feature-tag">RELIGIOSA</span>
                    <h3>Camila & Andrés</h3>
                    <p>Ceremonia religiosa tradicional en catedral histórica. La arquitectura colonial y la luz natural crearon un escenario de película para este momento sagrado.</p>
                    <div class="feature-meta">
                        <span>📍 Trujillo, Perú</span>
                        <span>Mayo 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="portfolio">
        <div class="portfolio-container">
            <div class="portfolio-header">
                <h2>Nuestro portafolio</h2>
                <p>Una colección de momentos únicos e irrepetibles</p>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item large" style="background: linear-gradient(135deg, #f5e6d3 0%, #e8d9c5 100%);">
                    <div class="portfolio-info">
                        <h4>Boda en jardín</h4>
                        <p>Ceremonia al aire libre</p>
                    </div>
                </div>
                <div class="portfolio-item" style="background: linear-gradient(135deg, #fff5e6 0%, #ffe8cc 100%);">
                    <div class="portfolio-info">
                        <h4>Primer baile</h4>
                        <p>Momento mágico</p>
                    </div>
                </div>
                <div class="portfolio-item" style="background: linear-gradient(135deg, #fef9f3 0%, #f5ebe0 100%);">
                    <div class="portfolio-info">
                        <h4>Detalles florales</h4>
                        <p>Decoración elegante</p>
                    </div>
                </div>
                <div class="portfolio-item tall" style="background: linear-gradient(135deg, #f8f4ef 0%, #e8dfd5 100%);">
                    <div class="portfolio-info">
                        <h4>Retrato de novios</h4>
                        <p>Sesión romántica</p>
                    </div>
                </div>
                <div class="portfolio-item" style="background: linear-gradient(135deg, #fdf8f3 0%, #f0e6d8 100%);">
                    <div class="portfolio-info">
                        <h4>Anillos</h4>
                        <p>Detalles preciosos</p>
                    </div>
                </div>
                <div class="portfolio-item wide" style="background: linear-gradient(135deg, #faf5f0 0%, #ebe2d5 100%);">
                    <div class="portfolio-info">
                        <h4>Recepción nocturna</h4>
                        <p>Bajo las estrellas</p>
                    </div>
                </div>
                <div class="portfolio-item" style="background: linear-gradient(135deg, #f5e6d3 0%, #e8d9c5 100%);">
                    <div class="portfolio-info">
                        <h4>Mesa de novios</h4>
                        <p>Montaje elegante</p>
                    </div>
                </div>
                <div class="portfolio-item wide" style="background: linear-gradient(135deg, #fff5e6 0%, #ffe8cc 100%);">
                    <div class="portfolio-info">
                        <h4>Atardecer romántico</h4>
                        <p>Luz perfecta</p>
                    </div>
                </div>
                <div class="portfolio-item" style="background: linear-gradient(135deg, #fef9f3 0%, #f5ebe0 100%);">
                    <div class="portfolio-info">
                        <h4>Brindis</h4>
                        <p>Celebración íntima</p>
                    </div>
                </div>
                <div class="portfolio-item" style="background: linear-gradient(135deg, #f8f4ef 0%, #e8dfd5 100%);">
                    <div class="portfolio-info">
                        <h4>Ramo de novia</h4>
                        <p>Flores frescas</p>
                    </div>
                </div>
                <div class="portfolio-item tall" style="background: linear-gradient(135deg, #fdf8f3 0%, #f0e6d8 100%);">
                    <div class="portfolio-info">
                        <h4>Camino al altar</h4>
                        <p>Momento emotivo</p>
                    </div>
                </div>
                <div class="portfolio-item" style="background: linear-gradient(135deg, #faf5f0 0%, #ebe2d5 100%);">
                    <div class="portfolio-info">
                        <h4>Preparativos</h4>
                        <p>Detrás de cámaras</p>
                    </div>
                </div>
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