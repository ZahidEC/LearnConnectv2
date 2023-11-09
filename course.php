<?php
session_start(); // Iniciar la sesión
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso</title>

    <link rel="stylesheet" href="./src/style_course.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        /* Crear variables para colores */
        :root {
            --color_primario: #16181f;
            --color_secundario: #5f7174;
            --color_terciario: #a5e66a;
            --color_cuaternario: #00a5c0;
            --color_quintenario: #32d9cb;
            --color__sexto: #e4d1c2;
        }

        html {
            scroll-behavior: smooth;
        }

        /* Estilos para el header */
        header {
            width: 100%;
            height: 75px;
            background-color: var(--color_primario);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        header nav h1{
            color: white;
        }

        header nav {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 35px;
        }

        header nav ul {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 100%;
            gap: 10%;
        }

        header nav ul img {
            width: 100px;
            height: 100px;
        }

        header nav ul .enlaces {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        header nav ul .sesion {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            gap: 10%;
        }

        header nav ul .sesion li {
            color: white;
        }

        header nav ul li {
            list-style: none;
            margin: 0 10px;
        }

        header nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 1.2rem;
            font-weight: 100;
            transition: all 0.3s ease;
        }

        header nav ul li a:hover {
            scale: 1.1;
            font-size: 1.5rem;
        }

        header nav ul li a.registro {
            background-color: var(--color_cuaternario);
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            font-weight: 500;
        }

        /* Seccion de main */
        main {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 0 35px;
        }

        /* Seccion de lecciones */
        main .lecciones_curso {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 0 35px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-top: 50px;
            border-radius: 10px;
            padding-bottom: 30px;
        }

        main .lecciones_curso .titulo {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        main .lecciones_curso .titulo h2 {
            font-size: 2rem;
            color: var(--color_primario);
        }

        main .lecciones_curso .titulo h2 span {
            font-size: 2rem;
            color: var(--color_cuaternario);
        }

        main .lecciones_curso .leccion {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 0 35px;
            margin-top: 50px;
        }
        main .lecciones_curso .leccion div {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 0 35px;
            margin-top: 50px;
            border-radius: 10px;
            color: black;
        }

        main .lecciones_curso .leccion div h3 {
            font-size: 1.5rem;
            color: gray;
            
        }

        main .lecciones_curso .leccion div p {
            color: black;
        }

        /* Seccion de examenes */

        main .examenes_curso {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 0 35px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-top: 50px;
            border-radius: 10px;
            padding-bottom: 30px;
        }

        main .examenes_curso .titulo {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        main .examenes_curso .titulo h2 {
            font-size: 2rem;
            color: var(--color_primario);
        }

        main .examenes_curso .titulo h2 span {
            font-size: 2rem;
            color: var(--color_cuaternario);
        }

        main .examenes_curso .examenes {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 0 35px;
            margin-top: 50px;
        }

        main .examenes_curso .examenes h1 {
            font-size: 1.5rem;
            color: var(--color_primario);
        }

        main .examenes_curso .examenes h2 {
            font-size: 1.2rem;
            color: var(--color_primario);
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
                <div class="sesion">
                    <li>Perfil de
                        <?php echo $_SESSION["nombre"]; ?>
                    </li>
                    <li><a href="login.php">Cerrar Sesión</a></li>
                </div>
            </ul>
        </nav>
    </header>

    <main>
        <div class="lecciones_curso">
            <div class="titulo">
                <h2>Lecci<span>ones</span></h2>
            </div>
            <div class="leccion">
                <?php

                // Obtener el ID del curso
                $curso_id = $_GET['curso_id'];

                // Conectar a la BD
                $conn = mysqli_connect("localhost", "root", "", "cursos_pi");

                // Consulta para obtener las lecciones
                $sql = "SELECT * FROM lecciones WHERE curso_id = $curso_id";
                $result = mysqli_query($conn, $sql);

                // Mostrar lecciones 
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div>";
                    echo "<h3>" . $row['titulo'] . "</h3>";
                    echo $row['contenido'];
                    echo "</div>";
                }


                ?>

            </div>
        </div>

        <div class="examenes_curso">
            <div class="titulo">
                <h2>Exám<span>enes</span></h2>
            </div>
            <div class="examenes">
                <?php
                // Establece la conexión a la base de datos (debes configurar tus propias credenciales)
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "cursos_pi";

                $conexion = mysqli_connect($servername, $username, $password, $database);

                // Verifica la conexión a la base de datos
                if (!$conexion) {
                    die("Error en la conexión a la base de datos: " . mysqli_connect_error());
                }

                // Obtiene el ID del curso desde la URL
                if (isset($_GET['curso_id'])) {
                    $curso_id = $_GET['curso_id'];

                    // Consulta para obtener el nombre del curso
                    $query_nombre_curso = "SELECT nombre FROM cursos WHERE curso_id = $curso_id";
                    $result_nombre_curso = mysqli_query($conexion, $query_nombre_curso);

                    // Verifica si se encontró el nombre del curso
                    if ($row_nombre_curso = mysqli_fetch_assoc($result_nombre_curso)) {
                        $nombre_curso = $row_nombre_curso['nombre'];
                        echo '<h1>Curso: ' . $nombre_curso . '</h1>';
                    }

                    // Consulta para recuperar las pruebas relacionadas con el curso
                    $query_pruebas = "SELECT prueba_id, nombre FROM pruebas WHERE curso_id = $curso_id";
                    $result_pruebas = mysqli_query($conexion, $query_pruebas);

                    // Verifica si se encontraron pruebas
                    if (mysqli_num_rows($result_pruebas) > 0) {
                        while ($row_prueba = mysqli_fetch_assoc($result_pruebas)) {
                            $prueba_id = $row_prueba['prueba_id'];
                            $nombre_prueba = $row_prueba['nombre'];

                            echo '<h2>Prueba: ' . $nombre_prueba . '</h2>';
                            echo '<form method="post" action="./src/procesar_respuestas.php">';

                            // Consulta para recuperar las preguntas y opciones relacionadas con esta prueba
                            $query_preguntas = "SELECT p.pregunta_id, p.enunciado, r.respuesta, r.es_correcta
                                        FROM preguntas p
                                        INNER JOIN respuestas r ON p.pregunta_id = r.pregunta_id
                                        WHERE p.curso_id = $prueba_id";
                            $result_preguntas = mysqli_query($conexion, $query_preguntas);

                            // Verifica si se encontraron preguntas
                            if (mysqli_num_rows($result_preguntas) > 0) {
                                $current_question_id = null;

                                while ($row_pregunta = mysqli_fetch_assoc($result_preguntas)) {
                                    $pregunta_id = $row_pregunta['pregunta_id'];
                                    $enunciado = $row_pregunta['enunciado'];
                                    $respuesta = $row_pregunta['respuesta'];
                                    $es_correcta = $row_pregunta['es_correcta'];

                                    if ($pregunta_id !== $current_question_id) {
                                        if ($current_question_id !== null) {
                                            echo '</div>';
                                        }
                                        echo '<div>';
                                        echo '<p>' . $enunciado . '</p>';
                                        $current_question_id = $pregunta_id;
                                    }

                                    echo '<input type="radio" name="respuesta_' . $pregunta_id . '" value="' . $respuesta . '">' . $respuesta;
                                    echo '<input type="hidden" name="correcta_' . $pregunta_id . '" value="' . $es_correcta . '">';
                                }

                                echo '</div>';
                                echo '<button type="submit" name="submit">Enviar respuestas</button>';
                                echo '</form>';
                            } else {
                                echo 'No se encontraron preguntas para esta prueba.';
                            }
                        }
                    } else {
                        echo 'No se encontraron pruebas para este curso.';
                    }
                } else {
                    echo 'ID del curso no especificado en la URL.';
                }

                // Cierra la conexión a la base de datos
                mysqli_close($conexion);
                ?>
            </div>
        </div>

    </main>


</body>

</html>