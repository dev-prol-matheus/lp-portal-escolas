<?php
    include_once "api/config/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    
    <title>Escola de Enfermagem Israel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Lead Capture" name="keywords">
    <meta content="Lead Capture" name="description">

    <!-- Favicon -->
    <link rel="icon" href="./img/favicon_israel.png" type="image/x-icon">

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
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <?php 
        include "public/includes/menu.php"
    ?>


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Pós-Graduação</h1>
                <!-- <a href="" class="h4 text-white">Principal</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Pós-Graduação</a> -->
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Appointment Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pós Graduação</h5>
                        <h1 class="display-5 text-primary mb-0">Pós-Graduação</h1>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12 mt-0">
                    <input class="form-control mb-4" id="searchInput" type="text" placeholder="Pesquisar seu Curso...">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>IES</th>
                                    <th>Curso</th>
                                    <th>Nível</th>
                                    <th>Modalidade</th>
                                    <th>Investimento</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody id="courseTable">
                                <tr>
                                    <td>FDB</td>
                                    <td>Ultrassom Crítico a Beira Leito</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>30x de R$ 396,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/pos-graduacao-ead-em-pocus-ultrassom-critico-a-beira-leito/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Terapia Cognitivo Comportamental Clínica</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>17x de R$ 800,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/terapia-cognitivo-comportamental-clinica/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Imunologia Aplicada: Abordagens da prática clínica e laboratorial</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>4x de R$ 870,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/imunologia-aplicada/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Microbiologia Clínica Avançada: Diagnósticos e aplicações clínico-laboratoriais</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>14x de R$ 870,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/microbiologia-clinica/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Nefrologia e Hemodiálise</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>15x de R$ 823,53</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/nefrologia-e-hemodialise/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Hematologia Clínica e Laboratorial</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>17x de R$ 680,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/hematologia-clinica-e-laboratorial/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Odontopediatria e Saúde Coletiva</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>24x de R$ 1.950,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/odontopediatria-e-saude-coletiva/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Endodontia</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>24x de R$ 1.500,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/endodontia/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Dentística e Prótese</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>24x de R$ 1.300,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/dentistica-e-protese/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Gerenciamento de Projetos</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>21x de R$ 209,52</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/gerenciamento-de-projetos/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Psicoeducação em Saúde Mental</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>21x de R$ 209,52</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/psicoeducacao-em-saude-mental/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Tecnologia em Saúde</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>21x de R$ 150,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/tecnologia-em-saude/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Enfermagem em Oncologia</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>21x de R$ 209,52</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/enfermagem-em-oncologia/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Marketing e Varejo</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/marketing-e-varejo/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>MBA em Gestão de Marketing e Comunicação Integrada</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/gestao-de-marketing-e-comunicacao-integrada/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>MBA em Gestão de Logística e Operações</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/gestao-de-logistica-e-operacoes/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Gestão de Logística</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/gestao-de-logistica/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Gestão da Cadeia de Suprimentos</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/gestao-da-cadeia-de-suprimentos/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>MBA em Gestão Financeira</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/gestao-financeira-pos-ead/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>MBA em Gestão da Contabilidade e Finanças Empresariais</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/mba-em-gestao-da-contabilidade-e-financas-empresariais/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>MBA em Gestão Contábil</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/mba-em-gestao-contabil/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>MBA em Finanças de Mercado</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/mba-em-financas-de-mercado/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>MBA em Finanças Corporativas</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/mba-em-financas-corporativas/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Tecnologia e Educação a Distância</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/tecnologia-e-educacao-a-distancia/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Psicopedagogia Institucional</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/psicopedagogia-institucional/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Psicopedagogia</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/psicopedagogia/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Psicomotricidade</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>21x de R$ 144,45</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/psicomotricidade/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Prática da Educação Bilíngue</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>21x R$144,45</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/pratica-da-educacao-bilingue/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Metodologia do Ensino de História e Geografia</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 144,45</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/metodologia-do-ensino-de-historia-e-geografia/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Literatura Brasileira</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/literatura-brasileira/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Libras</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/libras/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Gestão Escolar: Orientação e Supervisão</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/gestao-escolar-orientacao-e-supervisao/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Gestão Escolar</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/gestao-escolar/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Educação Inovadora: Mindset Aplicado à Educação</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/educacao-inovadora-mindset-aplicado-a-educacao/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Educação Inclusiva</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/educacao-inclusiva/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Docência no Ensino Superior</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/docencia-no-ensino-superior/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Cultura e Literatura</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/cultura-e-literatura/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Aprendizagem ativa</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>21x de R$ 167,14</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/aprendizagem-ativa/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Alfabetização e Letramento</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/alfabetizacao-e-letramento/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Secretariado Executivo</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/secretariado-executivo/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>MBA em Gestão de Estratégia Empresarial</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/gestao-de-estrategia-empresarial/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>MBA em Gestão de Pessoas e Liderança</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/gestao-de-pessoas-e-lideranca/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>MBA em Gestão de Negócios Imobiliários</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/gestao-de-negocios-imobiliarios/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>MBA em Desenvolvimento de pessoas</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/desenvolvimento-de-pessoas/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Gestão de Serviços</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/gestao-de-servicos/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Gestão de Pessoas, Conhecimento e Inovação</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/gestao-de-pessoas-conhecimento-e-inovacao/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Gestão de Pessoas</td>
                                    <td>Pós-Graduação</td>
                                    <td>EAD</td>
                                    <td>18x de R$ 95,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/ead/gestao-de-pessoas/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Musculação e Fisicuturismo</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>21x de R$ 216,67</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/musculacao-e-fisiculturismo/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>MBA em Redes de Computadores: Gestão e Segurança</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>30x de R$600,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/mba-em-redes-de-computadores-gestao-e-seguranca/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Marketing e Negócios Digitais</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>21x de R$ 198,10</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/marketing-e-negocios-digitais/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Gestão Empresarial e Eclesiástica</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>---</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/gestao-empresarial-e-eclesiastica/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Gestão em Saúde</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>21x de R$ 198,10</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/gestao-em-saude/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Gestão da qualidade aplicada à saúde</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>---</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/gestao-da-qualidade-aplicada-a-saude/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Gerontologia</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>15x de R$ 580,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/gerontologia-atividade-fisica-prevencao-e-promocao/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Estética Avançada e Protocolos Invasivos</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>19x de R$ 713,89</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/estetica-avancada-e-protocolos-invasivos/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Educação Física Escolar</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>21x de R$ 198,10</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/educacao-fisica-escolar/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Educação Especial e Inclusiva</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>13x de R$ 500,00</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/educacao-especial-e-inclusiva/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Direito Processual Civil, Cidadania e Meios Consensuais de Solução de Conglitos</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>21x de R$ 216,67</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/direito-processual-civil-cidadania-e-meios-consensuais-de-solucao-de-conflitos/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Direito do Trabalho e Processual do Trabalho: Prática Trabalhista</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>21x de R$ 278,57</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/direito-do-trabalho-e-processual-do-trabalho-pratica-trabalhista/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Biomedicina Estética</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>19x de R$ 713,89</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/biomedicina-estetica/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                                <tr>
                                    <td>FDB</td>
                                    <td>Aconselhamento Familiar</td>
                                    <td>Pós-Graduação</td>
                                    <td>Presencial</td>
                                    <td>---</td>
                                    <td><a href="https://unidombosco.edu.br/cursos/presencial/aconselhamento-familiar/" target="_blank"><button class="btn btn-primary">Saiba mais</button></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
    

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
    <script src="public/assets/js/main.js"></script>
    <script src="public/assets/js/template.js"></script>
</body>

</html>