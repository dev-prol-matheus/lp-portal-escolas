<?php

class Cursos
{
    public $curso;
    public $img;
    public $descricao;
    public $segmento;
    public $data_inicio;
    public $turno;
    public $valor;
    public $status;

    public function __construct(
        $curso = null,
        $img = null,
        $descricao = null,
        $segmento = null,
        $data_inicio = null,
        $turno = null,
        $valor = null,
        $status = null
    ) {
        $this->curso = $curso;
        $this->img = $img;
        $this->descricao = $descricao;
        $this->segmento = $segmento;
        $this->data_inicio = $data_inicio;
        $this->turno = $turno;
        $this->valor = $valor;
        $this->status = $status;
    }

    // Getters e Setters

    public function get_curso()
    {
        return $this->curso;
    }

    public function set_curso($curso)
    {
        $this->curso = $curso;
    }

    public function get_img()
    {
        return $this->img;
    }

    public function set_img($img)
    {
        $this->img = $img;
    }

    public function get_descricao()
    {
        return $this->descricao;
    }

    public function set_descricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function get_segmento()
    {
        return $this->segmento;
    }

    public function set_segmento($segmento)
    {
        $this->segmento = $segmento;
    }

    public function get_turno()
    {
        return $this->turno;
    }

    public function set_turno($turno)
    {
        $this->turno = $turno;
    }
    public function get_valor()
    {
        return $this->valor;
    }

    public function set_valor($valor)
    {
        $this->valor = $valor;
    }
    public function get_data_inicio()
    {
        return $this->data_inicio;
    }

    public function set_data_inicio($data_inicio)
    {
        $this->data_inicio = $data_inicio;
    }

    public function get_status()
    {
        return $this->status;
    }

    public function set_status($status)
    {
        $this->status = $status;
    }
};