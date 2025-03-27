<?php

$requisicao = file_get_contents("php://input");
$dados = json_decode($requisicao, true);

$acao = $dados["acao"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($dados["data"])) {
        $data = $dados["data"];

        $datetime = new DateTime();
        $date = $datetime->format("d-m-Y");
        $filename = $dados["file_name"] . $date . ".xls";
        
        header("Content-Type: application/vnd.ms-excel; charset=UTF-8");
        header("Content-Disposition: attachment; filename=\"$filename\"");
        header("Cache-Control: max-age=0");
        
        echo "\xEF\xBB\xBF"; // para UTF-8 BOM
        echo "<table border='1'>";
        
        if (!empty($data) && is_array($data[0])) {
            echo "<tr>";
            foreach ($data[0] as $key => $value) {
                echo "<th>Coluna " . ($key + 1) . "</th>";
            }
            echo "</tr>";
        }
        
        foreach ($data as $row) {
            echo "<tr>";
            foreach ($row as $cell) {
                $cell = $cell === null ? "--" : $cell;
                echo "<td>" . htmlentities($cell, ENT_QUOTES, "UTF-8") . "</td>";
            }
            echo "</tr>";
        }
        
        echo "</table>";
        exit();
    } else {
        echo json_encode(["status" => "error", "message" => "No data received"]);
    };
} else {
    echo json_encode(["status" => "error", "message" => "Método inválido."]);
};
