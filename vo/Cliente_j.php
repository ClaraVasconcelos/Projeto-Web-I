<?php

class Cliente_j {
    private $razao_social;
    private $cnpj;
    private $inscricao_estadual;
    private $id_cliente;
    
    function getRazao_social() {
        return $this->razao_social;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getInscricao_estadual() {
        return $this->inscricao_estadual;
    }

    function getId_cliente() {
        return $this->id_cliente;
    }

    function setRazao_social($razao_social) {
        $this->razao_social = $razao_social;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setInscricao_estadual($inscricao_estadual) {
        $this->inscricao_estadual = $inscricao_estadual;
    }

    function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    function toString(){
        return $cnpj."-".$id_cliente;
    }
}
