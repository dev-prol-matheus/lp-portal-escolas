<?php

class TurnosModel
{
    private $pdo;

    public function __construct($connection)
    {
        $this->pdo = $connection;
    }

    public function cadastrar(Turnos $turno)
    {
        $sql = "INSERT INTO turnos (descricao) 
                VALUES (:descricao)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':descricao', $turno->get_descricao());

        $stmt->execute();

        return (int)$this->pdo->lastInsertId();
    }

    public function ler_todos()
    {
        $sql = "SELECT * FROM turnos";
        $stmt = $this->pdo->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    public function pegar_por_id($turno_id)
    {
        $sql = "SELECT * FROM turnos WHERE turno = :turno";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':turno', $turno_id);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $turnoData = $stmt->fetch();

        if ($turnoData) {
            return $turnoData;
        }

        return null; // Retorna null se não encontrar o turno
    }

    public function atualizar(Turnos $turno)
    {
        $sql = "UPDATE turno 
                SET descricao = :descricao
                WHERE turno = :turno";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':turno', $turno->get_turno());
        $stmt->bindValue(':descricao', $turno->get_descricao());

        return $stmt->execute();
    }

    public function apagar($turno_id)
    {
        $sql = "DELETE FROM turnos WHERE turno = :turno";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':turno', $turno_id);

        return $stmt->execute();
    }
};