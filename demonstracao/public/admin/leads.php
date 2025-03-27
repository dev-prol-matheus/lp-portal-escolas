<?php

require_once("../../api/config/conexao.php");
include("../../api/utils/VerificarLogado.php");

include("../../api/models/ClientesModel.php");
include("../../api/models/StatusInscricaoModel.php");

$filterCurso = isset($_POST["filter_curso"]) ? $_POST["filter_curso"] : "";
$filterStatus = isset($_POST["filter_status"]) ? $_POST["filter_status"] : "";

$clientesModel = new ClientesModel($connection);
$data = $clientesModel->ler_todos($filterCurso, $filterStatus);
$status_inscricao_model = new StatusInscricaoModel($connection);
$status_inscricao = $status_inscricao_model->listar_todos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leads Cadastrados | Escola de Enfermagem Israel</title>
    <link rel="icon" href="./img/favicon_israel.png" type="image/x-icon">
    <link href="./assets/css/style.css" rel="stylesheet">

    <!-- BootStrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <?php include "includes/header_admin.php"; ?>

    <div class="container my-5">
        <h2 class="mb-3" style="color: #29166F;">Lista de Usuários Cadastrados</h2>
        <p class="mb-4" style="color: #29166F; font-size: 1.1rem;">Confira a lista de usuários que se cadastraram no site e estão aguardando aprovação. Estes dados são essenciais para a gestão e análise de usuários.</p>

        <!-- Filtros -->
        <form id="filter_form" method="POST" class="mb-4 filter-form">
            <div class="filters">
                <input type="text" name="filter_curso" id="filter_curso" class="form-control" placeholder="Filtrar por curso" value="<?php echo htmlspecialchars($filterCurso); ?>">
                <select name="filter_status" id="filter_status" class="form-select" onchange="aplicarFiltro('filter_form')">
                    <option value="">Todos</option>
                    <?php foreach ($status_inscricao as $status): ?>
                        <option value="<?php echo $status["status"]; ?>" <?php echo $filterStatus == $status["status"] ? "selected" : ""; ?>><?php echo $status["descricao"]; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="action-buttons">
                <button type="submit" class="btn btn-primary">Aplicar Filtros</button>
                <!-- <a href="../../api/utils/ExportarTabelas.php?filter_curso=<?php echo urlencode($filterCurso); ?>&filter_status=<?php echo urlencode($filterStatus); ?>" class="btn btn-success">Exportar CSV</a> -->
                <a class="btn btn-success" onclick="exportarTabelas('tabela-leads')">Exportar</a>
            </div>
        </form>

        <div class="table_responsive">
            <table class="table table-bordered table-striped table-hover" id="tabela-leads">
                <thead>
                    <tr>
                        <th scope="col">Curso</th>
                        <th class="nome" scope="col">Nome Completo</th>
                        <th class="telefone" scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Endereço</th>
                        <th class="cadastro" scope="col">Data de Cadastro</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($data)): ?>
                        <?php foreach ($data as $row): ?>
                            <?php
                            // Define a classe do status baseado no valor
                            $statusOptions = [
                                1 => ["class" => "badge badge-warning bg-warning"],
                                2 => ["class" => "badge badge-success bg-success"],
                                3 => ["class" => "badge badge-danger bg-danger"],
                                4 => ["class" => "badge badge-primary bg-primary"]
                            ];
                            $statusClass = $statusOptions[$row["status"]]["class"];
                            // $statusText = $statusOptions[$row["status"]]["text"];

                            $datetime = new DateTime($row["data_cadastro"]);
                            $data_cadastro = $datetime->format("d/m/Y H:i:s");

                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row["descricao"]); ?></td>
                                <td><?php echo htmlspecialchars($row["nome"]); ?></td>
                                <td><?php echo htmlspecialchars($row["telefone"]); ?></td>
                                <td><?php echo htmlspecialchars($row["email"]); ?></td>
                                <td><?php echo $row["endereco"] ? htmlspecialchars($row["endereco"]) : "Endereço não informado"; ?></td>
                                <td class="restrict"><?php echo $data_cadastro; ?></td>
                                <td>
                                    <span class="<?php echo $statusClass; ?>" style="font-size: 1rem; padding: 5px;"><?php echo $row["descricao_status"]; ?></span>
                                </td>
                                <td class="restrict">

                                    <form>
                                        <div class="form-group">
                                            <select name="status" id="status-cliente" class="form-select" required>
                                                <?php foreach ($status_inscricao as $status): ?>
                                                    <option value="<?php echo $status["status"]; ?>" <?php echo $row["status"] == $status["status"] ? "selected" : ""; ?>><?php echo $status["descricao"]; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <button type="button" onclick="atualizarStatusCliente(<?php echo $row['id'] ?>)" class="btn btn-primary mt-2">Atualizar Status</button>
                                    </form>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center">Nenhum resultado encontrado</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php
    include "includes/footer_admin.php";
    ?>

    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/clientes.js"></script>
    <script src="./assets/js/exportarTabelas.js"></script>

</body>

</html>