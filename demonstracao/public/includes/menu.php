<!-- Topbar Start -->
<div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <small class="py-2"><i class="fa-solid fa-clock text-icon me-2"></i>Funcionamento: Segunda - Sexta : 08h - 22h, Sábado 08h - 13h, Domingo Fechado </small>
            </div>
        </div>
        <div class="col-md-6 text-center text-lg-end">
            <div class="position-relative d-inline-flex align-items-center bg-contato-header text-white top-shape px-5">
                <!-- <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2 text-color-header"></i>(81) 3019-0907</p>
                    </div> -->
                <div class="py-2">
                    <p class="m-0"><i class="fa-solid fa-phone me-2 text-color-header"></i>(99) 9999-9999 | (99) 9999-9999</p>
                    <!-- <p class="m-0"><i class="fa-solid fa-phone"></i>(99) 9999-9999 | (99) 9999-9999</p> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<?php
/**
 * 1 - tipo retangular;
 * 2 - tipo redondo;
 */
$tipo_logo = isset($_SESSION["tipo_logo"]) ? $_SESSION["tipo_logo"] : 0;
// var_dump($_SESSION["tipo_logo"]);
?>

<?php if ($tipo_logo == 1) { ?>

    <!-- Navbar com a logo na esquerda -->
<nav class="navbar n1 navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">

    <img class="logo-israel m-2" src="public/assets/img/logo-1.png" alt="Logo Israel" width="190">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav py-0">
            <a href="index.php" class="nav-item nav-link">Principal</a>
            <a href="quem_somos.php" class="nav-item nav-link">Quem somos</a>
            <a href="cursos.php" class="nav-item nav-link">Cursos</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mais informações</a>
                <div class="dropdown-menu m-0">
                    <a href="infra_estrutura.php" class="dropdown-item">Infra-Estrutura</a>
                    <a href="galeria.php" class="dropdown-item">Blog</a>
                    <!-- <a href="pos_graduacao.php" class="dropdown-item">Pós-Graduação</a> -->
                </div>
            </div>
            <a href="contato.php" class="nav-item nav-link">Contato</a>
        </div>
        <!-- <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button> -->

        <!-- <a href="https://siga01.activesoft.com.br/login/?instituicao=ENFISRAEL" class="btn btn-area-do-aluno py-2 px-4 ms-3">Área do Aluno</a> -->

        <a href="#" class="btn btn-primary py-2 px-4 ms-3">Área do Aluno</a>
    </div>
</nav>
<!-- Navbar End -->

<?php } else { ?>

<!-- Navbar com a logo no meio -->
<nav class="navbar n2 navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav py-0">
            <a href="index.php" class="nav-item nav-link">Principal</a>
            <a href="quem_somos.php" class="nav-item nav-link">Quem somos</a>
            <a href="cursos.php" class="nav-item nav-link">Cursos</a>
        </div>
    </div>

    <div class="navbar-brand-container">
        <img class="logo-israel m-2" src="public/assets/img/logo-2.png" alt="Logo Israel" width="65">
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav py-0">
            <!-- <a href="index.php" class="nav-item nav-link">Principal</a>
                <a href="quem_somos.php" class="nav-item nav-link">Quem somos</a>
                <a href="cursos.php" class="nav-item nav-link">Cursos</a> -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mais informações</a>
                <div class="dropdown-menu m-0">
                    <a href="infra_estrutura.php" class="dropdown-item">Infra-Estrutura</a>
                    <a href="galeria.php" class="dropdown-item">Blog</a>
                    <!-- <a href="pos_graduacao.php" class="dropdown-item">Pós-Graduação</a> -->
                </div>
            </div>
            <a href="contato.php" class="nav-item nav-link">Contato</a>
        </div>
        <!-- <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button> -->

        <!-- <a href="https://siga01.activesoft.com.br/login/?instituicao=ENFISRAEL" class="btn btn-area-do-aluno py-2 px-4 ms-3">Área do Aluno</a> -->

        <a href="#" class="btn btn-primary py-2 px-4 ms-3">Área do Aluno</a>
    </div>
</nav>
<!-- Navbar End -->
<?php } ?>


<!-- Botão do WhatsApp -->
<a href="https://wa.me/message/" class="whatsapp-button" target="_blank" title="Conversar no WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->