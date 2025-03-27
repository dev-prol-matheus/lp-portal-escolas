<?php

class BannersModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Método para cadastrar um banner
    public function cadastrar(Banners $banner)
    {
        $sql = "INSERT INTO banner (imagem, indice) 
                VALUES (:imagem, :indice)";
        
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':imagem', $banner->get_imagem());
        $stmt->bindValue(':indice', $banner->get_indice());

        $stmt->execute();

        return $this->pdo->lastInsertId();  // Retorna o ID do novo registro
    }

    // Método para listar todos os banners
    public function listar_todos()
    {
        $sql = "SELECT * FROM banner order by indice desc";
        $stmt = $this->pdo->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    // Método para pegar um banner por ID
    public function pegar_por_id($id)
    {
        $sql = "SELECT * FROM banner WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $bannerData = $stmt->fetch();

        if ($bannerData) {
            return new Banners(
                $bannerData['id'],
                $bannerData['imagem'],
                $bannerData['indice']
            );
        }

        return null;
    }

    public function listar_principal()
    {
        $sql = "SELECT imagem FROM banner WHERE indice = 1 LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $bannerData = $stmt->fetch();

        if ($bannerData) {
            return $bannerData;
        }

        return null;
    }

    // Método para atualizar um banner
    public function atualizar($banner)
    {
        $sql = "UPDATE banner 
                SET imagem = :imagem, indice = :indice 
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $banner->get_id());
        $stmt->bindValue(':imagem', $banner->get_imagem());
        $stmt->bindValue(':indice', $banner->get_indice());

        return $stmt->execute();
    }

    // Método para deletar um banner
    public function deletar($id)
    {
        $sql = "DELETE FROM banner WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }

    public function definirPrincipal($id)
    {
        $sql = "UPDATE banner SET indice = 1 WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }

    public function definirSecondarios()
    {
        $sql = "UPDATE banner SET indice = 0;";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute();
    }
}
