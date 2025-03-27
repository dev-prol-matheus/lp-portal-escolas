<?php

class ClientesModel
{
    private $pdo;

    public function __construct($connection)
    {
        $this->pdo = $connection;
    }

    public function cadastrar(Clientes $cliente): int
    {
        $sql = "INSERT INTO clientes (nome, telefone, email, curso, status, data_cadastro, latitude, longitude, endereco) 
                VALUES (:nome, :telefone, :email, :curso, :status, :data_cadastro, :latitude, :longitude, :endereco)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":nome", $cliente->nome);
        $stmt->bindValue(":telefone", $cliente->telefone);
        $stmt->bindValue(":email", $cliente->email);
        $stmt->bindValue(":curso", $cliente->curso);
        $stmt->bindValue(":status", $cliente->status);
        $stmt->bindValue(":data_cadastro", $cliente->data_cadastro);
        $stmt->bindValue(":latitude", $cliente->latitude);
        $stmt->bindValue(":longitude", $cliente->longitude);
        $stmt->bindValue(":endereco", $cliente->endereco);

        $stmt->execute();

        return (int)$this->pdo->lastInsertId();
    }

    public function ler_todos($curso = null, $status = null): array
    {
        $sql = "SELECT 
                    c.*,
                    cs.*,
                    si.status,
                    si.descricao as descricao_status
                FROM clientes c
                INNER JOIN status_inscricao si on si.status=c.status
                INNER JOIN cursos cs on cs.curso=c.curso";
        $stmt = $this->pdo->query($sql);

        $conditions = [];
        $params = [];

        if ($curso) {
            $conditions[] = "cs.descricao LIKE :descricao";
            $params[":descricao"] = "%$curso%";
        };

        if ($status) {
            $conditions[] = "si.status = :status";
            $params[":status"] = $status;
        };

        if (!empty($conditions)) {
            $sql .= " WHERE " . implode(" AND ", $conditions);
        };

        $sql .= " ORDER BY 
          CASE 
              WHEN si.status = 1 THEN 1  -- Pendente
              WHEN si.status = 3 THEN 2  -- Não Atende
              WHEN si.status = 2 THEN 3  -- Contatado
              WHEN si.status = 4 THEN 4  -- Matrícula Realizada
              ELSE 5
          END, c.data_cadastro DESC";

        $stmt = $this->pdo->prepare($sql);

        foreach ($params as $key => $value) {
            $stmt->bindValue($key, $value);
        };

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }

    public function ler_por_id(int $cliente_id): ?array
    {
        $sql = "SELECT * FROM clientes WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id", $cliente_id);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $clienteData = $stmt->fetch();

        if ($clienteData) {
            return $clienteData;
        }

        return null;
    }

    public function atualizar(Clientes $cliente): bool
    {
        $sql = "UPDATE clientes 
                SET nome = :nome, telefone = :telefone, email = :email, curso = :curso, status = :status 
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id", $cliente->id);
        $stmt->bindValue(":nome", $cliente->nome);
        $stmt->bindValue(":telefone", $cliente->telefone);
        $stmt->bindValue(":email", $cliente->email);
        $stmt->bindValue(":curso", $cliente->curso);
        $stmt->bindValue(":status", $cliente->status ? 1 : 0);

        return $stmt->execute();
    }

    public function atualizar_status($id_cliente, $status): bool
    {
        $sql = "UPDATE clientes SET status = :status WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->bindValue(":id", $id_cliente);
        $stmt->bindValue(":status", $status);

        return $stmt->execute();
    }

    public function deletar(int $cliente_id): bool
    {
        $sql = "DELETE FROM clientes WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id", $cliente_id);

        return $stmt->execute();
    }
}
