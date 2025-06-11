<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noir Tattoo - Estudio de tatuajes andinos en Cusco</title>
    <style>
        /* Reset y estilos base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        
        body {
            background-color: white;
            color: black;
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        @font-face {
            font-family: 'Montserrat';
            src: url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
        }
        
        a {
            text-decoration: none;
            color: black;
            transition: all 0.3s ease;
        }
        
        a:hover {
            color: #333;
        }
        
        /* Texturas y patrones */
        .ink-texture {
            background-image: 
                radial-gradient(circle at 20% 50%, transparent 20%, rgba(0,0,0,0.05) 21%, rgba(0,0,0,0.05) 34%, transparent 35%, transparent),
                linear-gradient(0deg, rgba(0,0,0,0.02) 50%, transparent 50%);
            background-size: 40px 40px, 20px 20px;
        }
        
        .geometric-pattern {
            background-image: 
                linear-gradient(45deg, rgba(0,0,0,0.03) 25%, transparent 25%), 
                linear-gradient(-45deg, rgba(0,0,0,0.03) 25%, transparent 25%), 
                linear-gradient(45deg, transparent 75%, rgba(0,0,0,0.03) 75%), 
                linear-gradient(-45deg, transparent 75%, rgba(0,0,0,0.03) 75%);
            background-size: 30px 30px;
            background-position: 0 0, 0 15px, 15px -15px, -15px 0px;
        }
        
        /* Header y navegación */
        header {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            border-bottom: 2px solid black;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        
        .logo {
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            position: relative;
            text-shadow: 2px 2px 0px white, -1px -1px 0px black;
        }
        
        .logo:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, black 0%, transparent 50%, black 100%);
            bottom: -8px;
            left: 0;
            transform: scaleX(0);
            transform-origin: center;
            transition: transform 0.4s ease;
        }
        
        .logo:hover:after {
            transform: scaleX(1);
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 30px;
            position: relative;
        }
        
        .nav-links a {
            font-weight: 500;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 1px;
            padding: 8px 0;
            position: relative;
        }
        
        .nav-links a:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent 0%, black 50%, transparent 100%);
            bottom: 0;
            left: 0;
            transform: scaleX(0);
            transform-origin: center;
            transition: transform 0.3s ease;
        }
        
        .nav-links a:hover:after {
            transform: scaleX(1);
        }
        
        .btn {
            display: inline-block;
            padding: 15px 35px;
            background-color: black;
            color: white;
            border: 3px solid black;
            border-radius: 0;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 2px;
            font-weight: 600;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
            box-shadow: 5px 5px 0px rgba(0,0,0,0.3);
        }
        
        .btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: white;
            transition: all 0.4s ease;
            z-index: -1;
        }
        
        .btn:hover {
            color: black;
            transform: translate(-2px, -2px);
            box-shadow: 7px 7px 0px rgba(0,0,0,0.4);
        }
        
        .btn:hover:before {
            left: 0;
        }
        
        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            background: 
                linear-gradient(135deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.5) 50%, rgba(0,0,0,0.8) 100%),
                url('https://images.unsplash.com/photo-1568515045052-f9a854d70bfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            text-align: center;
            margin-top: 0;
            position: relative;
            color: white;
        }
        
        .hero:before {
            content: '';
            position: absolute;
            top: 30px;
            left: 30px;
            right: 30px;
            bottom: 30px;
            border: 2px solid rgba(255,255,255,0.3);
            pointer-events: none;
            backdrop-filter: blur(1px);
        }
        
        .hero:after {
            content: '';
            position: absolute;
            top: 50px;
            left: 50px;
            right: 50px;
            bottom: 50px;
            border: 1px solid rgba(255,255,255,0.2);
            pointer-events: none;
        }
        
        .hero-content {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            padding: 0 30px;
            z-index: 10;
            position: relative;
        }
        
        .hero h1 {
            font-size: 56px;
            margin-bottom: 40px;
            letter-spacing: 4px;
            text-transform: uppercase;
            font-weight: 700;
            position: relative;
            display: inline-block;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.8);
        }
        
        .hero h1:after {
            content: '';
            position: absolute;
            width: 60%;
            height: 4px;
            background: linear-gradient(90deg, transparent 0%, white 50%, transparent 100%);
            bottom: -15px;
            left: 20%;
            animation: glow 2s ease-in-out infinite alternate;
        }
        
        @keyframes glow {
            from { box-shadow: 0 0 5px white; }
            to { box-shadow: 0 0 20px white, 0 0 30px rgba(255,255,255,0.5); }
        }
        
        .hero p {
            font-size: 20px;
            margin: 0 auto 50px;
            line-height: 1.8;
            font-weight: 300;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
            max-width: 800px;
        }
        
        .btn-hero {
            background-color: white;
            color: black;
            border: 3px solid white;
            font-size: 14px;
            padding: 18px 40px;
            margin-top: 20px;
        }
        
        .btn-hero:before {
            background: black;
        }
        
        .btn-hero:hover {
            color: white;
            box-shadow: 5px 5px 0px rgba(255,255,255,0.3);
        }
        
        /* Sección de servicios */
        .services {
            padding: 120px 0;
            text-align: center;
            position: relative;
            background: white;
        }
        
        .services:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(0,0,0,0.02) 2px, transparent 2px),
                radial-gradient(circle at 75% 75%, rgba(0,0,0,0.02) 2px, transparent 2px);
            background-size: 50px 50px;
            pointer-events: none;
        }
        
        .section-title {
            font-size: 42px;
            margin-bottom: 60px;
            position: relative;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: 700;
        }
        
        .section-title:before {
            content: '';
            position: absolute;
            width: 120%;
            height: 60px;
            background: 
                linear-gradient(45deg, transparent 30%, rgba(0,0,0,0.05) 50%, transparent 70%);
            top: 50%;
            left: -10%;
            transform: translateY(-50%);
            z-index: -1;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, black 0%, rgba(0,0,0,0.5) 50%, black 100%);
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 50px;
            margin-top: 80px;
        }
        
        .service-card {
            background-color: white;
            padding: 50px 40px;
            position: relative;
            transition: all 0.4s ease;
            border: 2px solid transparent;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .service-card:before {
            content: '';
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border: 2px solid black;
            opacity: 0;
            transition: all 0.4s ease;
            transform: scale(0.9);
        }
        
        .service-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
        }
        
        .service-card:hover:before {
            opacity: 1;
            transform: scale(1);
        }
        
        .service-icon {
            font-size: 60px;
            margin-bottom: 30px;
            display: inline-block;
            position: relative;
        }
        
        .service-icon:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 80px;
            border: 2px solid rgba(0,0,0,0.1);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(45deg);
            transition: all 0.4s ease;
        }
        
        .service-card:hover .service-icon:after {
            transform: translate(-50%, -50%) rotate(225deg) scale(1.2);
            border-color: black;
        }
        
        .service-card h3 {
            font-size: 24px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }
        
        .service-card p {
            font-weight: 300;
            font-size: 16px;
            line-height: 1.7;
        }
        
        /* Sección de galería */
        .gallery {
            padding: 120px 0;
            background: 
                linear-gradient(135deg, #f8f8f8 0%, white 50%, #f8f8f8 100%);
            text-align: center;
            position: relative;
        }
        
        .gallery:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(30deg, rgba(0,0,0,0.02) 12%, transparent 12.5%, transparent 87%, rgba(0,0,0,0.02) 87.5%, rgba(0,0,0,0.02)),
                linear-gradient(150deg, rgba(0,0,0,0.02) 12%, transparent 12.5%, transparent 87%, rgba(0,0,0,0.02) 87.5%, rgba(0,0,0,0.02));
            background-size: 40px 40px;
            pointer-events: none;
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 3px;
            margin-top: 80px;
            background-color: black;
            padding: 3px;
        }
        
        .gallery-item {
            height: 350px;
            overflow: hidden;
            position: relative;
            background-color: white;
            transition: all 0.4s ease;
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.6s ease;
            filter: grayscale(20%) contrast(110%);
        }
        
        .gallery-item:hover {
            transform: scale(1.02);
            z-index: 10;
            box-shadow: 0 15px 40px rgba(0,0,0,0.4);
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
            filter: grayscale(0%) contrast(120%);
        }
        
        .gallery-item:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                linear-gradient(45deg, rgba(0,0,0,0.3) 0%, transparent 50%, rgba(0,0,0,0.3) 100%);
            opacity: 0;
            transition: all 0.4s ease;
        }
        
        .gallery-item:hover:after {
            opacity: 1;
        }
        
        /* Sección adicional con textura */
        .texture-section {
            padding: 100px 0;
            background: black;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .texture-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 20% 80%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255,255,255,0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .texture-content {
            position: relative;
            z-index: 2;
        }
        
        .texture-content h2 {
            font-size: 38px;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .texture-content p {
            font-size: 18px;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
            font-weight: 300;
        }
        
        /* Footer */
        footer {
            background: 
                linear-gradient(135deg, #1a1a1a 0%, black 50%, #1a1a1a 100%);
            color: white;
            padding: 100px 0 40px;
            text-align: center;
            position: relative;
        }
        
        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .footer-logo {
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 3px;
            margin-bottom: 40px;
            color: white;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            list-style: none;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }
        
        .footer-links li {
            margin: 0 20px 15px;
        }
        
        .footer-links a {
            color: white;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 1px;
            position: relative;
            font-weight: 500;
        }
        
        .footer-links a:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent 0%, white 50%, transparent 100%);
            bottom: -5px;
            left: 0;
            transform: scaleX(0);
            transform-origin: center;
            transition: transform 0.3s ease;
        }
        
        .footer-links a:hover:after {
            transform: scaleX(1);
        }
        
        .social-links {
            margin-bottom: 50px;
        }
        
        .social-links a {
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 2px solid white;
            border-radius: 50%;
            margin: 0 15px;
            color: white;
            line-height: 46px;
            font-size: 18px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        
        .social-links a:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: white;
            transition: all 0.4s ease;
            z-index: -1;
        }
        
        .social-links a:hover {
            color: black;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255,255,255,0.3);
        }
        
        .social-links a:hover:before {
            left: 0;
        }
        
        .copyright {
            font-size: 13px;
            opacity: 0.8;
            letter-spacing: 1px;
            margin-top: 40px;
            border-top: 1px solid rgba(255,255,255,0.2);
            padding-top: 30px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero h1 {
                font-size: 40px;
                letter-spacing: 2px;
            }
            
            .hero p {
                font-size: 18px;
            }
            
            .section-title {
                font-size: 32px;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .service-card {
                padding: 40px 30px;
            }
            
            .gallery-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
        }
        
        @media (max-width: 480px) {
            .hero h1 {
                font-size: 32px;
            }
            
            .section-title {
                font-size: 28px;
            }
            
            .container {
                padding: 0 15px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">NOIR TATTOO</a>
                <ul class="nav-links">
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#galeria">Galería</a></li>
                    <li><a href="#artistas">Artistas</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
                <a href="#" class="btn" onclick="alert('¡La página de reservas estará disponible pronto!')">Reservar Cita</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Arte Ancestral en tu Piel</h1>
            <p>Somos un estudio profesional cusqueño de tatuajes enfocados en nuestra Cultura Andina. Te invito a descubrir nuestros últimos trabajos, donde cada tatuaje captura la esencia de la Cosmogonía Andina. Nos inspiramos en la Pachamama y su profunda conexión con la naturaleza, en nuestras raíces ancestrales, la Chakana, y los animales emblemáticos como las llamas, picaflores, cóndores, pumas y serpientes. Además, nos inspira nuestra diversa y colorida flora, con flores como el floripondio, el kantu, y el San Pedro, alma viva de nuestra cosmogonía, que plasmamos en cada diseño, haciéndolo único y lleno de significado.</p>
            <a href="#" class="btn btn-hero" onclick="alert('¡La página de reservas estará disponible pronto!')">Reservar Cita</a>
        </div>
    </section>

    <!-- Servicios -->
    <section class="services" id="servicios">
        <div class="container">
            <h2 class="section-title">Nuestros Servicios</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mountain"></i>
                    </div>
                    <h3>Tatuajes Andinos</h3>
                    <p>Diseños únicos inspirados en la cosmogonía andina, la Chakana y símbolos ancestrales que conectan con la esencia de nuestra cultura milenaria.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-feather-alt"></i>
                    </div>
                    <h3>Tatuajes de Flora y Fauna</h3>
                    <p>Representaciones artísticas de la biodiversidad andina: cóndores, pumas, llamas y flores nativas que celebran la riqueza natural de nuestros Andes.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-hand-holding-medical"></i>
                    </div>
                    <h3>Piercings Profesionales</h3>
                    <p>Realizados con los más altos estándares de higiene y cuidado, utilizando materiales de primera calidad y técnicas profesionales.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección con textura especial -->
    <section class="texture-section">
        <div class="container">
            <div class="texture-content">
                <h2>Cada Línea Cuenta una Historia</h2>
                <p>En Noir Tattoo, no solo creamos tatuajes, creamos conexiones con tu esencia más profunda. Cada trazo es una celebración de la cultura andina, cada sombra una reverencia a nuestros ancestros. Nuestro arte trasciende la piel para convertirse en un símbolo de identidad y pertenencia.</p>
            </div>
        </div>
    </section>

    <!-- Galería -->
    <section class="gallery" id="galeria">
        <div class="container">
            <h2 class="section-title">Galería</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1590246815187-b6f1d-REMOVED-alt="Tatuaje andino 1">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1611501275019-9b5cda8dcc34?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tatuaje andino 2">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1590246815187-b6f1d7c6cc6d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tatuaje andino 3">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tatuaje andino 4">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1611501275019-9b5cda8dcc34?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tatuaje andino 5">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1590246815187-b6f1d7c6cc6d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tatuaje andino 6">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contacto">
        <div class="container">
            <div class="footer-content">
                <a href="#" class="footer-logo">NOIR TATTOO</a>
                <ul class="footer-links">
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#galeria">Galería</a></li>
                    <li><a href="#artistas">Artistas</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
                <p class="copyright">Calle San Andrés 218, Cusco - Perú | © <?php echo date('Y'); ?> Noir Tattoo. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Puedes añadir aquí cualquier funcionalidad JavaScript que necesites
        // o incluir archivos JS externos
    </script>
</body>
</html>
