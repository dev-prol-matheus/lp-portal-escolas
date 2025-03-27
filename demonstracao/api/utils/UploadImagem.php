<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Defina o diretório onde as imagens serão armazenadas
    $diretorio = "../../public/admin/uploads/";

    // Verifique se o arquivo foi enviado corretamente
    if (isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] == 0) {
        $nomeArquivo = $_FILES["imagem"]["name"];
        $caminhoTmp = $_FILES["imagem"]["tmp_name"];
        $tamanho = $_FILES["imagem"]["size"];
        $tipo = $_FILES["imagem"]["type"];

        // Defina os tipos de imagem permitidos
        $tiposPermitidos = ["image/jpeg", "image/png"];

        // Verifique se o tipo do arquivo é permitido
        if (in_array($tipo, $tiposPermitidos)) {
            // Gere um nome único para o arquivo
            $novoNome = uniqid() . "-" . basename($nomeArquivo);
            $caminhoFinal = $diretorio . $novoNome;

            // Mova o arquivo para o diretório final
            if (move_uploaded_file($caminhoTmp, $caminhoFinal)) {
                echo json_encode([
                    "status" => true,
                    "message" => "Imagem cadastrada com sucesso!",
                    "nome_imagem" => $novoNome
                ]);
            } else {
                echo json_encode([
                    "status" => false,
                    "message" => "Erro ao mover o arquivo para o diretório de upload.",
                    "nome_imagem" => $novoNome
                ]);
            };
        } else {
            echo json_encode([
                "status" => false,
                "message" => "Tipo de arquivo inválido. Apenas imagens JPG, PNG são permitidas."
            ]);
        };
    } else {
        echo "Erro no envio do arquivo. Código de erro: " . $_FILES["imagem"]["error"];
    };
};
