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
    <link rel="stylesheet" href="./assets/style/main.css">
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

    <header>
        <div class="left-side">
            <span>Lorem ipsum dolor sit amet</span>
            <h1>Gerencie Seus Leads de forma eficiente</h1>
            <p>Transforme a gestão de seus leads com um painel administrativo intuitivo e poderoso. Controle, acompanhe e otimize seus processos de vendas diretamente de um único lugar.</p>
            <div class="buttons">
                <button>Call to Action</button>
                <button class="btn2">Call secundário</button>
            </div>
        </div>
        <div class="right-side">
            <img src="./assets/img/foto-diretor.png" alt="Prol Educa">
        </div>
    </header>

    <section>
        <div class="advantages">
            <span><img src="./assets/img/chapeu.svg" alt="Prol Educa"></span>
            <p>Adquira mais alunos</p>
        </div>
        <div class="advantages">
            <span><img src="./assets/img/grafico.svg" alt="Prol Educa"></span>
            <p>Painel administrativo</p>
        </div>
        <div class="advantages">
            <span><img src="./assets/img/chapeu.svg" alt="Prol Educa"></span>
            <p>Multiplique sua receita</p>
        </div>
    </section>

    <section class="product">
        <span>O Produto</span>
        <h1>Vídeo de apresentação do produto</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <video controls>
            <source src="product-video.mp4" type="video/mp4">
            Seu navegador não suporta vídeos.
        </video>
        <button>Call Action to Button</button>
    </section>



    <script>
        // Função para alternar o menu hambúrguer
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }
    </script>
</body>
</html>