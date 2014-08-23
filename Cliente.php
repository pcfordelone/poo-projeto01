<?php

class Cliente {
    public $nome;
    public $email;
    public $telefone;
    public $cpf;
    public $rg;

    public function __construct($nome,$email,$telefone,$cpf,$rg)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->rg = $rg;
    }

    /*public function listarClientes() {
        echo ($this->nome." - ".$this->email)." - ".$this->telefone." - ".$this->cpf." - ".$this->rg."<br>";
    }*/
} 