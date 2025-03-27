<?php
    require_once ("api/config/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">

    <title>Escola Modelo - Captador de Leads</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Lead Capture" name="keywords">
    <meta content="Lead Capture" name="description">

    <!-- Favicon -->
    <link rel="icon" href="../assets/img/favicon_israel.png" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="public/lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="public/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <?php
    include "public/includes/menu.php";
    include "public/includes/loader/spinner.php";
    ?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Nossos Cursos</h1>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Cursos -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <!-- <div class="row g-5 mb-3">
                <div class="col-lg-7">
                    <div class="section-title mb-0">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Cursos</h5>
                    </div>
                </div>
            </div> -->
            <div class="row g-5 wow fadeInUp filter-showcase" data-wow-delay="0.1s">
                <div class="row col-3 filter-container">
                    <!-- Filtro de cursos -->
                    <form id="filtro-cursos" class="filter">
                        <div class="form-box">
                            <label for="curso">Curso:</label>
                            <select name="curso" id="filtro-curso">
                                <option value="">Clique para selecionar</option>
                                <!-- lista criada pelo JS -->
                            </select>
                        </div>
                        <div class="form-box">
                            <label for="segmento">Segmento:</label>
                            <select name="segmento" id="filtro-segmento">
                                <option value="">Clique para selecionar</option>
                                <!-- lista criada pelo JS -->
                            </select>
                        </div>
                        <div class="form-box">
                            <button class="btn btn-primary" type="button" onclick="filtrarCursos()">Filtrar</button>
                        </div>
                    </form>
                </div>
                <div class="row col-9 showcase">
                    <div id="grade-cursos" class="row g-4">
                        <!-- Grade de cursos criado por JS -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-3">
                <div class="col-lg-7">
                    <div class="section-title mb-0">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Cursos de Capacitação</h5>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.3s">
                             <a href="pre_matricula.php">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid w-100" src="img/adm-med.png" alt="Curso Administração de Medicamentos" style="max-height:140px;">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">Administração de Medicamentos</h5>
                                    <button class="btn btn-primary mt-1" data-bs-toggle="modal" data-bs-target="#inscricaoModal">Inscreva-se já</button>
                                </div>
                             </a>
                        </div>
                        
                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.6s">
                             <a href="pre_matricula.php">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid" src="img/curso-de-uti.png" alt="">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">UTI</h5>
                                    <button class="btn btn-primary mt-1" data-bs-toggle="modal" data-bs-target="#inscricaoModal">Inscreva-se já</button>
                                </div>
                             </a>
                        </div>

                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.6s">
                             <a href="pre_matricula.php">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid w-100" src="img/fer-curat.png" alt="Curso Feridas e Curativos" style="max-height:140px;">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">Feridas e Curativos</h5>
                                    <button class="btn btn-primary mt-1" data-bs-toggle="modal" data-bs-target="#inscricaoModal">Inscreva-se já</button>
                                </div>
                             </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-3">
                <div class="col-lg-7">
                    <div class="section-title mb-0">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Polo Unidombosco</h5>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.3s">
                             <a href="pre_matricula.php">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid w-100" src="img/tecnico_israel.jpg" alt="Curso Escola de Enfermagem Israel e UNIDOMBOSCO" style="max-height:140px;">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    <h5 class="m-0">Curso Escola de Enfermagem Israel e UNIDOMBOSCO</h5>
                                    <button class="btn btn-primary mt-1" data-bs-toggle="modal" data-bs-target="#inscricaoModal">Inscreva-se já</button>
                                </div>
                             </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <?php
    include "public/includes/footer.php";
    include "public/includes/modals/inscricao_curso.php";
    include "public/includes/modals/feedback_inscricao.php";
    ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/lib/wow/wow.min.js"></script>
    <script src="public/lib/easing/easing.min.js"></script>
    <script src="public/lib/waypoints/waypoints.min.js"></script>
    <script src="public/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="public/lib/tempusdominus/js/moment.min.js"></script>
    <script src="public/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="public/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="public/lib/twentytwenty/jquery.event.move.js"></script>
    <script src="public/lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="public/assets/js/template.js"></script>
    <script src="public/assets/js/main.js"></script>
    <script src="public/assets/js/cursos.js"></script>
</body>

</html>