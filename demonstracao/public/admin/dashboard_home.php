<?php

session_start();

include ("../../api/utils/VerificarLogado.php");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de Administração | Escola de Enfermagem Israel</title>

    <link rel="icon" href="./img/favicon_israel.png" type="image/x-icon">

    <link href="css/style.css" rel="stylesheet">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #FFF;
        }
        .development-message {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 50px;
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .development-message h1 {
            color: #29166F;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .development-message p {
            color: #6c757d;
            font-size: 1.25rem;
            margin-bottom: 30px;
        }
        .development-message .footer-message {
            color: #29166F;
            font-size: 1rem;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php 
    include_once "includes/header_dashboard.php";
?>

<div class="container mt-4">
    <div class="text-center development-message">
        <h1 class="display-4">Escola de Enfermagem Israel</h1>
        <!-- <p class="lead">ADMIN</p> -->
    </div>
</div>

<?php 
     include_once "includes/footer_dashboard.php";
 ?>

</body>
</html>