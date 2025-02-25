<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prol Educa | Escolas</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9d26e4abf2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/style/Button.css">
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
    <link rel="stylesheet" href="./assets/style/Span.css">
    <link rel="stylesheet" href="./assets/style/Testimonials.css">
    <link rel="stylesheet" href="./assets/style/main.css">
</head>

<body>

    <nav>
        <section class="container">
            <img src="./assets/img/proleduca-tech.png" href="index.php" alt="Logo Prol Educa" width="120px" height="48px">
            <div class="nav-wrapper">
                <ul>
                    <li><a href="#product">O Portal das Escolas</a></li>
                    <li><a href="#benefits">Benefícios</a></li>
                    <li><a href="#pricing">Preços</a></li>
                    <li><a href="#testimonials">Depoimentos</a></li>
                    <li><a href="#aboutus">O Prol Educa</a></li>
                </ul>
                <button class="call-to-action-button"><i class="fa-brands fa-whatsapp"></i>  Fale Conosco</button>
            </div>
            <button class="open-menu">
                <img src="./assets/img/align-justify.svg" alt="Botão para abrir o menu responsivo.">
            </button>
        </section>
    </nav>

    <script>
        const openMenuButton = document.querySelector('.open-menu');
        const navWrapper = document.querySelector('.nav-wrapper');
        const menuItems = document.querySelectorAll('.nav-wrapper ul li a');

        openMenuButton.addEventListener('click', () => {
            navWrapper.classList.toggle('open');
            openMenuButton.classList.toggle('open');
        });

        menuItems.forEach(item => {
            item.addEventListener('click', () => {
                navWrapper.classList.remove('open');
                openMenuButton.classList.remove('open');
            });
        });
    </script>




    <!-- <section class="responsive-menu-container">
        <div class="responsive-menu">
            <div class="menu-wrapper">
                <img src="./assets/img/logo.png" alt="Logo Prol Educa" width="120px" height="48px">
                <ul>
                    <li><a href="#">O Produto</a></li>
                    <li><a href="#">Benefícios</a></li>
                    <li><a href="#">Preços</a></li>
                    <li><a href="#">Depoimentos</a></li>
                    <li><a href="#">O Prol Educa</a></li>
                </ul>
                <button class="close-menu">Call to Action</button>
            </div>
        </div>
    </section> -->

    <header>
        <section class="container">
            <div class="left">
                <!--<span class="span-title">O Portal das Escolas</span>-->
                <div class="left-wrapper">
                    <h1>Portal de Matrículas Prol Educa</h1>
                    <p>Transforme visitas em matrículas e potencialize suas vendas com um portal estratégico e impactante. Ao otimizar sua presença digital, você atrai novos alunos, converte interesse em matrícula e cria uma experiência que impulsiona os resultados da sua instituição, gerando mais conversões e garantindo crescimento.</p>
                </div>
                <div class="header-buttons">
                    <button class="call-to-action-button"><i class="fa-brands fa-whatsapp"></i> Fale Conosco</button>
                    <a href="#product"><button class="call-to-action-button secondary"><i class="fa-solid fa-plus"></i> Conhecer mais</button></a>
                </div>
            </div>
            <div class="right">
                <img src="./assets/img/portal-para-escolas-captacao-de-alunos.png" alt="Foto do Diretor Prol Educa">
            </div>
        </section>
    </header>

    <section class="advantages" id="advantages">
        <section class="container">
            <div class="card">
                <span>
                    <img src="./assets/img/chapeu.svg" alt="Prol Educa">
                </span>
                <h2>Adquira 37% Mais Alunos</h2>
            </div>
            <div class="card">
                <span>
                    <img src="./assets/img/grafico.svg" alt="Prol Educa">
                </span>
                <h2>Portal 100% Administrável</h2>
            </div>
            <div class="card">
                <span>
                    <img src="./assets/img/chapeu.svg" alt="Prol Educa">
                </span>
                <h2>Multiplique sua receita</h2>
            </div>
        </section>
    </section>

    <section class="product" id="product">
        <section class="container">
            <div class="product-wrapper">
                <span class="span-title">O Portal das Escolas</span>
                <h1>Portal especializado na captação de alunos</h1>
                <p>Nosso portal facilita a captação de alunos, oferecendo ferramentas eficientes para aumentar sua visibilidade e atrair mais estudantes.</p>
            </div>
            <video width="807" height="441" controls>
                <source src="#" type="video/mp4">
                Seu navegador não suporta o elemento de vídeo.
            </video>
            <button class="call-to-action-button"><i class="fa-solid fa-eye"></i> Demostração do Portal</button>
        </section>
    </section>

    <section class="benefits" id="benefits">
        <section class="container">
            <div class="left-benefits">
                <img src="./assets/img/portal-especializado-em-capatacao-de-novos-alunos.png" alt="Prol Educa" width="648" height="755">
            </div>
            <div class="right-benefits">
                <div class="right-wrapper-benefits">
                    <span class="span-title">Benefícios</span>
                    <h1>Benefícios que as instituições terão ao utilizar nosso portal exclusivo</h1>
                    <p>No Prol Educa, somos especializados em captar alunos online. Criamos um portal exclusivo para escolas, com o objetivo de aumentar as matrículas e otimizar a captação de novos alunos de forma prática e eficiente.</p>
                </div>
                <div class="information-benefit">
                    <img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">
                    <div class="benefit-description">
                        <p class="title-benefit">Aumente suas matrículas pela internet em até 5 vezes</p>
                        <p>Nosso portal é especializado em captação de alunos, reunindo as estratégias de sucesso que usamos para levar estudantes às escolas. Com ele, compartilhamos nossa expertise diretamente com as instituições, permitindo que elas mesmas realizem a captação de alunos de forma prática, eficaz e com resultados comprovados."</p></div>
                </div>
                <div class="information-benefit">
                    <img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">
                    <div class="benefit-description">
                        <p class="title-benefit">Portal Administrável</p>
                        <p>Nosso portal é totalmente administrável, permitindo ajustes fáceis. Você pode alterar slides, editar cursos e anos (ex: 1º Ano do Fundamental - Tarde), gerenciar cadastros e o blog de forma simples e intuitiva, além de contar com várias funcionalidades para facilitar o seu dia a dia.</p>
                    </div>
                </div>
                <div class="information-benefit">
                    <img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">
                    <div class="benefit-description">
                        <p class="title-benefit">Benefício ou utilidade do produto</p>
                        <p>Utilizamos estratégias de SEO para garantir que sua instituição seja facilmente encontrada nos principais buscadores, como Google e Bing, posicionando-a entre as primeiras pesquisas da sua região com melhorias contínuas para manter sua presença online otimizada."</p>
                    </div>
                </div>
                <button class="call-to-action-button"><i class="fa-solid fa-file-pdf"></i> Baixar  para ver todos os Benefícios</button>
            </div>
        </section>
    </section>

    <section class="pricing" id="pricing">
        <section class="container">

            <div class="pricing-wrapper">
                <span class="span-title">Precificação</span>
                <h1>Confira Nossos Planos</h1>
                <p>Nossos preços foram cuidadosamente elaborados para ajudar o maior número de instituições a conquistar uma presença significativa no digital, oferecendo soluções acessíveis e eficazes para todas as necessidades.</p>
            </div>



            <div class="cards-pricing">
                <div class="card">
                    <div class="card-wrapper">
                        <h2>Plano Prata</h2>
                        <h1>R$ 199/mês</h1>
                        <p>Ideal para quem está começando a otimizar a captação de alunos.</p>
                    </div>
                    <ul class="card-list">
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Desing sofisticado;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Cadastros nas turmas on-line;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Cadastro de Blog;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Alteração de Slides;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Otimização SEO;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Envio de e-mails de aviso de cadastros;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Hospedagem e domínio inclusos no pacote;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Suporte 24h por Chamado;</li>

                    </ul>
                    <button class="call-to-action-button">Quero esse plano</button>
                </div>
                <div class="card secondary">
                    <div class="card-wrapper">
                        <h2>Plano Ouro</h2>
                        <h1>R$ 249/mês</h1>
                        <p>Com funcionalidades avançadas para um desempenho ainda mais eficaz.</p>
                    </div>
                    <ul class="card-list">
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Desing sofisticado;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Cadastros nas turmas on-line;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Cadastro de Blog;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Alteração de Slides;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Hospedagem e domínio inclusos no pacote;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24"><strong>Integração com o WhatsApp da instituição;</strong></li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Envio de e-mails de aviso de cadastros;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24"><strong>Envio de mensagem pelo WhatsApp de aviso de cadastros;</strong></li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24"><strong>Otimização contínua de SEO;</strong></li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24"><strong>Atualização contínua do design do portal, garantindo uma experiência visual sempre moderna e otimizada;</strong></li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24"><strong>Suporte 24h por Chamado e Chat;</strong></li>
                    </ul>
                    <button class="call-to-action-button">Quero esse plano</button>
                </div>
                <div class="card">
                    <div class="card-wrapper">
                        <h2>Plano Platina - <i class="fa-solid fa-brain"></i></h2>
                        <h1>R$ 389/mês</h1>
                        <p>Nosso pacote completo, oferecendo todas as ferramentas e suporte para resultados excepcionais.</p>
                    </div>
                    <ul class="card-list">
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Desing sofisticado;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Cadastros nas turmas on-line;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Cadastro de Blog;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Alteração de Slides;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24"><strong><u>Mapa de Calor;</u></strong></li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Hospedagem e domínio inclusos no pacote;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24"><strong>Integração com o WhatsApp da instituição;</strong></li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24">Envio de e-mails de aviso de cadastros;</li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24"><strong>Envio de mensagem pelo WhatsApp de aviso de cadastros;</strong></li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24"><strong>Otimização contínua de SEO;</strong></li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24"><strong><u>Atendente virtual com IA via WhatsApp, treinada especificamente para atender às necessidades da sua instituição, oferecendo um suporte eficiente e personalizado.</u>
                        </strong></li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24"><strong><u>Consultoria de Blog para melhorar SEO;</u></strong></li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24"><strong>Atualização contínua do design do portal, garantindo uma experiência visual sempre moderna e otimizada;</strong></li>
                        <li><img src="./assets/img/check.svg" alt="Prol Educa" width="24" height="24"><strong>Suporte 24h por Chamado e Chat;</strong></li>
                    </ul>
                    <button class="call-to-action-button">Quero esse plano </button>
                </div>

            </div>
        </section>
    </section>

    <section class="testimonials" id="testimonials">
        <section class="container">

            <div class="testimonials-left">
                <span class="span-title">Depoimentos</span>
                <h1>Depoimentos das instituições</h1>
                <p>Confira os depoimentos de nossos clientes sobre o portal e como ele tem transformado a captação de alunos em suas instituições.</p>
            </div>

            <div class="testimonials-right">
                
                <div class="testimonial">
                    <img src="assets/img/talita-diretora-israel.jpg" alt="diretor" width="80" height="80">
                    <div class="testimonial-wrapper">
                        <div class="name-description">
                            <p>Talita - Diretora</p>
                            <span>Escola de Enfermagem Israel</span>
                        </div>
                        <p>“Assim que começamos a usar o portal do Prol Educa, percebi que poderia administrar o site de forma completa. A cada mês, estamos recebendo mais acessos e cadastros, e consigo gerenciar tudo de maneira simples, o que nos dá uma grande autonomia. Além disso, o suporte é rápido e sempre acessível.”</p>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="contact">
        <section class="container">
            <div class="contact-wrapper">
                <span class="span-title">Contato</span>
                <h1>Gostaria de agendar uma reunião?</h1>
                <p>Quer saber como nosso portal de captação de alunos pode ajudar sua instituição? Agende uma reunião e descubra como aumentar suas matrículas de forma simples e eficaz.</p>
            </div>
            <form class="form-contact">
                <input type="text" id="nome" name="nome" placeholder="Nome" required>
                <input type="email" id="email" name="email" placeholder="E-mail" required>
                <input type="text" id="whatsapp" name="whatsapp" placeholder="Whatsapp" required>
                <input type="date" id="whatsapp" name="whatsapp" placeholder="Whatsapp" required>
                <button class="call-to-action-button" type="button">Marcar Reunião</button>
            </form>
        </section>
    </section>

    <section class="aboutus" id="aboutus">
        <section class="container">
            <div class="about-left">
                <span class="span-title">O Prol Educa</span>
                <h1>Conheça o Prol Educa</h1>
                <p> Somos uma Startup Pernambucana que trabalha em Prol da educação.

