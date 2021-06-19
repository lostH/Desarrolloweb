<!DOCTYPE html>
<html lang="Es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landpage</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="css/estilos.css"/>
</head>
<body>
    <header class="header" id="inicio">
        <img src="img/hamburger.svg" alt="menu" class="hamburger"/>
        <nav class="menu-navegacion">
            <a href="#inicio">Inicio</a>
            <a href="#servicio">Servicio</a>
            <a href="#portafolio">Portafolio</a>
            <a href="#expertos">Expertos</a>
            <a href="#contacto">Contacto</a>
        </nav>
        <div class="contenedor head">
            <h1>Convertimos tus sueños en realidad</h1>
            <p class="copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
    </header>
    <main>
        <section class="services contenedor" id="servicio">
            <h2 class="subtitulo">Nuestro Servicio</h2>
            <div class="contenedor-servicio">
                <img src="img/Designer _Isometric.svg" alt="">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service"><span class="number">1</span>Diseño web</h3>
                        <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam commodi consequuntur ab quam hic maiores libero a totam aperiam obcaecati.
                        </p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span>Diseño web</h3>
                        <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam commodi consequuntur ab quam hic maiores libero a totam aperiam obcaecati.
                        </p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span>Diseño web</h3>
                        <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam commodi consequuntur ab quam hic maiores libero a totam aperiam obcaecati.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="portafolio">
            <div class="contenedor">
                <h2 class="subtitulo">Galeria</h2>
                <div class="contenedor-galeria">
                    <img src="img/photo1.jpg" alt="" class="img-galeria"/>
                    <img src="img/photo2.jpg" alt=""class="img-galeria"/>
                    <img src="img/photo3.jpg" alt=""class="img-galeria"/>
                    <img src="img/photo4.jpg" alt=""class="img-galeria"/>

                </div>
            </div>
        </section>
        <!--         <section class="imagen-light">
            <img src="img/closelight.svg" alt="">
            <img src="" alt="" class="agregar-imgen">
        </section> -->
        <section class="contenedor" id="expertos">
            <h2 class="subtitulo">Expertos en:</h2>
            <section class="experts">
            <div class="cont-expert">
                    <img src="img/chart.svg" alt="" >
                    <h3 class="n-expert">Analitics</h3>
            </div>
            <div class="cont-expert">
                    <img src="img/seo.svg" alt="" >
                    <h3 class="n-expert">Seo</h3>
            </div>
            <div class="cont-expert">
                    <img src="img/Security.svg" alt="" >
                    <h3 class="n-expert">Security</h3>
            </div>
            
            </section>
        </section>
    </main>
    <footer id="contacto">
        <div class="contenedor footer-content">
            <div class="contact-us">
                <h2 class="brand">Henry design</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto sint quod doloremque explicabo maxime. Veniam cum eum soluta labore quia.</p>

            </div>
            <div class="social-media">
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-facebook' ></i>
                </a>
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-twitter' ></i>
                </a>
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-instagram'></i>
                </a>
            </div>
        </div>
    </footer>
    <script src="js/menu.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>