<?php

class Segmentos
{
    public $segmento;
    public $descricao;

    public function __construct($segmento = null, $descricao = null)
    {
        $this->segmento = $segmento;
        $this->descricao = $descricao;
    }

    // Getters e Setters

    public function get_segmento()
    {
        return $this->segmento;
    }

    public function set_segmento($segmento)
    {
        $this->segmento = $segmento;
    }

    public function get_descricao()
    {
        return $this->descricao;
    }

    public function set_descricao($descricao)
    {
        $this->descricao = $descricao;
    }
};