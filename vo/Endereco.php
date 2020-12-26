<?php

class Endereco {
    private $idEndereco;
    private $bairro;
    private $rua;
    private $cep;
    private $uf;
    private $num;
    private $cidade;
    private $complemento;
   
    
    function getIdEndereco() {
        return $this->idEndereco;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getRua() {
        return $this->rua;
    }

    function getCep() {
        return $this->cep;
    }

    function getUf() {
        return $this->uf;
    }

    function getNum() {
        return $this->num;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function setIdEndereco($idEndereco) {
        $this->idEndereco = $idEndereco;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setNum($num) {
        $this->num = $num;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }
    function toString(){
        return $idEndereco."-".$id_cliente;
    }
}
