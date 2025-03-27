<?php
include '../../php/conexao.php'; // Certifique-se de que o caminho está correto

// Verifique se a variável $pdo está definida
if (!isset($pdo)) {
    die("Falha ao incluir o arquivo de conexão.");
}

// Verifique se os filtros foram passados via GET
$filterCurso = isset($_GET['filter_curso']) ? $_GET['filter_curso'] : '';
$filterStatus = isset($_GET['filter_status']) ? $_GET['filter_status'] : '';

$conditions = [];
$params = [];

if ($filterCurso) {
    $conditions[] = "curso LIKE :curso";
    $params[':curso'] = "%$filterCurso%";
}

if ($filterStatus) {
    $conditions[] = "status = :status";
    $params[':status'] = $filterStatus;
}

$sql = "SELECT id, curso, nome, telefone, email, status FROM clientes";

if (!empty($conditions)) {
    $sql .= " WHERE " . implode(' AND ', $conditions);
}

// Adiciona a ordenação de prioridade para o status
$sql .= " ORDER BY 
          CASE 
              WHEN status = 1 THEN 1  -- Pendente
              WHEN status = 3 THEN 2  -- Não Atende
              WHEN status = 2 THEN 3  -- Contatado
              WHEN status = 4 THEN 4  -- Matrícula Realizada
              ELSE 5
          END";

// Preparando a consulta
try {
    $stmt = $pdo->prepare($sql);

    // Bind dos parâmetros de filtro
    foreach ($params as $key => $value) {
        $stmt->bindValue($key, $value);
    }

    // Execute a consulta
    $stmt->execute();

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Verifica se há resultados
    if (!empty($data)) {
        // Define o nome do arquivo CSV
        $filename = "clientes_export_" . date('Y-m-d') . ".csv";

        // Define os cabeçalhos para a exportação do arquivo CSV
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '";');

        // Abre o arquivo de saída
        $output = fopen('php://output', 'w');

        // Escreve o cabeçalho no CSV
        fputcsv($output, ['ID', 'Curso', 'Nome', 'Telefone', 'Email', 'Status']);

        // Escreve os dados no CSV
        foreach ($data as $row) {
            // Converte o status numérico para texto
            switch ($row['status']) {
                case 1:
                    $row['status'] = 'Pendente';
                    break;
                case 2:
                    $row['status'] = 'Contatado';
                    break;
                case 3:
                    $row['status'] = 'Não Atende';
                    break;
                case 4:
                    $row['status'] = 'Matrícula Realizada';
                    break;
                default:
                    $row['status'] = 'Desconhecido';
            }

            fputcsv($output, $row);
        }

        // Fecha o arquivo de saída
        fclose($output);
        exit();
    } else {
        echo "Nenhum dado encontrado para exportar.";
    }
} catch (PDOException $e) {
    echo "Erro ao executar a consulta: " . $e->getMessage();
}

// Feche a conexão
$pdo = null;
?>
