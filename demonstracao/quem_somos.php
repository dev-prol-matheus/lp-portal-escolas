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
        include "public/includes/loader/spinner.php";
        include "public/includes/menu.php"
    ?>


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Quem Somos</h1>
                <!-- <a href="" class="h4 text-white">Principal</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Quem Somos</a> -->
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title mb-4">
                <h5 class="position-relative d-inline-block text-primary text-uppercase">Quem Somos</h5>
                <h1 class="display-5 mb-0">Saiba mais Sobre Nós</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-5" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="public/assets/img/Capa-blog.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <p class="mb-4 text-justify">
                    A Escola Modelo é um espaço de aprendizagem inovador, onde nossos alunos são preparados para enfrentar os desafios do mundo contemporâneo com confiança e criatividade. Fundada com o propósito de oferecer uma educação de excelência, nossa escola combina tradição e inovação, valorizando o desenvolvimento integral dos estudantes.
                    <br><br>
                    Com uma equipe de professores dedicados e altamente qualificados, buscamos cultivar não apenas o conhecimento acadêmico, mas também o caráter, a ética e a cidadania. Acreditamos em uma abordagem pedagógica que estimula a curiosidade, o pensamento crítico e o respeito à diversidade, preparando nossos alunos para serem líderes responsáveis em uma sociedade global.
                    <br><br>
                    Nosso ambiente escolar é acolhedor, seguro e estimulante, com infraestrutura moderna e tecnologias de ponta que auxiliam no processo de ensino-aprendizagem. Oferecemos um currículo diversificado, que integra disciplinas acadêmicas com atividades extracurriculares que desenvolvem habilidades sociais, culturais e esportivas.
                    </p>
                </div>
                <div class="col-12">
                    <p class="mb-4 text-justify">
                    Na Escola Modelo, cada aluno é único e valorizado em sua individualidade. Estamos comprometidos com a formação de cidadãos conscientes, preparados para transformar o mundo de forma positiva e sustentável. Nossa missão é proporcionar uma educação que transcende os limites da sala de aula, moldando o futuro de nossos estudantes e da sociedade como um todo.
                    <br><br>
                    Venha fazer parte da nossa história e prepare-se para um futuro brilhante conosco!
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- About End -->
    

    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <!-- <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div> -->
        </div>
    </div>
    <!-- Newsletter End -->
    

    <!-- Footer Start -->
    <?php 
        include "public/includes/footer.php"
    ?>
    <!-- Footer End -->


    <!-- Back to Top 
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>-->


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
</body>

</html>