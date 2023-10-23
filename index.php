<?php

//require_once 'controller/ctr_master.php';
$navbar = "components/navbar.php";
$header = "components/header.php";
$footer = "components/footer.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/styles.css">
    <link rel="stylesheet" href="view/css/access-menu.css">
    <link rel="stylesheet" href="view/css/navbar.css">
    <link rel="stylesheet" href="view/css/header.css">
    <link rel="stylesheet" href="view/css/card.css">
    <link rel="stylesheet" href="view/css/modelo-estudios.css">
    <link rel="stylesheet" href="view/css/pilares-institucionales.css">
    <link rel="stylesheet" href="view/css/faq.css">
    <link rel="stylesheet" href="view/css/footer.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="shortcut icon" href="src/img/favicon.ico" type="image/x-icon">
    <title>Universidad Tecnológica de León</title>
</head>

<body>

    <nav class="navbar-utl">
        <div class="navbar-info">
            <a href="index.php"><img src="src/img/UTL_imagotipo.png" alt="UTL Logotipo"></a>

            <div class="access-buttons">
                <a href="mailto:lestrada@utleon.edu.mx" class="btn-primary-utl"> <i class='bx bxs-graduation'></i> Contáctanos</a>

                <div class="chocolate-button">
                    <input type="checkbox" id="chocolate-toggle">
                    <label for="chocolate-toggle" class="chocolate-label">
                        <img src="svg/menu-grid-o.svg" alt="">
                    </label>
                    <div class="chocolate-menu">
                        <ul>
                            <li><a href="https://sito.utleon.edu.mx/" target="_blank"><i class='bx bx-windows'></i>SITO</a></li>
                            <li><a href="https://aulavirtual.seg.guanajuato.gob.mx/materias/login/index.php" target="_blank"><i class='bx bx-world'></i>Aula Virtual</a></li>
                            <li><a href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=16&ct=1698001631&rver=7.0.6738.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fcobrandid%3dab0455a0-8d03-46b9-b18b-df2f57b9e44c%26nlp%3d1%26deeplink%3dowa%252f%26RpsCsrfState%3ddbd63f50-097d-4926-47b1-d027c06f7cee&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=ab0455a0-8d03-46b9-b18b-df2f57b9e44c" target="_blank"><i class='bx bx-mail-send'></i>Outlook</a></li>
                            <li><a href="http://www.bibliotecaecest.mx/" target="_blank"><i class='bx bx-book-bookmark'></i>Biblioteca</a></li>
                            <li><a href="https://utleon.edu.mx/resource/img/CALENDARIO%20LE%C3%93N__.jpg" target="_blank"><i class='bx bx-calendar'></i>2022 - 2023</a></li>
                            <li><a href="https://utleon.edu.mx/resource/img/CALENDARIO%20LE%C3%93N.jpg" target="_blank"><i class='bx bx-calendar'></i>2023 - 2024</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-container">
            <ul class="navbar-menu">
                <li class="dropdown-utl">
                    <a href="index.php">Inicio</a>
                </li>
                <li class="dropdown-utl">
                    <a href="#">Aspirantes <i class='bx bx-chevron-down'></i></a>
                    <ul class="dropdown-menu-utl">
                        <li><a href="#carreras">Oferta educativa</a></li>
                        <li><a href="view/alumnos/admisiones.php">Admisiones</a></li>
                        <li><a href="view/alumnos/becas.php">Becas</a></li>
                    </ul>
                </li>
                <li class="dropdown-utl">
                    <a href="#">Estudiantes <i class='bx bx-chevron-down'></i></a>
                    <ul class="dropdown-menu-utl">
                        <li><a href="#">Becas</a></li>
                        <li><a href="#">Reinscripción</a></li>
                        <li><a href="#">Reingreso</a></li>
                        <li><a href="#">Estadías</a></li>
                        <li><a href="#">Titulación</a></li>
                        <li><a href="#">Proceso de regularización</a></li>
                        <li><a href="#">Proceso de baja</a></li>
                        <li><a href="#">Trámites escolares</a></li>
                    </ul>
                </li>
                <li class="dropdown-utl">
                    <a href="#">Docentes <i class='bx bx-chevron-down'></i></a>
                    <ul class="dropdown-menu-utl">
                        <li><a href="#">Desarrollo académico</a></li>
                        <li><a href="#">Tutoreo</a></li>
                        <li><a href="#">Movilidad Docente</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>


    <br>

    <header>
        <section class="header-info">
            <img src="src/img/UTL_logo_horizontal.png" alt="UTL Logotipo">
            <h1 class="title-header">Admisiones <br> <span class="text-highlight">2023 - 2024</span> </h1>
            <a href="#carreras" class="btn-primary-utl"> <i class='bx bxs-graduation'></i> Oferta educativa</a>
        </section>
        <section class="header-img">
            <img src="https://images.pexels.com/photos/1438072/pexels-photo-1438072.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        </section>
    </header>

    <br><br>

    <main>

        <section id="carreras" class="card-utl">
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

        <section class="modelo-estudios">
            <div class="modelo-cuatrimestres">
                <h4 class="modelo-title">TSU</h4>
                <div class="modelo-tsu">
                    <div>
                        <h5 class="modelo-turno">Matutino</h5>
                        <p class="cuatrimestres-tsu">6</p>
                        <span>Cuatrimestres</span>
                    </div>
                    <div class="vl"></div>
                    <div>
                        <h5 class="modelo-turno">Vespertino</h5>
                        <p class="cuatrimestres-tsu">9</p>
                        <span>Cuatrimestres</span>
                    </div>
                </div>

                <div class="modelo-ing-lic">
                    <h4 class="modelo-title">ING/LIC</h4>
                    <p class="cuatrimestres-ing-lic">5</p>
                    <span>Cuatrimestres</span>
                </div>
            </div>

            <div class="vl"></div>

            <div class="modelo-porcentajes">
                <div>
                    <p>70% <span>Práctico</span></p>
                    <div></div>
                </div>
                <div>
                    <p>30% <span>Teórico</span></p>
                    <div></div>
                </div>
            </div>
        </section>

        <section class="pilares-institucionales">
            <div class="container_utl">
                <div class="image-box_utl">
                    <img src="https://images.pexels.com/photos/7213192/pexels-photo-7213192.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Imagen de la empresa">
                </div>
                <div class="content-box_utl">
                    <div class="content-box_utl_info">
                        <h2>Misión</h2>
                        <p>Formar ciudadanos/as del mundo con educación tecnológica de calidad a través de la docencia, la investigación aplicada, la difusión del conocimiento y la vinculación, que contribuyan a la innovación y al desarrollo sustentable.
                        </p>
                    </div>
                    <div class="buttons_utl">
                        <button id="btn-mision">Misión</button>
                        <button id="btn-vision">Visión</button>
                        <button id="btn-valores">Valores</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="banner">
            <h2>INSCRIPCIONES ABIERTAS 2024</h2>
            <button class="btn-secondary-utl"> <i class='bx bx-right-arrow-alt'></i> INICIAR PROCESO</button>
        </section>

    </main>

    <br>

    <?php include $footer ?>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="view/js/carreras_list.js"></script>
<script src="view/js/pilares-institucionales.js"></script>

</html>
