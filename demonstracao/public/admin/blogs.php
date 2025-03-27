<?php

require_once("../../api/config/conexao.php");
include("../../api/utils/VerificarLogado.php");

include("../../api/models/BlogsModel.php");

$blogs_models = new BlogsModel($connection);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola de Enfermagem Israel | Escola Modelo</title>

    <link rel="icon" href="./img/favicon_israel.png" type="image/x-icon">
    <link href="./assets/css/style.css" rel="stylesheet">
    <!-- BootStrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Tiny -->
    <script src="https://cdn.tiny.cloud/1/05f1iwe1axohi5q2ftelg3j68iclddzyq5um48zm9nwyrk1k/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>

    <?php include "includes/header_admin.php"; ?>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: [
                // Core editing features
                'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'link', 'lists', 'searchreplace', 'visualblocks', 'wordcount',
                // Your account includes a free trial of TinyMCE premium features
                // Try the most popular premium features until Feb 24, 2025:
                
            ],
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
        });
    </script>

    <div class="container mt-5">
        <h2 class="mb-3" style="color: #29166F;">Cadastro de Blog</h2>
        <p class="mb-4" style="color: #29166F; font-size: 1.1rem;">Nesta área, você pode visualizar os blogs cadastrados e adicionar novos blogs à base de dados. Utilize a busca para encontrar blogs específicos e o botão para cadastrar novos blogs.</p>

        <div class="row mb-3">
            <div class="col-md-8">
                <input type="text" id="searchInput" class="form-control" placeholder="Pesquisar blogs..." style="border-color: #FEB21F;">
            </div>
            <div class="col-md-4 text-md-end text-center mt-3 mt-md-0">
                <!-- Botão que abre a modal -->
                <button class="btn" style="background-color: #FEB21F; color: #FFF;" data-bs-toggle="modal" data-bs-target="#addBlogModal">Cadastrar Novo Blog</button>
            </div>
        </div>

        <table class="table table-bordered table-striped table-hover" id="BlogsList">
            <thead style="background-color: #29166F; color: #FFF;">
                <tr>
                    <th>Imagem</th>
                    <th class="titulo">Título</th>
                    <th class="descricao" >Descrição</th>
                    <th>Data de Criação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $blogs = $blogs_models->listar_todos();
                foreach ($blogs as $row) {;
                ?>
                    <tr>
                        <td><img src="<?php echo "./uploads/" . $row['img']; ?>" alt='Imagem do Blog' style='max-width: 100px;'></td>
                        <td><?php echo htmlspecialchars($row["titulo"]); ?></td>
                        <td><?php echo $row["descricao"]; ?></td>
                        <td><?php echo date('d/m/Y', strtotime($row["data_criacao"])); ?></td>
                        <td>
                            <button class='btn btn-danger' onclick="deletarBlog(<?php echo $row['id']; ?>)">Apagar</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <?php
    include "includes/modals/feedback_admin.php";
    include "includes/modals/cadastrar_blogs.php";
    include "includes/footer_admin.php";
    ?>

    <script src="./assets/js/blogs.js"></script>
</body>

</html>