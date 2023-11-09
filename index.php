<?php

// Conexión a la DB
$conn = mysqli_connect("localhost", "root", "", "cursos_pi");

// Consulta para obtener todos los cursos
$sql = "SELECT * FROM cursos";
$resultado = mysqli_query($conn, $sql);
$cursos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

// Ordenar cursos aleatoriamente 
shuffle($cursos);

// Tomar solo los primeros 3 cursos
$cursos_aleatorios = array_slice($cursos, 0, 3);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Agrega estos estilos en la sección <head> de tu documento HTML -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="./css/style_index.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    h1 {
      color: bisque; /* Cambia el color a azul */
    }
    .container-card {
    width: 100%;
    max-width: 1080px; /* Cambiado de 1100px para que coincida con el estilo */
    margin: auto;
    display: flex;
    flex-wrap: wrap; /* Agregado flex-wrap para permitir que las tarjetas se ajusten en pantallas pequeñas */
}

.title-cards {
    width: 100%;
    max-width: 1080px;
    margin: auto;
    padding: 20px;
    margin-top: 20px;
    text-align: center;
    color: #7a7a7a;
}

.card {
    width: calc(33.33% - 40px); /* Cambiado para ajustar a tres tarjetas por fila */
    margin: 20px;
    border-radius: 6px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.2);
    transition: all 400ms ease-out;
    cursor: pointer;
    text-align: center;
}

.card:hover {
    box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.4);
    transform: translateY(-3%);
}

.card img {
    width: 100%;
    height: 210px;
}

.card .contenido-card {
    padding: 15px;
}

.card .contenido-card h3 {
    margin-bottom: 15px;
    color: #7a7a7a;
    font-size: 1.5rem; /* Cambiado el tamaño de fuente */
}

.card .contenido-card p {
    line-height: 1.6;
    color: #6a6a6a;
    font-size: 14px;
    margin-bottom: 10px; /* Cambiado el margen inferior */
}

.card .contenido-card a {
    display: inline-block;
    padding: 10px;
    margin-top: 10px;
    text-decoration: none;
    color: #2fb4cc;
    border: 1px solid #2fb4cc;
    border-radius: 4px;
    transition: all 400ms ease;
    margin-bottom: 5px;
}

.card .contenido-card a:hover {
    background: #2fb4cc;
    color: #fff;
}


</style>
</head>

<body>
    <header>
        <!-- Barra de navegación -->
        <nav>
            <ul>
                <div class="logo">
                    <h1>LearnConnect</h1>
                </div>
                <div class="enlaces">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#cursos">Cursos</a></li>
                    <li><a href="#acerca">Acerca de nosotros</a></li>
                    
                </div>
                <div class="container-input">
                    <form action="search.php">
                        <input type="text" placeholder="Buscar" name="q" class="input">
                        <svg fill="#000000" width="20px" height="20px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                            <path d="M790.588 1468.235c-373.722 0-677.647-303.924-677.647-677.647 0-373.722 303.925-677.647 677.647-677.647 373.723 0 677.647 303.925 677.647 677.647 0 373.723-303.924 677.647-677.647 677.647Zm596.781-160.715c120.396-138.692 193.807-319.285 193.807-516.932C1581.176 354.748 1226.428 0 790.588 0S0 354.748 0 790.588s354.748 790.588 790.588 790.588c197.647 0 378.24-73.411 516.932-193.807l516.028 516.142 79.963-79.963-516.142-516.028Z" fill-rule="evenodd"></path>
                        </svg>
                    </form>
