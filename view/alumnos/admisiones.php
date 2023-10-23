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
    <link rel="stylesheet" href="../css/faq.css">
    <link rel="stylesheet" href="../css/footer.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.8/glider.css" integrity="sha512-xcz2kgNDovRs9/wYWii2XSBEDlpaTq99iewiGN3PR/pNnPaSDiw6wHpXU0kFyonevdVj/MkeesxMII8sgolFCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="shortcut icon" href="../../src/img/favicon.ico" type="image/x-icon">
    <title>Universidad Tecnológica de León</title>
</head>

<body>

    <?php include $navbar ?>

    <br>

    <header>
        <section class="header-info">
            <h1 class="title-header">Proceso de admisión <span class="text-highlight">2024</span></h1>
            <a href="#carreras" class="btn-primary-utl"> <i class='bx bx-right-arrow-alt'></i> Aplicar</a>
        </section>
        <section class="header-img">
            <img src="https://images.pexels.com/photos/1438072/pexels-photo-1438072.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        </section>
    </header>

    <br><br>

    <main>

        <section id="proceso-admision" class="card-utl">
            <div class="left-column">
                <button id="btn-tsu-list">
                    <i class='bx bxs-graduation'></i>
                    <div>
                        <h3>Carreras TSU</h3>
                        <p>Técnico Superior Universitario</p>
                    </div>
                </button>
                <button id="btn-ing-lic-list">
                    <i class='bx bxs-hard-hat'></i>
                    <div>
                        <h3>Carreras ING/LIC</h3>
                        <p>Ingenierías y Licenciaturas</p>
                    </div>
                </button>
            </div>
            <div class="vl"></div>
            <div class="right-column" id="info">
                <ul id="carreras-list">
                </ul>
            </div>
        </section>

    </main>

    <br>

    <?php include $footer ?>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.8/glider.min.js" integrity="sha512-AZURF+lGBgrV0WM7dsCFwaQEltUV5964wxMv+TSzbb6G1/Poa9sFxaCed8l8CcFRTiP7FsCgCyOm/kf1LARyxA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../js/descripcion-carrera.js"></script>

</html>
