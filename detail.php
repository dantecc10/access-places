<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("Location: index.php");
}

include_once "php-scripts/functions.php";

$tabla = "access_places";
$campos = array();
$campos = ["id_access_places", "name_access_places", "quantity_imgs_access_places", "imgs_access_places", "coordinate1_access_places", "coordinate2_access_places", "description_access_places"];

$info = fetch_fields($tabla, $campos, $id, "");
?>


<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Detalle - "<?php echo ($info[1]); ?>" - Accesos Inclusivos</title>
    <meta name="twitter:description" content="Sitio web para encontrar accesos inclusivos en Chignahuapan, Puebla.">
    <meta name="twitter:image" content="https://teacherdhapps.castelancarpinteyro.com/assets/img/logo.png">
    <meta property="og:type" content="website">
    <meta name="description" content="Sitio web para encontrar accesos inclusivos en Chignahuapan, Puebla.">
    <meta name="author" content="Dante Castelán Carpinteyro">
    <meta property="og:image" content="https://teacherdhapps.castelancarpinteyro.com/assets/img/logo.png">
    <meta name="twitter:title" content="Accesos Inclusivos">
    <link rel="icon" type="image/png" sizes="664x660" href="../assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="664x660" href="../assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="664x660" href="../assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="664x660" href="../assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="664x660" href="../assets/img/logo.png">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">Accesos Inclusivos</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">INICIO</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">UBICACIONES</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">ACERCA DE</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">ContactO</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-center text-white bg-primary masthead">
        <div class="container">
            <h1 class="fs-1">Accesos Inclusivos</h1>
            <h2 class="font-weight-light mb-0">Detalle de ubicación</h2>
        </div>
    </header>
    <section>
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary">Información</h2>
            <div class="card shadow">
                <div class="card-header">
                    <p class="text-primary m-0 fw-bold">Detalle de ubicación</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col col-12 col-md-8 p-3"><iframe allowfullscreen="" frameborder="0" src="https://maps.google.com/maps?q=<?php echo ($info[4]); ?>,<?php echo ($info[5]); ?>&amp;z=15&amp;output=embed" width="100%" height="400"></iframe></div>
                        <div class="col col-12 col-md-4">
                            <div class="row">
                                <div class="col">
                                    <h1 class="text-primary text-center"><?php echo ($info[1]); ?></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center"><span class="fs-3 text-center text-secondary">Ubicado en: <?php echo ($info[4]); ?>, <?php echo ($info[5]); ?></span></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="fs-4 d-flex justify-content-center"><?php echo ($info[6]); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"><img style="width: 100%;height: auto;" src="assets/img/locations/<?php echo ($info[3]); ?>"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">UBICACIÓN</h4>
                    <p>Privada de Manuel Ávila Camacho SN, Teoconchila, 73300, Chignahuapan, Puebla.</p>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0" id="contact">
                    <h4 class="text-uppercase">SOCIAL</h4>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="btn btn-outline-light text-center btn-social rounded-circle" role="button" href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light text-center btn-social rounded-circle" role="button" href="#"><i class="fa fa-google-plus fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light text-center btn-social rounded-circle" role="button" href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light text-center btn-social rounded-circle" role="button" href="#"><i class="fa fa-dribbble fa-fw"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="text-uppercase mb-4">DESARROLLADORES</h4>
                    <p class="lead mb-0"><span><em>Accesos Inclusivos</em> es creado por estudiantes para un proyecto.</span></p>
                </div>
            </div>
        </div>
    </footer>
    <div class="text-center text-white copyright py-4">
        <div class="container"><small>Copyright ©&nbsp;Accesos Inclusivos 2024</small></div>
    </div>
    <div class="d-lg-none scroll-to-top position-fixed rounded"><a class="text-center d-block rounded text-white" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="../assets/img/portfolio/cabin.png">
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" data-bs-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="../assets/img/portfolio/cake.png">
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" data-bs-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="../assets/img/portfolio/circus.png">
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" data-bs-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-4">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="../assets/img/portfolio/game.png">
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" data-bs-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="../assets/img/portfolio/safe.png">
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" data-bs-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-6">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="../assets/img/portfolio/submarine.png">
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" data-bs-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/freelancer.js"></script>
</body>

</html>