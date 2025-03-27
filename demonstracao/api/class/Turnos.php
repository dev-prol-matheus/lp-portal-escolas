<?php

class Turnos
{
    public $turno;
    public $descricao;

    public function __construct($turno = null, $descricao = null)
    {
        $this->turno = $turno;
        $this->descricao = $descricao;
    }

    // Getters e Setters

    public function get_turno()
    {
        return $this->turno;
    }

    public function set_turno($turno)
    {
        $this->turno = $turno;
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