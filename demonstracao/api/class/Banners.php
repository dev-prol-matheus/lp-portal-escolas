<?php

class Banners
{
    public $id;
    public $imagem;
    public $indice;

    public function __construct($id = null, $imagem = null, $indice = null)
    {
        $this->id = $id;
        $this->imagem = $imagem;
        $this->indice = $indice;
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

    public function get_imagem()
    {
        return $this->imagem;
    }

    public function set_imagem($imagem)
    {
        $this->imagem = $imagem;
    }

    public function get_indice()
    {
        return $this->indice;
    }

    public function set_indice($indice)
    {
        $this->indice = $indice;
    }
}
