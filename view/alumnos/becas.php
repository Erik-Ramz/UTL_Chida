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
            <h1 class="title-header">Oferta de becas <span class="text-highlight">2024</span></h1>
            <a href="#proceso-admision" class="btn-primary-utl"> <i class='bx bx-right-arrow-alt'></i> Aplicar</a>
        </section>
        <section class="header-img">
            <img src="../../src/img/utl_2.webp" alt="">
        </section>
    </header>

    <br><br>

    <main>

        <section class="section-content" id="becas-info">
            <img src="../../src/img/leones-becas.png" alt="">
            <div>
                <p>La Universidad Tecnológica de León, cuenta con un Sistema de Becas Internas, así mismo pone a disposición del alumnado diferentes Programas de Becas Externas, apoyos económicos y en especie; que en conjunto con diversos organismos externos, tienen como objetivo brindar apoyo al estudiantado para que pueda continuar con su preparación académica, aminorizando los factores económicos de deserción, para que las cuestiones financieras no sean una limitante para finalizar sus estudios.</p>
                <p>Notas importantes</p>
                <ul>
                    <li>Revisar puntualmente el proceso publicado en cada una de las convocatorias "ABIERTAS" en las cuales se desea participar, dando clic en el boton verde.</li>
                    <li>Cumplir correctamente con todos los requisitos y lineamientos que se presentan en la convocatoria.</li>
                    <li>Mantener actualizada la información personal de SITO.</li>
                </ul>
            </div>
        </section>

        <section id="proceso-admision" class="card-utl">
            <div class="left-column">
                <button id="btn-becas-internas">
                    <i class='bx bxs-graduation'></i>
                    <div>
                        <h3>Becas Internas</h3>
                    </div>
                </button>
                <button id="btn-becas-externas">
                    <i class='bx bx-map-alt' style='color: #2196F3'></i>
                    <div>
                        <h3>Becas Externas</h3>
                    </div>
                </button>
                <button id="btn-servicio-becario">
                    <i class='bx bxs-hard-hat' style='color: #E57B25'></i>
                    <div>
                        <h3>Servicio Becario</h3>
                    </div>
                </button>
            </div>
            <div class="vl"></div>
            <div class="right-column" id="info">
                <ul id="becas-list">
                </ul>
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
