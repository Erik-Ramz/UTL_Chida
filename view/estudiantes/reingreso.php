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
            <h1 class="title-header">Proceso de <span class="text-highlight">reingreso</span></h1>
        </section>
        <section class="header-img">
            <img src="../../src/img/utl_2.webp" alt="">
        </section>
    </header>

    <br><br>

    <main>

        <h3 class="primary-title">Reincorporación por baja</h3>

        <section class="card-utl">
            <div class="left-column" id="por-baja-pasos">

            </div>
            <div class="vl"></div>
            <div class="right-column" id="info">
                <ul id="por-baja-list">
                </ul>
            </div>
        </section>

        <h3 class="primary-title">Cambio de otra Universidad Tecnológica</h3>

        <section class="card-utl">
            <div class="left-column" id="cambiout-pasos">

            </div>
            <div class="vl"></div>
            <div class="right-column" id="info">
                <ul id="cambiout-list">
                </ul>
            </div>
        </section>

    </main>

    <br>

    <?php include $footer ?>

</body>

<script src="../js/jquery-2.1.4.min.js"></script>
<script src="../js/reingreso.js"></script>
<script src="../js/faq.js"></script>

</html>
