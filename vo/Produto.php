<?php


class Produto {
  private $id;
  private $origem;
  private $qtd;
  private $preco;
  private $nome;
  private $descriao;
  private $tipo;
  private $personagem;
  
  function getId() {
      return $this->id;
  }

  function getOrigem() {
      return $this->origem;
  }

  function getQtd() {
      return $this->qtd;
  }

  function getPreco() {
      return $this->preco;
  }

  function getNome() {
      return $this->nome;
  }

  function getDescriao() {
      return $this->descriao;
  }

  function getTipo() {
      return $this->tipo;
  }

  function getPersonagem() {
      return $this->personagem;
  }

  function setId($id) {
      $this->id = $id;
  }

  function setOrigem($origem) {
      $this->origem = $origem;
  }

  function setQtd($qtd) {
      $this->qtd = $qtd;
  }

  function setPreco($preco) {
      $this->preco = $preco;
  }

  function setNome($nome) {
      $this->nome = $nome;
  }

  function setDescriao($descriao) {
      $this->descriao = $descriao;
  }

  function setTipo($tipo) {
      $this->tipo = $tipo;
  }

  function setPersonagem($personagem) {
      $this->personagem = $personagem;
  }

  function toString(){
      return $id."-".$nome;
  }
}
