<?php

class StatusInscricaoModel
{
    private $pdo;

    public function __construct($connection)
    {
        $this->pdo = $connection;
    }

    public function inserir(StatusInscricao $statusInscricao): int
    {
        $sql = "INSERT INTO status_inscricao (descricao) VALUES (:descricao)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":descricao", $statusInscricao->get_descricao());

        $stmt->execute();

        return (int)$this->pdo->lastInsertId();
    }

    public function listar_todos(): array
    {
        $sql = "SELECT * FROM status_inscricao";
        $stmt = $this->pdo->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    public function buscar_por_id(int $status_id): ?array
    {
        $sql = "SELECT status, descricao FROM status_inscricao WHERE status = :status";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":status", $status_id);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $statusData = $stmt->fetch();

        if ($statusData) {
            return $statusData;
        }

        return null;
    }

    public function atualizar(StatusInscricao $statusInscricao): bool
    {
        $id = $statusInscricao->get_status();
        $descricao = $statusInscricao->get_descricao();

        $sql = "UPDATE status_inscricao SET descricao = :descricao WHERE status = :status";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":status", $id);
        $stmt->bindValue(":descricao", $descricao);

        return $stmt->execute();
    }

    public function excluir(int $status_id): bool
    {
        $sql = "DELETE FROM status_inscricao WHERE status = :status";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":status", $status_id);

        return $stmt->execute();
    }
};