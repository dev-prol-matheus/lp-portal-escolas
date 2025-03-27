<?php

class SegmentosModel
{
    private $pdo;

    public function __construct($connection)
    {
        $this->pdo = $connection;
    }

    public function cadastrar(Segmentos $segmento)
    {
        $sql = "INSERT INTO segmentos (descricao) 
                VALUES (:descricao)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':descricao', $segmento->get_descricao());

        $stmt->execute();

        return (int)$this->pdo->lastInsertId();
    }

    public function ler_todos()
    {
        $sql = "SELECT * FROM segmentos";
        $stmt = $this->pdo->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    public function pegar_por_id($segmento_id)
    {
        $sql = "SELECT * FROM segmentos WHERE segmento = :segmento";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':segmento', $segmento_id);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $segmentoData = $stmt->fetch();

        if ($segmentoData) {
            return $segmentoData;
        }

        return null; // Retorna null se não encontrar o segmento
    }

    public function atualizar(Segmentos $segmento)
    {
        $sql = "UPDATE segmentos 
                SET descricao = :descricao
                WHERE segmento = :segmento";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':segmento', $segmento->get_segmento());
        $stmt->bindValue(':descricao', $segmento->get_descricao());

        return $stmt->execute();
    }

    public function apagar($segmento_id)
    {
        $sql = "DELETE FROM segmentos WHERE segmento = :segmento";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':segmento', $segmento_id);

        return $stmt->execute();
    }
};
