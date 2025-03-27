<?php

require_once("../config/conexao.php");
require_once("../class/Segmentos.php");
require_once("../models/SegmentosModels.php");

$requisicao = file_get_contents("php://input");
$dados = json_decode($requisicao, true);

$acao = $dados["acao"];

if ($_SERVER["REQUEST_METHOD"] == "POST" && $acao) {

    switch ($acao) {

        case "listar_segmentos":
            $segmentos_model = new SegmentosModel($connection);
            $segmentos = $segmentos_model->ler_todos();

            echo json_encode([
                "status" => true,
                "segmentos" => $segmentos
            ]);
            break;
    };
};
