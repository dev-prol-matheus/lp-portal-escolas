<?php

require_once("../../api/config/conexao.php");
include("../../api/utils/VerificarLogado.php");

include("../../api/models/CursosModel.php");
include("../../api/models/SegmentosModels.php");
include("../../api/models/TurnosModels.php");

$cursos_models = new CursosModel($connection);
$segmentos_models = new SegmentosModel($connection);
$turnos_models = new TurnosModel($connection);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos | Escola de Enfermagem Israel</title>

    <link rel="icon" href="./img/favicon_israel.png" type="image/x-icon">

    <link href="./assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- BootStrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <?php include "includes/header_admin.php"; ?>

    <div class="container mt-5">
        <h2 class="mb-3" style="color: #29166F;">Cadastro de Cursos</h2>
        <p class="mb-4" style="color: #29166F; font-size: 1.1rem;">Nesta área, você pode visualizar os cursos cadastrados e adicionar novos cursos à base de dados. Utilize a busca para encontrar cursos específicos e o botão para cadastrar novos cursos.</p>

        <div class="row mb-3">
            <div class="col-md-8">
                <input type="text" id="searchInput" class="form-control" placeholder="Pesquisar cursos..." style="border-color: #FEB21F;">
            </div>
            <div class="col-md-4 text-md-end text-center mt-3 mt-md-0">
                <!-- Botão que abre a modal -->
                <button class="btn" style="background-color: #FEB21F; color: #FFF;" data-bs-toggle="modal" data-bs-target="#addCourseModal">Cadastrar Novo Curso</button>
            </div>
        </div>

        <table class="table table-bordered table-striped table-hover" id="courseTable">
            <thead style="background-color: #29166F; color: #FFF;">
            <tr>
                <th>Imagem</th>
                <th>Descrição</th>
                <th>Segmento</th>
                <th class="inicio" >Data de Início</th>
                <th>turno</th>
                <th>valor</th>
                <th>Ações</th>
                <!-- <th>Inicio da Turma</th> -->
            </tr>
            </thead>
            <?php 
            $cursos = $cursos_models->ler_todos();
            foreach($cursos as $row) { ?>
                <tr>
                    <td>
                        <img src="<?php echo "./uploads/".$row['img']; ?>" style="max-width: 100% !important; border-radius:5%;">
                    </td>
                    <td class="descricao" ><?php echo $row["descricao"]; ?></td>
                    <td><?php echo $row["descricao_segmento"]; ?></td>
                    <td><?php echo date("d/m/Y", strtotime($row["data_inicio"])); ?></td>
                    <td class="turno" ><?php echo $row["descricao_turno"]; ?></td>
                    <td class="valor" ><?php echo $row["valor"]; ?></td>

                    <td><?php if ($row["status"] == 1): ?>
                            <button class="btn_desativar" onclick="trocarStatus('desativar', <?php echo $row['curso']?>)">Desativar</button>
                        <?php else: ?>
                            <button class="btn_ativar" onclick="trocarStatus('ativar',  <?php echo $row['curso']?>)">Ativar</button>
                        <?php endif; ?>
                            <button class='apagar-btn' onclick="deletarcurso(<?php echo $row['curso']; ?>)">Apagar</button>
                            <button class="acao-btn" onclick="coletarCurso(<?php echo $row['curso']; ?>)" class="btn" style="background-color: #FEB21F; color: #FFF;" data-bs-toggle="modal" data-bs-target="#addUpdateModal">Atualizar</button>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <?php
    include "includes/modals/feedback_admin.php";
    include "includes/modals/cadastrar_cursos.php";
    include "includes/modals/atualizar_cursos.php";
    include "includes/footer_admin.php";
    ?>

    <script src="./assets/js/cursos.js"></script>

    <script>
        // function fetchCourses() {
        //     var xhr = new XMLHttpRequest();
        //     xhr.open('GET', './php/fetch_courses.php', true);

        //     xhr.onload = function() {
        //         if (xhr.status === 200) {
        //             document.getElementById('courseTable').innerHTML = xhr.responseText;
        //         } else {
        //             alert('Erro ao carregar cursos.');
        //         }
        //     };

        //     xhr.send();
        // }

        // Carregar cursos ao carregar a página
        // document.addEventListener('DOMContentLoaded', fetchCourses);

        // Função para filtrar a tabela de acordo com o input de pesquisa
        // document.getElementById('searchInput').addEventListener('keyup', function() {
        //     const searchValue = this.value.toLowerCase();
        //     const rows = document.querySelectorAll('#courseTable tr');

        //     rows.forEach(row => {
        //         const curso = row.cells[1].textContent.toLowerCase();
        //         const descricao = row.cells[2].textContent.toLowerCase();
        //         if (curso.includes(searchValue) || descricao.includes(searchValue)) {
        //             row.style.display = '';
        //         } else {
        //             row.style.display = 'none';
        //         }
        //     });
        // });
    </script>

</body>

</html>