</div>



                <div class="sesion">
                    <li><a href="login.php">Iniciar Sesión</a></li>
                    <li><a href="register.php" class="registro">Registrarse</a></li>
                </div>
            </ul>
        </nav>
    </header>

    <div class="acerca">
        <div class="texto" data-aos="fade-up" data-aos-duration="1600">
            <h1>Bienvenidos a LearnConect</h1>
            <br>
            <p>Tu puerta de entrada al emocionante mundo del aprendizaje en
                línea.
                <br><br>
                En un
                mundo en constante evolución, la adquisición de conocimientos es esencial para alcanzar tus metas y
                aspiraciones.
                <br><br><br><br>
            <div class="texto_inicio">
                <p>Inicia ahora mismo.</p>
                <a href="login.php">Iniciar Sesión</a>
            </div>
            </p>
        </div>
        <div class="fondo">
            <div class="imagen1">
                <img src="./img/paginas.png" alt="" data-aos="fade-left" data-aos-duration="2200">
            </div>
            <div class="imagen2">
                <img src="./img/maceta.png" alt="" class="maceta" data-aos="fade-up" data-aos-duration="2100">
                <img src="./img/computadora.png" alt="" data-aos="fade-up" data-aos-duration="1800">
            </div>
        </div>
    </div>

    <div class="info" id="acerca">
        <div class="texto">
            <br>
            <br>
            <h1 data-aos="fade-right" data-aos-duration="1200">¡Acerca de nosotros!</h1>
            <br><br>
            <p data-aos="fade-right" data-aos-duration="1400">En LearnConect, creemos en el poder de la educación como
                motor de cambio y crecimiento. Fundada por un
                equipo apasionado de educadores y expertos en tecnología, nuestra plataforma se ha convertido en un faro
                de conocimiento y desarrollo personal. Nuestra visión es simple: hacer que la educación sea accesible
                para todos. Ya sea que desees adquirir nuevas habilidades, explorar pasiones, o avanzar en tu carrera,
                estamos aquí para brindarte la guía y el apoyo que necesitas.</p>
            <br>
            <p data-aos="fade-right" data-aos-duration="1600">Lo que nos distingue es nuestro compromiso con la calidad
                y la diversidad. Colaboramos con instructores
                excepcionales de todo el mundo, cada uno experto en su campo, para ofrecerte una amplia gama de cursos
                que se adaptan a tus necesidades e intereses. Además, hemos diseñado una plataforma intuitiva y fácil de
                usar que te permite aprender a tu propio ritmo.</p>
            <br>
            <p data-aos="fade-right" data-aos-duration="1800">En LearnConect, tu éxito es nuestra prioridad. Nos
                enorgullece ser parte de tu viaje de aprendizaje y
                estamos emocionados de ser testigos de tu crecimiento y logros. Únete a nosotros en este emocionante
                viaje de descubrimiento y desarrollo. ¡Bienvenidos a LearnConect!
           </p>
           <br>
           <br>
        </div>
        <div class="fondo">
        </div>
    </div>

    <div class="sugerencias" id="cursos">

        <div class="titulo">
            <div class="texto">
                <h1 data-aos="fade-right" data-aos-duration="1200">Sugerencias de Cursos</h1>
                <p data-aos="fade-right" data-aos-duration="1500">¿No sabes por dónde empezar? Aquí te dejamos algunas sugerencias de cursos que te pueden interesar.
                </p>
            </div>
        </div>
        <div class="title-cards">
    <h2>Servicios que Ofrecemos</h2>
</div>
<div class="container-card">
    <?php
    // Iterar cursos aleatorios
    foreach ($cursos_aleatorios as $curso) {
        // Asegurarse de que la variable $imagen_portada se corresponda con la columna en la base de datos que almacena la URL de la imagen de portada
        $imagen_portada = $curso['imagen_portada'];

        echo '<div class="card">';
        echo '<figure>';
        echo "<img src='{$imagen_portada}'>"; // Aquí muestra la imagen correspondiente
        echo '</figure>';
        echo '<div class="contenido-card">';
        echo "<h3>{$curso['nombre']}</h3>";
        echo "<p>{$curso['descripcion']}</p>";
        echo '<a href="#">Leer Más</a>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>


    </div>



    <footer>
        <div class="redes-sociales">
            <a href=""><ion-icon name="logo-facebook"></ion-icon></a>
            <a href=""><ion-icon name="logo-twitter"></ion-icon></a>
            <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
        </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>