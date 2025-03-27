<?php

class Usuarios
{
    public $id;
    public $nome;
    public $email;
    public $senha;
    public $funcao;

    public function __construct($id = null, $nome = null, $email = null, $senha = null, $funcao = null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->funcao = $funcao;
    }

    // Getters e Setters

    public function get_id()
    {
        return $this->id;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function get_nome()
    {
        return $this->nome;
    }

    public function set_nome($nome)
    {
        $this->nome = $nome;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function set_email($email)
    {
        $this->email = $email;
    }

    public function get_senha()
    {
        return $this->senha;
    }

    public function set_senha($senha)
    {
        $this->senha = $senha;
    }

    public function get_funcao()
    {
        return $this->funcao;
    }

    public function set_funcao($funcao)
    {
        $this->funcao = $funcao;
    }
}
