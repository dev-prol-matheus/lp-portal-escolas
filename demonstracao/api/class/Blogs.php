<?php

class Blogs
{
    public $id;
    public $img;
    public $titulo;
    public $descricao;
    public $data_criacao;

    public function __construct(
        $id = null,
        $img = null,
        $titulo = null,
        $descricao = null,
        $data_criacao = null
    ) {
        $this->id = $id;
        $this->img = $img;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->data_criacao = $data_criacao;
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

    public function get_img()
    {
        return $this->img;
    }

    public function set_img($img)
    {
        $this->img = $img;
    }

    public function get_titulo()
    {
        return $this->titulo;
    }

    public function set_titulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function get_descricao()
    {
        return $this->descricao;
    }

    public function set_descricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function get_data_criacao()
    {
        return $this->data_criacao;
    }

    public function set_data_criacao($data_criacao)
    {
        $this->data_criacao = $data_criacao;
    }
};