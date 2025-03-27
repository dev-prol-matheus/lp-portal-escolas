<?php

require_once("../config/conexao.php");
require_once("../class/Turnos.php");
require_once("../models/TurnosModels.php");

$requisicao = file_get_contents("php://input");
$dados = json_decode($requisicao, true);

$acao = $dados["acao"];

if ($_SERVER["REQUEST_METHOD"] == "POST" && $acao) {

    switch ($acao) {

        case "listar_segmentos":
            $turno_model = new TurnosModels($connection);
            $turnos = $turno_model->ler_todos();

            echo json_encode([
                "status" => true,
                "turnos" => $turnos
            ]);
            break;
    };
};