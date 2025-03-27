<?php

require_once ("api/config/conexao.php");
require_once ("api/models/BannersModel.php");

if (isset($_GET["tipo_logo"])) {
    $_SESSION["tipo_logo"] = $_GET["tipo_logo"];
};

$bannerModel = new BannersModel($connection);
$bannerPrincipal = $bannerModel->listar_principal();

$imagemBanner = $bannerPrincipal ? $bannerPrincipal["imagem"] : "banner-inicial.png";
$slides = $bannerModel->listar_todos();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">

    <title>Escola Modelo - Captador de Leads</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Escola de Enfermagem Israel" name="keywords">
    <meta content="Escola de Enfermagem Israel" name="description">


    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon_israel.png" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="public/lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="public/assets/css/style.css" rel="stylesheet">

    <style>
        /* Estilo para a modal */
        .modal-content {
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            /* background-color: #29166F; */
            color: #FFF;
        }

        .modal-body {
            font-size: 1rem;
        }

        .modal-footer button {
            background-color: #FEB21F;
            color: #FFF;
        }

        .modal-footer button:hover {
            background-color: #F8B92E;
        }
    </style>

</head>

<body>

    <?php
    include "public/includes/menu.php";
    include "public/includes/loader/spinner.php";
    ?>
   <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
        <?php
            $isFirst = true; // Variável para controlar o primeiro slide
            foreach ($slides as $slide) {
                $activeClass = $isFirst ? 'active' : '';
        ?>
                <div onclick="window.location.href='./cursos.php'" class="carousel-item <?php echo $activeClass; ?>">
                    <img src="<?php echo 'public/admin/uploads/' . $slide['imagem']; ?>" class="d-block w-100" alt="Slide">
                </div>
                
        <?php $isFirst = false; } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

            <!-- <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Faça sua Inscrição Agora</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Curso Técnico de Enfermagem</h1>
                            <a href="cursos.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Faça agora seu cadastro!</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Faça sua Inscrição Agora</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Curso Técnico de Enfermagem</h1>
                            <a href="cursos.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Faça agora seu cadastro!</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        <!-- </div>
    </div> -->
    <!-- Carousel End -->

    <!-- Quem Somos Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="filtroSection">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Quem somos</h5>
                        <h1 class="display-5 mb-0">Escola Modelo</h1>
                    </div>
                    <p class="mb-4 text-justify">A Escola Modelo oferece uma educação de excelência, combinando tradição e inovação. Com uma equipe de professores qualificados, nossa abordagem pedagógica foca no desenvolvimento integral dos alunos, estimulando o conhecimento, o pensamento crítico e a ética. Valorizamos um ambiente seguro e acolhedor, com infraestrutura moderna e atividades extracurriculares diversificadas. Nosso objetivo é formar cidadãos conscientes e líderes preparados para transformar o mundo de foram positiva. Na Escola Modelo, cada aluno é único, e estamos comprometidos com seu sucesso e crescimento.</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="bi bi-award-fill me-3"></i>+ de 4.200 alunos formados</h5>
                        </div>
                    </div>
                    <a href="quem_somos.php" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Saiba mais</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="public/assets/img/Capa-blog.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quem Somos End -->

    <!-- Principais Cursos -->
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
                <div class="row col-3 filter-container" >
                    <form class="filter" action="index.php<?php echo isset($_SESSION["tipo_logo"]) ? "?tipo_logo=".$_SESSION["tipo_logo"] : '' ?>" method="post">
                        <div class="form-box">
                            <label for="curso">Curso:</label>
                            <select name="curso" id="filtro-curso"></select>
                        </div>
                        <div class="form-box">
                            <label for="segmento">Segmento:</label>
                            <select name="segmento" id="filtro-segmento"></select>
                        </div>
                        <div class="form-box">
                            <button class="btn btn-primary" onclick="filtrarCursos()" type="button">Filtrar</button>
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

    <!-- Cadastro Curso Start -->
    <!-- <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">Quero Saber Mais Informações</h1>
                        <p class="text-white mb-0">
                        <ol>
                            <li class="lista_cadastro"><strong>Selecione o Curso:</strong>
                                <ul class="lista_cadastro lista_style">
                                    <li class="lista_cadastro">Escolha o curso desejado.</li>
                                </ul>
                            </li>
                            <li class="lista_cadastro"><strong>Preencha os Campos:</strong>
                                <ul class="lista_cadastro lista_style">
                                    <li class="lista_cadastro"><strong>Nome Completo:</strong> Digite seu nome.</li>
                                    <li class="lista_cadastro"><strong>Telefone:</strong> Informe seu número.</li>
                                    <li class="lista_cadastro"><strong>E-mail:</strong> Digite seu e-mail.</li>
                                </ul>
                            </li>
                            <li class="lista_cadastro"><strong>Finalize o Cadastro:</strong>
                                <ul class="lista_cadastro lista_style">
                                    <li class="lista_cadastro">Revise todas as informações.</li>
                                    <li class="lista_cadastro">Clique no botão "Concluir".</li>
                                </ul>
                            </li>
                        </ol>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn bg-form" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Preencha os dados abaixo</h1>
                        <form action="./admin/php/process_client.php" method="POST">
                            <div class="row g-3">
                                <div class="col-12">
                                    <select name="curso" class="form-select bg-light border-0" style="height: 55px; width: 100%; max-width: 100%; overflow-x: auto;" required>
                                        <option value="" disabled selected>Selecione o Curso</option>
                                        
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="nome" class="form-control bg-light border-0" placeholder="Seu Nome" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <input type="tel" name="telefone" class="form-control bg-light border-0" placeholder="Seu Telefone" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control bg-light border-0" placeholder="Seu E-mail" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Concluir</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Cadastro Curso End -->

    <!-- Modal de Sucesso -->
    <!-- <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-lg shadow-lg">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center" id="successModalLabel" style="color:#FFF;">
                        Parabéns!
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <i class="fas fa-check-circle fa-3x text-success mb-3"></i>
                    <p id="successMessage" class="lead">
                        Você foi cadastrado com sucesso, entraremos em contato em breve!
                    </p>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Nossa Galeria</h5>
                        <h1 class="display-5 mb-0">Fique por dentro!</h1>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <?php 
                        require_once("api/models/BlogsModel.php");
                        
                        $model = new BlogsModel($connection);
                        $blogs = $model->listar_home();
                        
                        foreach ($blogs as $blog): 
                        ?>
                            <!-- <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                                <a href="blog.php?id=<?php echo htmlspecialchars($blog['id']); ?>">
                                    <div class="rounded-top overflow-hidden">
                                        <img class="img-fluid" src="./admin/uploads/<?php echo htmlspecialchars($blog['img']); ?>" alt="<?php echo htmlspecialchars($blog['titulo']); ?>">
                                    </div>
                                    <div class="position-relative bg-light rounded-bottom text-center p-4">
                                        <h5 class="m-0"><?php echo htmlspecialchars($blog['titulo']); ?></h5>
                                    </div>
                                </a>
                            </div> -->

                            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                                <div class="team-item">
                                    <div class="position-relative rounded-top" style="z-index: 1;">
                                        <img class="img-fluid rounded-top w-100" src="public/admin/uploads/<?php echo htmlspecialchars($blog['img']); ?>" alt="Blog Image">
                                        <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                            <a class="btn btn-primary btn-square m-1" href="blog.php?id=<?php echo htmlspecialchars($blog['id']); ?>"><i class="bi bi-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                        <h4 class="mb-2"><?php echo htmlspecialchars($blog['titulo']); ?></h4>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->




    <!-- Nossos Cursos Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Nossos Cursos</h5>
                        <h1 class="display-5 mb-0">Saiba um pouco mais sobre nossos cursos</h1>
                    </div>
                    <p class="mb-4 text-justify">A Escola de Enfermagem Israel oferece cursos de alta qualidade com um corpo docente experiente e qualificado. Nossa missão é fornecer uma formação sólida e prática, preparando os alunos para uma carreira de sucesso na enfermagem. Com um ensino atualizado e uma abordagem prática, garantimos que nossos estudantes adquiram as competências necessárias para se destacarem no mercado de trabalho.</p>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/tecnico.jpeg" alt="" style="max-height:180px;">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Técnico</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Flexibilidade</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Formação Prática e Específica</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>Custo-benefício</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="pre_matricula.php" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Tenho Interesse</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/capacitacao.jpeg" alt="" style="max-height:180px;">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Capacitação</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Desenvolvimento de Carreira</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Crescimento Pessoal</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>Flexibilidade e Adaptabilidade</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="pre_matricula.php" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Tenho Interesse</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/especializacao.jpeg" alt="" style="max-height:180px;">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Especilização</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Avanço na Carreira</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Reconhecimento e Prestígio</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>Certificação Reconhecida</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="pre_matricula.php" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Tenho Interesse</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Nossos Cursos End -->

    <!-- Modal de escolha de logo -->
    <!-- só mostrar o modal quando tem um get disponível -->

    <?php if (!isset($_GET["tipo_logo"])) { ?>
        <section class="choose-logo-container">
            <div class="choose-logo-modal">
                <h5>Com qual modelo a logo desta escola mais se parece?</h5>
                <div class="imgs">
                    <div class="img-box">
                        <img src="public/assets/img/logo-1.png" alt="tipo retangular" style="object-fit: contain;">
                        <button onclick="window.location.href='index.php?tipo_logo=1'">Escolher esse</button>
                    </div>
                    <div class="img-box">
                        <img src="public/assets/img/logo-2.png" alt="tipo redondo">
                        <button onclick="window.location.href='index.php?tipo_logo=2'">Escolher esse</button>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>


    <!-- Email Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <!-- <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Seu Email">
                        <button class="btn btn-dark px-4">Enviar</button>
                    </div>
                </form>
            </div> -->
        </div>
    </div>
    <!-- Email End -->


    <?php
    include "public/includes/footer.php";
    include "public/includes/modals/inscricao_curso.php";
    include "public/includes/modals/feedback_inscricao.php";
    ?>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


    <!-- Template Javascript -->
    <script src="public/assets/js/template.js"></script>
    <script src="public/assets/js/main.js"></script>
    <script src="public/assets/js/cursos.js"></script>

    <script>
     const carouselElement = document.querySelector('#carouselExample');
    const carousel = new bootstrap.Carousel(carouselElement, {
        interval: 3000, // Auto-slide interval de 3 segundos
        ride: 'carousel' // Habilita o auto-slide
    });

    // Obtém os botões de navegação
    const prevButton = document.querySelector('.carousel-control-prev');
    const nextButton = document.querySelector('.carousel-control-next');

    // Configuração manual para navegar pelos slides
    prevButton.addEventListener('click', function() {
        carousel.prev(); // Move para o slide anterior
    });

    nextButton.addEventListener('click', function() {
        carousel.next(); // Move para o próximo slide
    });

    // Previne que o carrossel avance automaticamente ao interagir com as setas
    carouselElement.addEventListener('slid.bs.carousel', function () {
        // Você pode fazer qualquer ação adicional quando o slide mudar
    });
    </script>

</body>

</html>