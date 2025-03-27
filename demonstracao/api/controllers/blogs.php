<?php

require_once("../config/conexao.php");

require("../class/Blogs.php");
require("../models/BlogsModel.php");

$requisicao = file_get_contents("php://input");
$dados = json_decode($requisicao, true);

$acao = $dados["acao"];

if ($_SERVER["REQUEST_METHOD"] === "POST" && $acao) {

    switch ($acao) {

        case "cadastrar":
            $img = isset($dados["img"]) ? $dados["img"] : null;
            $descricao = isset($dados["descricao"]) ? $dados["descricao"] : null;
            $titulo = isset($dados["titulo"]) ? $dados["titulo"] : null;
            $data_criacao = date("Y-m-d H:i:s");

            $blogs_model = new BlogsModel($connection);
            $cadastrar = $blogs_model->cadastrar(new Blogs(null, $img, $titulo, $descricao, $data_criacao));

            if (!$cadastrar) {
                echo json_encode([
                    "status" => false,
                    "message" => "❌ Não foi possível cadastrar o blog."
                ]);
                break;
            };

            echo json_encode([
                "status" => true,
                "message" => "✅ Blog cadastrado com sucesso!"
            ]);
            break;

        case "listar_blogs":
            $blogs_model = new BlogsModel($connection);
            $blogs = $blogs_model->listar_todos();

            echo json_encode([
                "status" => true,
                "blogs" => $blogs
            ]);
            break;

        case "deletar":
            $id_blog = isset($dados["id_blog"]) ? $dados["id_blog"] : null;

            $blogs_model = new BlogsModel($connection);
            $deletar = $blogs_model->deletar($id_blog);

            if (!$deletar) {
                echo json_encode([
                    "status" => false,
                    "message" => "Não foi possível deletar o blog."
                ]);
                break;
            };

            echo json_encode([
                "status" => true,
                "message" => "Blog deletado da lista."
            ]);
            break;
    };
} else {
    echo json_encode(["status" => "error", "message" => "Método inválido."]);
};
