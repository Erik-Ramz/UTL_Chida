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
            <h1 class="title-header">Proceso de admisión <span class="text-highlight">2024</span></h1>
            <a href="#proceso-admision" class="btn-primary-utl"> <i class='bx bx-right-arrow-alt'></i> Aplicar</a>
        </section>
        <section class="header-img">
            <img src="../../src/img/utl_1.webp" alt="">
        </section>
    </header>

    <br><br>

    <main>

        <section id="proceso-admision" class="card-utl">
            <div class="left-column">
                <button id="btn-tsu-list">
                    <i class='bx bxs-graduation'></i>
                    <div>
                        <h3>Admisiones TSU</h3>
                        <p>Técnico Superior Universitario</p>
                    </div>
                </button>
                <button id="btn-ing-lic-list">
                    <i class='bx bxs-hard-hat' style='color: #2196F3'></i>
                    <div>
                        <h3>Admisiones ING/LIC</h3>
                        <p>Ingenierías y Licenciaturas</p>
                    </div>
                </button>
            </div>
            <div class="vl"></div>
            <div class="right-column" id="info">
                <ul id="admisiones-list">
                </ul>
            </div>
        </section>

        <section class="banner">
            <h2>CONOCE NUESTRAS CARRERAS</h2>
            <a href="../../index.php#carreras" class="btn-secondary-utl"> <i class='bx bx-right-arrow-alt'></i> OFERTA</a>
        </section>

    </main>

    <br>

    <?php include $footer ?>

</body>

<script src="../js/jquery-2.1.4.min.js"></script>
<script src="../js/faq.js"></script>
<script src="../js/procesoAdmision.js"></script>

</html>
