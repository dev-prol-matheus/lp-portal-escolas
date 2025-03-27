<?php
    include_once "area-admin/php/conexao.php";
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
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        /* Estilo para a modal */
        .modal-content {
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .modal-header {
            background-color: #29166F;
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
      <!-- Spinner Start -->
      <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-g  row text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php 
        include "includes/menu.php"
    ?>

<div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
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
                    <form action="./area-admin/php/process_client.php" method="POST">
                        <div class="row g-3">
                            <div class="col-12">
                                <select name="curso" class="form-select bg-light border-0" style="height: 55px; width: 100%; max-width: 100%; overflow-x: auto;" required>
                                    <option value="" disabled selected>Selecione o Curso</option>
                                    <!-- <option value="Curso - TECNICO EM ENFERMAGEM">Curso - TÉCNICO EM ENFERMAGEM</option>
                                    <option value="Curso - CUIDADOR DE IDOSOS">Curso - CUIDADOR DE IDOSOS</option>
                                    <option value="Curso - FLEBOTOMIA">Curso - FLEBOTOMIA</option>
                                    <option value="Curso - COMPLEMENTACAO PARA O TECNICO EM ENFERMAGEM">Curso - COMPLEMENTACAO PARA O TÉCNICO EM ENFERMAGEM</option>
                                    <option value="Curso - RECICLAGEM DO TECNICO EM ENFERMAGEM">Curso - RECICLAGEM DO TÉCNICO EM ENFERMAGEM</option>
                                    <option value="Curso de Capacitacao - ADMINISTRACAO DE MEDICAMENTOS">Curso de Capacitação - ADMINISTRAÇÃO DE MEDICAMENTOS</option>
                                    <option value="Curso de Capacitacao - FERIDAS E CURATIVOS">Curso de Capacitação - FERIDAS E CURATIVOS</option>
                                    <option value="Curso de Capacitacao - UTI">Curso de Capacitação - UTI</option>
                                    <option value="Polo Unidombosco - CURSOS ESCOLA DE ENFERMAGEM ISRAEL E UNIDOMBOSCO">Polo Unidombosco - CURSOS ESCOLA DE ENFERMAGEM ISRAEL E UNIDOMBOSCO</option> -->
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
</div>
    <!-- Appointment End -->

<!-- Modal de Sucesso -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-lg shadow-lg">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center" id="successModalLabel" style="color:#FFF;">
                 Parabens!
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
</div>




    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault(); // Impede o envio padrão do formulário

            const formData = new FormData(this);

            fetch('./area-admin/php/process_client.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Exibe a modal com a mensagem de sucesso ou erro
                const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                const successMessage = document.getElementById('successMessage');
                
                successMessage.textContent = data.message;
                successModal.show();
                
                if (data.status === 'success') {
                    // Limpa o formulário após o sucesso
                    this.reset();
                }
            })
            .catch(error => {
                console.error('Erro:', error);
            });
        });
    });
    </script>

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

    <?php 
        include "includes/footer.php"
    ?>

    <!-- Back to Top 
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>-->

    <!-- JavaScript Libraries -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>