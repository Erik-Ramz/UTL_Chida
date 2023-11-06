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
            <h1 class="title-header">Programa institucional<span class="text-highlight">de Tutorías PIT</span></h1>
        </section>
        <section class="header-img">
            <img src="../../src/img/utl_4.webp" alt="">
        </section>
    </header>

    <br><br>

    <main>

        <section class="section-content">
            <p>En la Universidad Tecnológica de León existe un Programa Institucional de Tutorías, y la acción tutorial se define como un acompañamiento y apoyo que el personal docente con funciones de tutoreo brinda a los docentes con el objetivo de alentar su permanencia y aprovechamiento escolar. Nuestro programa de tutoría fortalece la formación humana del estudiantado, mediante la atención personalizada a la problemática que cada docente enfrenta, facilitando su adaptación a la comunidad universitaria y el logro de los objetivos académicos.</p>
            <p>Los principales alcances de la acción tutorial son: Detección, orientación, canalización y seguimiento</p>
        </section>

        <section class="card-utl">
            <div class="left-column" id="data-pasos">

            </div>
            <div class="vl"></div>
            <div class="right-column" id="info">
                <ul id="data-list">
                </ul>
            </div>
        </section>

        <section class="card-contact">
            <i class='bx bxs-contact'></i>

            <h4><strong>Responsable Institucional de Tutorías:</strong></h4>
            <p>Mtra. Reyna Gabriela Martínez García</p>
            <p>Ext. 302</p>
            <p>Edificio CVD planta alta</p>
            <p><a class="link-utl" href="mailto:rmartinezg@utleon.edu.mx">rmartinezg@utleon.edu.mx</a></p>
            <p><strong>Horario de atención: </strong>de lunes a viernes de 11:00 a 15:00 horas</p>
        </section>

    </main>

    <br>

    <?php include $footer ?>

</body>

<script src="../js/jquery-2.1.4.min.js"></script>
<script src="../js/becas-list.js"></script>
<script src="../js/faq.js"></script>

</html>
