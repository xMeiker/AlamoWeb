<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Directorio de Lugares</title>

      <!-- enlace css deslizador  -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

      <!-- fuente impresionante enlace cdn  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!-- enlace de archivo css personalizado  -->
      <link rel="stylesheet" href="css/directory.css">

      <!-- visualizar favicon para la pagina web desde distintos dispositivos -->
      <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
      <link rel="manifest" href="/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
   </head>
   <body>
      
      <!-- comienza la sección del encabezado  -->

      <section class="header">

         <!-- Enlace con la imagen PNG como logo -->
         <a href="home.php" class="logo">
            <!-- Imagen PNG -->
            <img src="images/alamoicon.png" alt="AlamoIcon">
         </a>

         <div class="menu">
            <img src="images/alamomenu.png" alt="AlamoMenu">
            <div class="menu-content">
                  <a href="home.php" class="menu-item">Inicio</a>
                  <a href="directory.php" class="menu-item">Directorio</a>
                  <a href="activities.php" class="menu-item">Actividades</a>
                  <a href="blog.php" class="menu-item">Blog de Viajes</a>
            </div>
         </div>
         <div id="menu-btn" class="fas fa-bars"></div>

      </section>

      <!-- termina la sección del encabezado -->
      
      <!-- comienza la sección de directorio  -->

      <div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
         <h1>Directorio de Lugares Turisticos</h1>
      </div>

      <div class="filter">
         <input type="text" id="busqueda" placeholder="Buscar lugar...">
         <select class="categoria-select" onchange="filtrarLugares(this.value)">>
                <option value="Todos">Todos</option>
                <option value="Cines">Cines</option>
                <option value="Hoteles">Hoteles</option>
                <option value="Parques">Parques</option>
                <option value="Plazas">Plazas</option>
                <option value="Restaurantes">Restaurantes</option>
                <option value="Mercados">Super Mercados</option>
                <!-- Agrega más opciones de filtrado aquí -->
            </select>
      </div>

      <!-- inicio sobre la sección de lugares  --> 
      <!-- parques  -->     
      <main>
        <div class="lugar" data-categoria="Parques">
            <img src="images/parque1.png" alt="parque1">
            <h2>Parque Morelos</h2>
            <p>Dedica una tarde para descubrir los aspectos más característicos de este enorme parque, 
               donde encontrarás desde espectáculos de marionetas y un zoológico hasta embarcaciones y una alberca.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/parque1.png" alt="parque2">
            <h2>Parque Teniente Guerrero</h2>
            <p>Un parque histórico con áreas verdes, esculturas y fuentes, ideal para dar un paseo relajante y disfrutar del ambiente tranquilo en el corazón de la ciudad.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/parque1.png" alt="parque3">
            <h2>Parque de la Amistad</h2>
            <p>Este parque representa la amistad entre México y Japón, con jardines japoneses, esculturas y espacios para relajarse y disfrutar del entorno.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/parque1.png" alt="parque4">
            <h2>Parque Nacional Constitución de 1857</h2>
            <p>Este parque nacional ofrece una variedad de senderos que serpentean a través de bosques de pinos y áreas escénicas. 
               El sendero más popular es el que conduce al Pico El Águila, ofreciendo vistas panorámicas impresionantes. </p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/parque1.png" alt="parque5">
            <h2>Parque Teresita Paramo</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/parque1.png" alt="parque6">
            <h2>Parque Buena Vista</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/parque1.png" alt="parque7">
            <h2>Parque el Valle</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/parque1.png" alt="parque8">
            <h2>Parque de las Americas</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/parque1.png" alt="parque9">
            <h2>Parque de la Espiritualidad</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/parque1.png" alt="parque10">
            <h2>Mundo Divertido</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
      <!-- parques  -->  
      
      <!-- cines  -->
        <div class="lugar" data-categoria="Cines">
            <img src="images/parque1.png" alt="cine1">
            <h2>Cinemex Mundo Divertido</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/parque1.png" alt="cine2">
            <h2>Cinemex Peninsula</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/parque1.png" alt="cine3">
            <h2>Cinemex Pavilion</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/parque1.png" alt="cine4">
            <h2>Cinemex Macroplaza</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/parque1.png" alt="cine5">
            <h2>Cinemex Loma Bonita</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/parque1.png" alt="cine6">
            <h2>Cinemex Plaza Alameda</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/parque1.png" alt="cine7">
            <h2>Cinepolis Plaza Rio</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/parque1.png" alt="cine8">
            <h2>Cinemex Plaza Minarete</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/parque1.png" alt="cine9">
            <h2>Cinemex Pacifico</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/parque1.png" alt="cine10">
            <h2>Cinepolis Plaza Monarca</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
      <!-- cines  -->

      <!-- hoteles  -->
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/parque1.png" alt="hotel1">
            <h2>Hotel Extended Suites Tijuana Macroplaza</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/parque1.png" alt="hotel2">
            <h2>Hotel Jardin</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/parque1.png" alt="hotel3">
            <h2>Hotel Astor</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/parque1.png" alt="hotel4">
            <h2>Baja Inn La Mesa</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/parque1.png" alt="hotel5">
            <h2>City Express Junior by Marriott Tijuana Otay</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/parque1.png" alt="hotel6">
            <h2>Sleep Inn Tijuana</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/parque1.png" alt="hotel7">
            <h2>Gamma Tijuana</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/parque1.png" alt="hotel8">
            <h2>One Tijuana Otay</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/parque1.png" alt="hotel9">
            <h2>City Express</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/parque1.png" alt="hotel10">
            <h2>Hotel Frontiere</h2>
            <p></p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
      <!-- hoteles  -->

      <!-- plazas  -->

      <!-- plazas  -->
        <div class="lugar" data-categoria="Cines">
            <img src="images/trompo1.png" alt="trompo1">
            <h2>El Trompo</h2>
            <p>Comprueba que aprender puede ser divertido en este complejo para toda la familia con cientos de juegos que 
               muestran el impacto de la ciencia y la tecnología modernas.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/cecut1.png" alt="cecut1">
            <h2>Cecut</h2>
            <p>Lleva a tu familia a descubrir el rico pasado de las Californias y a visitar exposiciones de arte, 
               jardines botánicos y un cine IMAX con forma de cúpula.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/plazario.jpg" alt="plaza rio">
            <h2>Plaza Rio Tijuana</h2>
            <p>Este centro comercial tiene tiendas como Sephora, Apple Store, Starbucks y un cine enorme.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/avrevolucion.jpg" alt="avrevolucion">
            <h2>Avenida Revolución</h2>
            <p>Es un edificio muy bonito e histórico!!! antiguamente era un centro deportivo de Pelota vasca (Jai alai). </p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/mullme.jpg" alt="mullme">
            <h2>Mullme</h2>
            <p>En el Museo de la Lucha Libre Mexicana se exhibe una gran colección privada de objetos relacionados al mundo de la Lucha Libre, 
               con más de 9,000 artículos entre máscaras originales, tazas, cintos de campeonato, fotografías, llaveros, alcancías, historietas, 
               luchadores de plástico en diferentes poses y tamaños, los diferentes tipos de revistas especializadas al deporte del pancracio, y más.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/mercado.jpg" alt="mercado">
            <h2>Mercado El Popo</h2>
            <p>Hay esponjas naturales, prensas de tortilla de madera, piedras para moler molcajete, piedra pómez y mucho más.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/catedral.jpg" alt="catedral">
            <h2>Catedral de Nuestra Señora de Guadalupe</h2>
            <p>Esta es una iglesia católica clásica en el medio de Tijuana que atiende las necesidades de los habitantes locales.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/estadio.jpg" alt="estadio">
            <h2>Estadio Caliente</h2>
            <p>Dicen que la afición a un equipo lo es todo, y los Xolos tienen eso, una afición que muere por ellos no importa que ganen o pierdan.
               Los partidos siempre son en la noche, pero si quieres vivir la fiesta de verdad, llega desde temprano, abre la cajuela de tu coche, saca el asador y 
               las cervezas y prepara tu carne, eso si, no olvides invitar a un monton de amigos. El estacionamiento es una fiesta por si misma.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/casino.jpg" alt="casino">
            <h2>Casino Caliente</h2>
            <p>Un casino de una franquicia muy publicitada que al encontrarse en la Avenida Revolución es una opción para divertirse .
               Ambiente propio de un casino y para jugar al entrar pides tu tarjeta.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
      </main>
      <!-- termino sobre la sección de lugares  -->

      <!-- comienza la sección de pie de página  -->

      <section class="footer">

         <div class="box-container">

            <div class="box">
               <h3>Enlaces</h3>
               <a href="home.php"> <i class="fas fa-angle-right"></i> Inicio</a>
               <a href="directory.php"> <i class="fas fa-angle-right"></i> Directorio </a>
               <a href="activities.php"> <i class="fas fa-angle-right"></i> Actividades </a>
               <a href="blog.php"> <i class="fas fa-angle-right"></i> Blog de Viajes</a>
            </div>

            <div class="box">
               <h3>Sobre Nosotros</h3>
               <!--<a href="#"> <i class="fas fa-angle-right"></i> Preguntas</a>
               <a href="#"> <i class="fas fa-angle-right"></i> Acerca de</a>-->
               <a href="#"> <i class="fas fa-angle-right"></i> Politica de privacidad</a>
               <a href="#"> <i class="fas fa-angle-right"></i> Terminos de uso</a>
            </div>

            <div class="box">
               <h3>Contactos</h3>
               <a href="#"> <i class="fas fa-phone"></i> +52 (664) 214 99 81 </a>
               <a href="#"> <i class="fas fa-phone"></i> +52 (664) 873 84 93 </a>
               <a href="#"> <i class="fas fa-envelope"></i> omar.garcia201@tectijuana.edu.mx </a>
               <a href="#"> <i class="fas fa-envelope"></i> jesus.saguilan201@tectijuana.edu.mx </a>
               <a href="#"> <i class="fas fa-envelope"></i> maria.ramos201@tectijuana.edu.mx </a>
               <a href="#"> <i class="fas fa-map"></i> Tijuana, Baja californa, Mexico</a>
            </div>

            <div class="box">
               <h3>Redes Sociales</h3>
               <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
               <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
               <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
               <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
            </div>

         </div>

         <div class="credit"> Creado por <span>Private Studio</span> | ¡Todos los derechos reservados! </div>

      </section>

      <!-- termina la sección de pie de página -->

      <!-- enlace js deslizador  -->
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
      
      <!-- enlace de archivo js personalizado  -->
      <script src="js/script.js"></script>
      <script src="js/filtrar.js"></script>
      <script src="js/busqueda.js"></script>
   </body>
</html>