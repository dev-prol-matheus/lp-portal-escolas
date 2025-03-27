<?php
// Incluir o arquivo de conexão com o banco de dados
require_once ("api/config/conexao.php");
include("api/models/BlogsModel.php");

// Função para converter URLs em links clicáveis e aplicar formatação adicional
// function formatarTexto($texto) {
//     // Converter URLs em links clicáveis
//     $texto = preg_replace(
//         '/(https?:\/\/[^\s]+)/',
//         '<a href="$1" target="_blank">$1</a>',
//         $texto
//     );

//     // Adicionar quebras de linha para novas linhas
//     $texto = nl2br($texto);

//     // Substituições para aplicar formatação em negrito para todos os ícones
//     $substituicoes = [
//         '🚨' => '<strong>🚨</strong>',
//         '🎓' => '<strong>🎓</strong>',
//         '🧠' => '<strong>🧠</strong>',
//         '🛡️' => '<strong>🛡️</strong>',
//         '💡' => '<strong>💡</strong>',
//         '💰' => '<strong>💰</strong>',
//         '❤️' => '<strong>❤️</strong>',
//         '✨' => '<strong>✨</strong>',
//         '📍' => '<strong>📍</strong>',
//         '🚀' => '<strong>🚀</strong>',
//         'Inscreva-se já' => '<strong>Inscreva-se já</strong>',
//     ];

//     // Aplicar as substituições
//     $texto = str_replace(array_keys($substituicoes), array_values($substituicoes), $texto);

//     return $texto;
// };

$blog_id = isset($_GET['id']) ? $_GET['id'] : null;

// Verificar se o ID do blog foi fornecido
if (!isset($blog_id) || empty($blog_id)) {
    echo "ID do blog não fornecido.";
    exit;
};

$blogs_model = new BlogsModel($connection);
$blog = $blogs_model->pegar_por_id($blog_id);

// try {
//     // Preparar a consulta para buscar o blog com base no ID fornecido
//     $sql = "SELECT img, titulo, descricao FROM blogs WHERE id = :id";
//     $stmt = $pdo->prepare($sql); // Preparar a instrução
//     $stmt->bindParam(':id', $blog_id, PDO::PARAM_INT); // Associar o parâmetro
//     $stmt->execute(); // Executar a instrução
    
//     // Buscar o resultado da consulta
//     $blog = $stmt->fetch(PDO::FETCH_ASSOC);

//     if (!$blog) {
//         echo "Blog não encontrado.";
//         exit;
//     }
// } catch (PDOException $e) {
//     // Capturar e exibir erros caso algo dê errado com a consulta
//     echo "Erro ao consultar blog: " . $e->getMessage();
// }

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    
    <title><?php echo htmlspecialchars($blog['titulo']); ?> - Blog</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
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
    
    <style>
        /* CSS para garantir que links longos quebrem corretamente */
        a {
            word-wrap: break-word;
            overflow-wrap: break-word;
            word-break: break-all;
        }
        
        /* Ajuste para imagem não esticar */
        .img-container img {
            max-width: 100%;
            height: auto;
            object-fit: contain; /* Manter proporções da imagem */
        }
        
        /* Garantir que o texto não ultrapasse o footer */
        .blog-content {
            margin-bottom: 100px; /* Distância do texto para o footer */
        }
    </style>
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
                <h1 class="display-3 text-white animated zoomIn">Blog</h1>
                <!-- <a href="index.php" class="h4 text-white">Principal</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="blog.php?id=<?php // echo htmlspecialchars($blog_id); ?>" class="h4 text-white">Blog</a> -->
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp blog-content" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title mb-4">
                <h5 class="position-relative d-inline-block text-primary text-uppercase">Nosso Blog</h5>
                <h1 class="display-5 mb-0 text-primary"><?php echo htmlspecialchars($blog['titulo']); ?></h1>
            </div>
            <div>
                <div>
                    <div class="conteiner_principal">
                        <img class="background-image" data-wow-delay="0.9s" src="public/admin/uploads/<?php echo htmlspecialchars($blog['img']); ?>" alt="Blog Image">
                    </div>
                </div>
                <div class="text-overlay">
                    <p >
                        <!-- <?php // echo formatarTexto(htmlspecialchars($blog['descricao'])); ?> -->
                        <?php echo $blog['descricao']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

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

    <!-- Template JavaScript -->
    <script src="public/assets/js/template.js"></script>
</body>

</html>