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
            <h1 class="title-header">Proceso de <span class="text-highlight">estadías 2024</span></h1>
        </section>
        <section class="header-img">
            <img src="../../src/img/utl_4.webp" alt="">
        </section>
    </header>

    <br><br>

    <main>

        <section class="section-content" id="becas-info">
            <div>
                <p>Es la práctica profesional que realizas como estudiante de TSU o Ingeniería, donde aplicas todos tus conocimientos adquiridos durante tu formación académica, con la elaboración de un proyecto que satisfaga las necesidades de la Empresa. Este proyecto se desarrolla y culmina en un periodo de 13 semanas.</p>
                <p>En la Estadía:</p>
                <ul>
                    <li>Como estudiante eres guiado por un/a Asesor/a Académico/a (docente de tiempo completo y experto en el área) y un/a Asesor/a Organizacional (persona designada por la organización para tu seguimiento).</li>
                    <li>La organización debe de proporcionarte el espacio, material y equipo necesario para el desarrollo de tu proyecto.</li>
                    <li>Debes contar con algún tipo de Seguridad Social y mantenerlo vigente durante el periodo de Estadía.</li>
                </ul>
            </div>
        </section>

        <section class="section-content">
            <div class="faq-card">
                <div class="faq-content">
                    <p>Pregunta 1</p>
                    <button class="btn-primary-icon-utl toggleButton"><i class="bx bx-chevrons-down"></i></button>
                </div>
                <div class="additional-info"></div>
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