"Ajudamos famílias que sonham em matricular seus filhos e não teriam condições de arcar com as mensalidades integrais nas instituições de ensino privadas".

Já conseguimos impactar mais de 20 mil famílias beneficiadas com as bolsas de estudos de até 80% de desconto, em escolas, faculdades, cursos técnicos e cursos de idiomas.</p>
            </div>
            <div class="about-right">
                <img src="./assets/img/proleduca.png" alt="Prol Educa" width="600" height="373">
            </div>
        </section>
    </section>

    <section class="partners">
        <section class="container">
            <img src="./assets/img/ambevvoa.png" alt="Ambev VOA" width="132" height="46">
            <img src="./assets/img/bndes.png" alt="BNDES" width="163" height="78">
            <img src="./assets/img/estacaohack.png" alt="Estação Hack" width="162" height="38">
            <img src="./assets/img/startupne.png" alt="Startup NE" width="132" height="75">
            <img src="./assets/img/td_impacta.png" alt="TD Impacta" width="164" height="26">
            <img src="./assets/img/vumborastartups.png" alt="Vum Bora Startup" width="132" height="67">
        </section>
    </section>

    <footer>
        <section class="container">
            <div class="footer-left">
                <img src="./assets/img/proleduca-tech-contorno-branco.png" alt="Prol Educa" width="231" height="92">
                <!-- <img src="./assets/img/proleduca-tech-logo-branco.png" alt="Prol Educa" width="231"> -->
                <p>Copyright 2025. Prol Educa Soluções Educacionais</p>
            </div>
            <div class="footer-right">
                <div class="footer-links">
                    <h2>Links do Footer</h2>
                    <a href="#">Lorem Ipsum</a>
                    <a href="#">Lorem Ipsum</a>
                    <a href="#">Lorem Ipsum</a>
                </div>
                <div class="footer-links">
                    <h2>Links do Footer</h2>
                    <a href="#">Lorem Ipsum</a>
                    <a href="#">Lorem Ipsum</a>
                    <a href="#">Lorem Ipsum</a>
                </div>
                <div class="footer-links">
                    <h2>Links do Footer</h2>
                    <a href="#">Lorem Ipsum</a>
                    <a href="#">Lorem Ipsum</a>
                    <a href="#">Lorem Ipsum</a>
                </div>

            </div>
        </section>
    </footer>

</body>

</html>