<?php

//require_once 'controller/ctr_master.php';
$navbar = "../../components/navbar.php";
$header = "../../components/header.php";
$footer = "../../components/footer.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/access-menu.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="stylesheet" href="../css/card-carrera.css">
    <link rel="stylesheet" href="../css/modelo-estudios.css">
    <link rel="stylesheet" href="../css/pilares-institucionales.css">
    <link rel="stylesheet" href="../css/becas.css">
    <link rel="stylesheet" href="../css/faq.css">
    <link rel="stylesheet" href="../css/footer.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="shortcut icon" href="../../src/img/favicon.ico" type="image/x-icon">
    <title>Universidad Tecnológica de León</title>
</head>

<body>

    <?php include $navbar ?>

    <br>

    <header>
        <section class="header-info">
            <h1 class="title-header">Movilidad <span class="text-highlight">UTL 2024</span></h1>
        </section>
        <section class="header-img">
            <img src="../../src/img/utl_2.webp" alt="">
        </section>
    </header>

    <br><br>

    <main>

        <h2 class="title-header">Programa <span class="text-highlight">Delfín</span></h2>

        <section class="section-content">
            <p>El Programa Delfín, se creó en 1995 con el objetivo fortalecer la cultura de colaboración entre las Instituciones de Educación Superior y Centros de Investigación integrantes del Programa, a través de la movilidad de profesores-investigadores, estudiantes y de la divulgación de productos científicos y tecnológicos.</p>
            <p>La UTL forma parte de las más de 250 universidades de alcance nacional e internacional que integran este proyecto.</p>
        </section>

        <h3 class="text-highlight">Objetivos</h3>
        <section class="section-content" id="becas-info">
            <img src="../../src/img/programa-delfin.jpeg" loading="lazy" alt="Programa Delfín">
            <div>
                <ol>
                    <li>Contribuir a la creación de una cultura científico-tecnológica por medio de actividades de divulgación para el conocimiento, aprovechamiento y valoración de las tareas de investigación y posgrado que realizan las IES del Pacífico.</li>
                    <li>Mediante la vinculación de estudiantes destacados con investigadores de los posgrados de las IES participantes, se contribuirá a la formación de cuadros académicos de alto nivel y con ello consolidar la investigación y el fortalecimiento de los programas de posgrado de las Instituciones del Pacífico.</li>
                    <li>Fortalecer a través de la divulgación mediante estancias de profesores y/o investigadores, realizando cursos, talleres, conferencias y otras actividades con valor curricular.</li>
                    <li>Crear un sistema editorial que dé a conocer el producto científico-tecnológico-académico de las IES del Programa Delfín y con ello fortalecer el posgrado y la investigación.</li>
                </ol>
                <p>Quieres conocer más del programa y te gustaría algún día realizar proyectos de investigación de impacto para tu formación académica, visita el sitio: <a href="https://www.programadelfin.org.mx/" target="_blank">https://www.programadelfin.org.mx/</a></p>
            </div>
        </section>

    </main>

    <br>

    <?php include $footer ?>

</body>

<script src="../js/jquery-2.1.4.min.js"></script>
<script src="../js/becas-list.js"></script>
<script src="../js/faq.js"></script>

</html>
