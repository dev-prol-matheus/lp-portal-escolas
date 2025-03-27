<?php

class Clientes
{
    public $id;
    public $nome;
    public $telefone;
    public $email;
    public $curso;
    public $status;
    public $data_cadastro;
    public $latitude;
    public $longitude;
    public $endereco;

    public function __construct(
        $id=null,
        $nome=null,
        $telefone=null,
        $email=null,
        $curso=null,
        $status=null,
        $data_cadastro=null,
        $latitude=null,
        $longitude=null,
        $endereco=null
    ) {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->curso = $curso;
        $this->status = $status;
        $this->data_cadastro = $data_cadastro;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->endereco = $endereco;
    }

    // Getters e Setters

    public function get_id()
    {
        return $this->id;
    }

    public function set_id(?int $id)
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

    public function get_telefone()
    {
        return $this->telefone;
    }

    public function set_telefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function set_email($email)
    {
        $this->email = $email;
    }

    public function get_curso()
    {
        return $this->curso;
    }

    public function set_curso($curso)
    {
        $this->curso = $curso;
    }

    public function get_status()
    {
        return $this->status;
    }

    public function set_status($status)
    {
        $this->status = $status;
    }

    public function get_data_cadastro()
    {
        return $this->data_cadastro;
    }

    public function set_data_cadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;
    }
    public function get_latitude()
    {
        return $this->latitude;
    }

    public function set_latitude($latitude)
    {
        $this->latitude = $latitude;
    }
    public function get_longitude()
    {
        return $this->longitude;
    }

    public function set_longitude($longitude)
    {
        $this->longitude = $longitude;
    }
    public function get_endereco()
    {
        return $this->endereco;
    }

    public function set_endereco($endereco)
    {
        $this->endereco = $endereco;
    }
};