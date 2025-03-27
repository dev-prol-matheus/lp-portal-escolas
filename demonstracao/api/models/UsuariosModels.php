<?php

class UsuariosModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function cadastrar(Usuarios $usuario)
    {
        $sql = "INSERT INTO usuarios (nome, email, senha, funcao) 
                VALUES (:nome, :email, :senha, :funcao)";
        
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':nome', $usuario->get_nome());
        $stmt->bindValue(':email', $usuario->get_email());
        $stmt->bindValue(':senha', $usuario->get_senha());
        $stmt->bindValue(':funcao', $usuario->get_funcao());

        $stmt->execute();

        return $this->pdo->lastInsertId();  // Retorna o ID do novo usuário
    }

    public function listar_todos()
    {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->pdo->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    public function login($email)
    {
        // Query
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":email", $email);
    
        // Executar a consulta
        if (!$stmt->execute()) {
            // Se houver erro na execução da consulta
            echo "Erro na execução da consulta SQL";
            return null;
        }
    
        // Obter o resultado
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // Depuração: veja o que está retornando
        // var_dump($usuario);
    
        // Se o usuário foi encontrado
        if ($usuario) {
            return new Usuarios(
                $usuario['id'],
                $usuario['nome'],
                $usuario['email'],
                $usuario['senha'],
                $usuario['funcao']
            );
        }
    
        // Se não encontrar usuário
        echo "Usuário não encontrado!";
        return null;
    }    

    public function pegar_por_id($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $usuarioData = $stmt->fetch();

        if ($usuarioData) {
            return new Usuarios(
                $usuarioData['id'],
                $usuarioData['nome'],
                $usuarioData['email'],
                $usuarioData['senha'],
                $usuarioData['funcao']
            );
        }

        return null;
    }

    public function atualizar($usuario)
    {
        $sql = "UPDATE usuarios 
                SET nome = :nome, email = :email, senha = :senha, funcao = :funcao 
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $usuario->get_id());
        $stmt->bindValue(':nome', $usuario->get_nome());
        $stmt->bindValue(':email', $usuario->get_email());
        $stmt->bindValue(':senha', $usuario->get_senha());
        $stmt->bindValue(':funcao', $usuario->get_funcao());

        return $stmt->execute();
    }

    public function deletar($id)
    {
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }
}
