<?php

require_once("../config/conexao.php");

require("../class/Usuarios.php");
require("../models/UsuariosModels.php");

$requisicao = file_get_contents("php://input");
$dados = json_decode($requisicao, true);

$acao = $dados["acao"];

if ($_SERVER["REQUEST_METHOD"] === "POST" && $acao) {

    switch ($acao) {

        case "login":
            $email = isset($dados["email"]) ? $dados["email"] : null;
            $senha = isset($dados["senha"]) ? $dados["senha"] : null;

            $usuarios_model = new UsuariosModel($connection);

            $usuario = $usuarios_model->login($email);
            $verificaSenha = password_verify($senha, $usuario->senha);

            if ($verificaSenha) {
                $_SESSION["nome"] = $usuario->nome;
                $_SESSION["funcao"] = $usuario->senha;
                echo json_encode([
                    "status" => true,
                    "message" => "Logado com sucesso!"
                ]);
            } else {
                echo json_encode([
                    "status" => false,
                    "message" => "E-mail ou senha incorretos."
                ]);
            };
            break;

        case "logout":
            session_destroy();
            echo json_encode([
                "status" => true,
                "message" => "Sessões finalizadas com sucesso!"
            ]);
            break;
    };
} else {
    echo json_encode(["status" => "error", "message" => "Método inválido."]);
};
