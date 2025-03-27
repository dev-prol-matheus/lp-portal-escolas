<?php

require_once("../config/conexao.php");

require("../class/Clientes.php");
require("../models/ClientesModel.php");

$requisicao = file_get_contents("php://input");
$dados = json_decode($requisicao, true);

$acao = $dados["acao"];

if ($_SERVER["REQUEST_METHOD"] === "POST" && $acao) {

    switch ($acao) {

        case "salvar_inscricao":
            $curso = isset($dados["curso"]) ? $dados["curso"] : null;
            $nome = isset($dados["nome"]) ? $dados["nome"] : null;
            $telefone = isset($dados["telefone"]) ? $dados["telefone"] : null;
            $email = isset($dados["email"]) ? $dados["email"] : null;
            $status = (int)1;
            $data_cadastro = date("Y-m-d H:i:s");
            $latitude = isset($dados["latitude"]) ? $dados["latitude"] : null;
            $longitude = isset($dados["longitude"]) ? $dados["longitude"]: null;
            $endereco = isset($dados["endereco"]) ? $dados["endereco"]: null;

            if (!preg_match("/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑ\s]+$/", $nome)) {
                echo json_encode([
                    "status" => false,
                    "title" => "Erro no nome",
                    "message" => "Por favor, insira nome um válido (apenas letras)."
                ]);
                break;
            }

            if (!preg_match("/^\(?\d{2}\)?[\s-]?\d{4,5}-?\d{4}$/", $telefone)) {
                echo json_encode([
                    "status" => false,
                    "title" => "Erro no telefone",
                    "message" => "Por favor, insira um número de telefone válido."
                ]);
                break;
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo json_encode([
                    "status" => false,
                    "title" => "Erro no e-mail",
                    "message" => "Por favor, insira um e-mail válido."
                ]);
                break;
            }

            $cliente = new Clientes(null, $nome, $telefone, $email, $curso, $status, $data_cadastro, $latitude, $longitude, $endereco);
            $clientes_model = new ClientesModel($connection);

            $inserir_cliente = $clientes_model->cadastrar($cliente);

            if (!$inserir_cliente) {
                echo json_encode([
                    "status" => false,
                    "title" => "❌ Não conseguimos realizar sua inscrição!",
                    "message" => "Ocorreu algum erro na hora de finalizar sua inscrição. Tente novamente mais tarde ou entre em contato conosco."
                ]);
                break;
            };

            echo json_encode([
                "status" => true,
                "title" => "✅ Inscrição realizada com sucesso!",
                "message" => "Agradecemos por se inscrever na nossa instituição. Em breve, entraremos em contato com você!"
            ]);
            break;

        case "atualizar_status_cliente":
            $id = isset($dados["cliente"]) ? $dados["cliente"] : null;
            $status = isset($dados["status"]) ? $dados["status"] : null;

            if (!$id || !$status) {
                echo json_encode([
                    "status" => false,
                    "message" => "Falha na captura de informações necessárias para esta modificação."
                ]);
                break;
            };
            
            $clientes_model = new ClientesModel($connection);
            $atualiza_status = $clientes_model->atualizar_status($id, $status);

            if (!$atualiza_status) {
                echo json_encode([
                    "status" => false,
                    "message" => "Erro ao tentar atualizar status do cliente. Tente novamente mais tarde."
                ]);
                break;
            };

            echo json_encode([
                "status" => true,
                "message" => "Cliente atualizado com sucesso."
            ]);
            break;
    };
} else {
    echo json_encode(["status" => "error", "message" => "Método inválido."]);
}
?>
