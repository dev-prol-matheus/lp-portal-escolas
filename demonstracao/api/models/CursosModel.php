<?php

class CursosModel
{
    private $pdo;

    public function __construct($connection)
    {
        $this->pdo = $connection;
    }

    public function cadastrar(Cursos $curso): int
    {
        $sql = "INSERT INTO cursos (img, descricao, segmento, data_inicio, turno, valor, status) 
                VALUES (:img, :descricao, :segmento, :data_inicio, :turno, :valor, :status)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':img', $curso->get_img());
        $stmt->bindValue(':descricao', $curso->get_descricao());
        $stmt->bindValue(':segmento', $curso->get_segmento());
        $stmt->bindValue(':data_inicio', $curso->get_data_inicio());
        $stmt->bindValue(':turno', $curso->get_turno());
        $stmt->bindValue(':valor', $curso->get_valor());
        $stmt->bindValue(':status', $curso->get_status());

        $stmt->execute();

        return (int)$this->pdo->lastInsertId();
    }

    public function ler_todos(): array
    {
        $sql = "SELECT c.*, s.descricao as descricao_segmento, t.descricao as descricao_turno FROM cursos c
                INNER JOIN segmentos s on s.segmento=c.segmento
                INNER JOIN turnos t on t.turno=c.turno";
        $stmt = $this->pdo->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        

        return $stmt->fetchAll();
    }

    public function ler_por_id(int $curso_id): ? array
    {
        $sql = "SELECT * FROM cursos WHERE curso = :curso";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':curso', $curso_id);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $cursoData = $stmt->fetch();

        if ($cursoData) {
            return $cursoData;
        }

        return null;
    }

    public function filtrar($filtro): ?array
    {
        $sql = "SELECT * FROM cursos WHERE 1=1 $filtro";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $cursoData = $stmt->fetchAll();

        if ($cursoData) {
            return $cursoData;
        }

        return null;
    }

    public function atualizar(Cursos $curso): bool
    {
        $sql = "UPDATE cursos 
                SET curso = :curso, img = :img, descricao = :descricao, segmento = :segmento, turno = :turno, valor = :valor, data_inicio = :data_inicio 
                WHERE curso = :curso";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':curso', $curso->get_curso());
        $stmt->bindValue(':img', $curso->get_img());
        $stmt->bindValue(':descricao', $curso->get_descricao());
        $stmt->bindValue(':segmento', $curso->get_segmento());
        $stmt->bindValue(':turno', $curso->get_turno());
        $stmt->bindValue(':valor', $curso->get_valor());
        $stmt->bindValue(':data_inicio', $curso->get_data_inicio());

        return $stmt->execute();
    }

    public function deletar(int $curso_id): bool
    {
        $sql = "DELETE FROM cursos WHERE curso = :curso";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':curso', $curso_id);

        return $stmt->execute();
    }

    public function desativar($id): bool
    {
        $sql = "UPDATE cursos SET status = 0 WHERE curso = :curso";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':curso', $id);

        return $stmt->execute();
    }
    public function ativar ($id): bool
    {
        $sql = "UPDATE cursos SET status = 1 WHERE curso = :curso";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':curso', $id);
        
        return $stmt->execute();
    } 

    public function ler_todos_home(): array
    {
        $sql = "SELECT c.*, s.descricao as descricao_segmento, t.descricao as descricao_turno FROM cursos c
                INNER JOIN segmentos s on s.segmento=c.segmento
                INNER JOIN turnos t on t.turno=c.turno
                WHERE c.status = 1";
        $stmt = $this->pdo->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        

        return $stmt->fetchAll();
    }
};