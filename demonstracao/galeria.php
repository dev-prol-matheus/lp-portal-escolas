<?php
require_once("api/config/conexao.php");
require("api/models/BlogsModel.php");
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
                <h1 class="display-3 text-white animated zoomIn">Nosso Blog</h1>
                <!-- <a href="" class="h4 text-white">Principal</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Blog</a> -->
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Blog</h5>
                        <h1 class="display-6 mb-4">Fique por dentro do que acontece!</h1>
                    </div>
                </div>

                <?php
                try {
                    // $sql = "SELECT id, img, titulo FROM blogs ORDER BY data_criacao DESC LIMIT 100";
                    // $stmt = $pdo->prepare($sql);
                    // $stmt->execute();
                    // $blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    $model = new BlogsModel($connection);
                    $blogs = $model->listar_todos();

                    foreach ($blogs as $blog) :
                ?>
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
                <?php
                    endforeach;
                } catch (PDOException $e) {
                    echo "Erro: " . $e->getMessage();
                }
                ?>


            </div>
        </div>
    </div>
    <!-- Team End -->

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
    include "public/includes/footer.php";
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