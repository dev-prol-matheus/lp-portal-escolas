<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prol Educa | Escolas</title>

    <link rel="stylesheet" href="./assets/style/AboutUs.css">
    <link rel="stylesheet" href="./assets/style/Advantages.css">
    <link rel="stylesheet" href="./assets/style/Benefits.css">
    <link rel="stylesheet" href="./assets/style/Contact.css">
    <link rel="stylesheet" href="./assets/style/Footer.css">
    <link rel="stylesheet" href="./assets/style/Header.css">
    <link rel="stylesheet" href="./assets/style/NavBar.css">
    <link rel="stylesheet" href="./assets/style/Partners.css">
    <link rel="stylesheet" href="./assets/style/Pricing.css">
    <link rel="stylesheet" href="./assets/style/Product.css">
    <link rel="stylesheet" href="./assets/style/Testimonials.css">
</head>
<body>

    <nav class="navbar">
        <!-- Logo -->
        <div class="logo">
            <a href="index.php"><img src="./assets/img/logo.png" alt="Logo" class="logo-img"></a>
        </div>

        <!-- Links de navegação -->
        <ul class="nav-links">
            <li><a href="#">O Produto</a></li>
            <li><a href="#">Benefícios</a></li>
            <li><a href="#">Preços</a></li>
            <li><a href="#">Depoimentos</a></li>
            <li><a href="#">O Prol Educa</a></li>
            <li><a href="#" class="highlight">Entre em Contato</a></li>
        </ul>

        <!-- Ícone do menu hambúrguer -->
        <div class="hamburger" onclick="toggleMenu()">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>

    <script>
        // Função para alternar o menu hambúrguer
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }
    </script>
</body>
</html>