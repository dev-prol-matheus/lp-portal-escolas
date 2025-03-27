<?php

class StatusInscricao
{
    private $status;
    private $descricao;

    public function get_status()
    {
        return $this->status;
    }

    public function set_status($status)
    {
        $this->status = $status;
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