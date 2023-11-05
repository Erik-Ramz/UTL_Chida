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
                    <p>¿Cuál es el periodo de Estadía?</p>
                    <button class="btn-primary-icon-utl toggleButtonFaq"><i class="bx bx-chevron-down"></i></button>
                </div>
                <div class="additional-info">
                    <b>1. Cuatrimestre enero – abril</b>
                    <ul>
                        <li>Estadías de Ingeniería.</li>
                        <li>Búsqueda y recepción de proyectos de estadía para TSU siguiente periodo.</li>
                    </ul>
                    <b>2. Cuatrimestre mayo – agosto</b>
                    <ul>
                        <li>Estadías de TSU.</li>
                    </ul>
                    <b>3. Cuatrimestre septiembre – diciembre</b>
                    <ul>
                        <li>Búsqueda y recepción de proyectos de estadía para Ingeniería siguiente periodo.</li>
                    </ul>
                </div>
            </div>

            <div class="faq-card">
                <div class="faq-content">
                    <p>¿Cuáles son los requisitos de Estadía?</p>
                    <button class="btn-primary-icon-utl toggleButtonFaq"><i class="bx bx-chevron-down"></i></button>
                </div>
                <div class="additional-info">
                    <ol>
                        <li>Formato de inscripción de proyecto (FIP): deberá ser llenado a computadora cumpliendo con todos los apartados obligatorios (mismos que están marcados con un asterisco * para su identificación).</li>
                        <li>El FIP deberá estar firmado y sellado por el gestor de carrera y el asesor organizacional.</li>
                        <li>Acude al área de Prácticas y Estadías a entregar FIP con tu seguridad social.</li>
                        <li>Después de 5 días hábiles, acude al área de Prácticas y Estadías a recoger tu FIP con sello de recibido para que registres tu proyecto en SITO.</li>
                        <li>Cuando esté registrado tu proyecto, avisa a tu gestor de carrera para que te asigne tu asesor académico.</li>
                        <li>Una vez realizado el paso anterior, podrás descargar tu convenio, recolectar firmas y entregarlo a tu gestor de carrera, para que él a su vez, lo proporcione al Departamento de Estadías.</li>
                    </ol>
                    <p>IMPORTANTE. La UTL no otorga ningún tipo de apoyo económico. Tampoco otorga ningún tipo de carta que testifique el estado de salud del estudiante o que cuenta con vacuna COVID-19.</p>
                </div>
            </div>

            <div class="faq-card">
                <div class="faq-content">
                    <p>¿Qué tipo de seguro puedo tener para realizar mi estadía?</p>
                    <button class="btn-primary-icon-utl toggleButtonFaq"><i class="bx bx-chevron-down"></i></button>
                </div>
                <div class="additional-info">
                    <ul>
                        <li>Constancia de Vigencia de Seguridad Social del IMSS (descargarlo de la página del IMSS).</li>
                        <li>INSABI: Debe entregar Póliza de Afiliación con vigencia actualizada.</li>
                        <li>ISSSTE: Debe presentar copia del tarjetón o carta de afiliación donde indique la vigencia activa.</li>
                        <li>Póliza de Seguro particular vigente.</li>
                        <li>En caso de no tener Seguro, deberás acudir a Servicios Escolares para obtener Seguro Facultativo.</li>
                    </ul>

                </div>
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
