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
    <link rel="stylesheet" href="../css/card-contact.css">
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
            <h1 class="title-header">Programa de inducción para el<span class="text-highlight">profesorado de nuevo ingreso</span></h1>
        </section>
        <section class="header-img">
            <img src="../../src/img/utl_4.webp" alt="">
        </section>
    </header>

    <br><br>

    <main>

        <section class="section-content">
            <h2>Curso de inducción</h2>
            <p>Con la finalidad de proveer al profesorado la información básica para el desarrollo de sus actividades académicas y administrativas, el aprovechamiento de los beneficios y la observación de las responsabilidades que obtiene como profesora o profesor de la Universidad.</p>
            <p>El curso tiene una duración de 10 horas, autogestivo y debe cubrirse en el primer cuatrimestre de ingreso.</p>

            <h2>Curso microenseñanza</h2>
            <p>Su objetivo es ofrecer al profesorado competencias docentes en la educación que junto a su experiencia y práctica en el uso y manejo de herramientas educativas propias, incremente su efectividad en el proceso enseñanza aprendizaje en el salón de clases.</p>
            <p>El curso tiene una duración de 20 horas, se imparte de forma presencial de acuerdo a programa de capacitación.</p>
        </section>

        <section class="card-contact">
            <i class='bx bxs-contact'></i>

            <h4><strong>Contacto:</strong></h4>
            <p>Lic. Viridiana Ramírez Salas</p>
            <p>Coordinadora de Formación Docente</p>
            <p>Ext. 304</p>
            <p><a class="link-utl" href="mailto:vsalas@utleon.edu.mx">vsalas@utleon.edu.mx</a></p>
            <p>Ubicación Edificio: CVD planta alta</p>
        </section>

    </main>

    <br>

    <?php include $footer ?>

</body>

<script src="../js/jquery-2.1.4.min.js"></script>
<script src="../js/becas-list.js"></script>
<script src="../js/faq.js"></script>

</html>
