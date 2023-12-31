<?php

//require_once 'controller/ctr_master.php';
$navbar = "../../components/navbar.php";
$header = "../../components/header.php";
$footer = "../../components/footer.php";

$slug = $_GET['carrera'];
$json_data = file_get_contents('../../json/carreras.json');
$data = json_decode($json_data, true);

$carreraObj = null;

foreach ($data['carreraTSU'] as $objeto) {
    if ($objeto['slug'] == $slug) {
        $carreraObj = $objeto;
        break;
    }
}

if (!$carreraObj) {
    foreach ($data['carrerasING'] as $objeto) {
        if ($objeto['slug'] == $slug) {
            $carreraObj = $objeto;
            break;
        }
    }
}

if ($carreraObj) {
    $titulo = $carreraObj['titulo'];

    $palabras = explode(" ", $titulo);
    $area = array_shift($palabras);
    $restoDelTexto = implode(" ", $palabras);

    $plan_materias = $carreraObj['plan_materias'];
    $perfil_ingreso = $carreraObj['perfil_ingreso'];
    $perfil_egreso = $carreraObj['perfil_egreso'];
}


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
    <link rel="stylesheet" href="../css/glider.min.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="shortcut icon" href="../../src/img/favicon.ico" type="image/x-icon">
    <title>Universidad Tecnológica de León</title>
</head>

<body>

    <?php include $navbar ?>

    <br>

    <header>
        <section class="header-info">
            <h1 class="title-header"> <span class="text-highlight"><?php echo $area ?></span> <?php echo $restoDelTexto ?> </h1>
            <a href="#carreras" class="btn-primary-utl"> <i class='bx bx-right-arrow-alt'></i> Proceso de admisión</a>
        </section>
        <section class="header-img">
            <img src="../../src/img/utl_7.webp" alt="">
        </section>
    </header>

    <br><br>

    <main>

        <section class="section-content glider-contain">
            <div class="glider">
                <?php
                foreach ($plan_materias as $value) {
                    echo "<div class='card-carrera'>
                        <h3>$value[titulo]</h3>
                        <ul>";
                    foreach ($value['materias'] as $materia) {
                        echo "<li>$materia</li>";
                    }
                    echo "</ul>
                    </div>";
                }
                ?>
            </div>

            <button aria-label="Previous" class="glider-prev"> <i class="bx bx-chevron-left"></i> </button>
            <button aria-label="Next" class="glider-next"> <i class="bx bx-chevron-right"></i> </button>
            <div role="tablist" class="dots"></div>
        </section>

        <section class="section-content content-perfiles">
            <div>
                <h3>Perfil de ingreso</h3>
                <ul>
                    <?php
                    foreach ($perfil_ingreso as $value) {
                        echo "<li>$value</li>";
                    }
                    ?>
                </ul>
            </div>
            <div>
                <h3>Perfil de egreso</h3>
                <ul>
                    <?php
                    foreach ($perfil_egreso as $value) {
                        echo "<li>$value</li>";
                    }
                    ?>
                </ul>
            </div>
        </section>

    </main>

    <br>

    <?php include $footer ?>

</body>

<script src="../js/jquery-2.1.4.min.js"></script>
<script src="../js/glider.min.js"></script>
<script src="../js/descripcion-carrera.js"></script>

</html>
