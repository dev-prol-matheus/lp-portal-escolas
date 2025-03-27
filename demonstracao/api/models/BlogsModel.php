<?php

class BlogsModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Método para cadastrar um blog
    public function cadastrar(Blogs $blog)
    {
        $sql = "INSERT INTO blogs (img, titulo, descricao, data_criacao) 
                VALUES (:img, :titulo, :descricao, :data_criacao)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':img', $blog->get_img());
        $stmt->bindValue(':titulo', $blog->get_titulo());
        $stmt->bindValue(':descricao', $blog->get_descricao());
        $stmt->bindValue(':data_criacao', $blog->get_data_criacao());

        $stmt->execute();

        return $this->pdo->lastInsertId();  // Retorna o ID do novo registro
    }

    // Método para listar todos os blogs
    public function listar_todos()
    {
        $sql = "SELECT * FROM blogs";
        $stmt = $this->pdo->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    public function listar_home()
    {
        $sql = "SELECT id, img, titulo FROM blogs ORDER BY data_criacao DESC LIMIT 4";
        $stmt = $this->pdo->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    // Método para pegar um blog por ID
    public function pegar_por_id($id)
    {
        $sql = "SELECT * FROM blogs WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $blogData = $stmt->fetch();

        if ($blogData) {
            return $blogData;
        }

        return null;
    }

    // Método para atualizar um blog
    public function atualizar($blog)
    {
        $sql = "UPDATE blogs SET img = :img, titulo = :titulo, descricao = :descricao, data_criacao = :data_criacao 
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $blog->get_id());
        $stmt->bindValue(':img', $blog->get_img());
        $stmt->bindValue(':titulo', $blog->get_titulo());
        $stmt->bindValue(':descricao', $blog->get_descricao());
        $stmt->bindValue(':data_criacao', $blog->get_data_criacao());

        return $stmt->execute();
    }

    // Método para deletar um blog
    public function deletar($id)
    {
        $sql = "DELETE FROM blogs WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }
};
