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
            <h1 class="title-header">Trámites <span class="text-highlight">escolares</span></h1>
        </section>
        <section class="header-img">
            <img src="../../src/img/utl_4.webp" alt="">
        </section>
    </header>

    <br><br>

    <main>

        <section class="section-content">
            <section class="buttons-section-content">
                <a href="#constancias" class="btn-primary-utl-to-section"><span>CONSTANCIAS</span></a>
                <a href="#credencial-escolar" class="btn-primary-utl-to-section"><span>CREDENCIAL ESCOLAR</span></a>
                <a href="#tramite-imss" class="btn-primary-utl-to-section"><span>TRAMITE IMSS</span></a>
            </section>
        </section>

        <h3 id="constancias" class="primary-title">Solicitud de constancias</h3>

        <section class="card-utl">
            <div class="left-column" id="constancias-pasos">

            </div>
            <div class="vl"></div>
            <div class="right-column" id="info">
                <ul id="constancias-list">
                </ul>
            </div>
        </section>


        <h3 id="credencial-escolar" class="primary-title">Reposición de credencial escolar</h3>

        <section class="section-content">
            <p>Si extraviaste tu credencial de alumno, es tu responsabilidad reponerla lo antes posible.</p>
            <p>Recuerda que la credencial de alumno es necesaria para acceder a los laboratorios y otros servicios que brinda la universidad.</p>
            <ul>
                <li>Realiza el pago de reposición de credencial, ingresando a tu cuenta de SITO en 1-Reinscripción y Referencias de Pago -> 3-Otras Referencias -> Otros Pagos -> Reposición de credencial.</li>
                <li>Acude a Servicios Estudiantiles a solicitar la elaboración de tu credencial</li>
                <li>Recolecta las firmas y sellos de los diferentes departamentos en la Universidad en un formato proporcionado por Servicios Estudiantiles.</li>
                <li>Entrega el formato en Servicios Estudiantiles.</li>
                <li>En Servicios Estudiantiles te indicarán la fecha de entrega de tu nueva credencial.</li>
            </ul>
        </section>


        <h3 id="tramite-imss" class="primary-title">Trámite IMSS</h3>

        <section class="card-utl">
            <div class="left-column" id="imss-pasos">

            </div>
            <div class="vl"></div>
            <div class="right-column" id="info">
                <ul id="imss-list">
                </ul>
            </div>
        </section>

    </main>

    <br>

    <?php include $footer ?>

</body>

<script src="../js/jquery-2.1.4.min.js"></script>
<script src="../js/tramites-escolares.js"></script>

</html>
