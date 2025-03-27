<?php

require_once("../config/conexao.php");

require("../class/Banners.php");
require("../models/BannersModel.php");

$requisicao = file_get_contents("php://input");
$dados = json_decode($requisicao, true);

$acao = $dados["acao"];

if ($_SERVER["REQUEST_METHOD"] === "POST" && $acao) {

    switch ($acao) {

        case "cadastrar":
            $img = isset($dados["img"]) ? $dados["img"] : null;
            $indice = 0;

            $banner_model = new BannersModel($connection);
            $cadastrar = $banner_model->cadastrar(new Banners(null, $img, $indice));

            if (!$cadastrar) {
                echo json_encode([
                    "status" => false,
                    "message" => "❌ Não foi possível cadastrar o banner."
                ]);
                break;
            };

            echo json_encode([
                "status" => true,
                "message" => "✅ Banner cadastrado com sucesso!"
            ]);
            break;

        case "definir_principal":
            $id = isset($dados["id"]) ? $dados["id"] : null;

            $banner_model = new BannersModel($connection);

            $definir_secondarios = $banner_model->definirSecondarios();
            $definir_principal = $banner_model->definirPrincipal($id);

            if (!$definir_principal) {
                echo json_encode([
                    "status" => false,
                    "message" => "❌ Não foi possível definir banner como principal."
                ]);
                break;
            };

            echo json_encode([
                "status" => true,
                "message" => "✅ Banner definido como principal. Para visualizar a alteração, basta redirecionar até a Página Principal do site."
            ]);
            break;
        case "deletar":
            $id_banner = isset($dados["id_banner"]) ? $dados["id_banner"] : null;

            $banner_model = new BannersModel($connection);
            $deletar = $banner_model->deletar($id_banner);

            if (!$deletar) {
                echo json_encode([
                    "status" => false,
                    "message" => "❌ Não foi possível deletar o banner."
                ]);
                break;
            };

            echo json_encode([
                "status" => true,
                "message" => "✅ banner deletado da lista."
            ]);
            break;
    };
} else {
    echo json_encode(["status" => "error", "message" => "Método inválido."]);
};
