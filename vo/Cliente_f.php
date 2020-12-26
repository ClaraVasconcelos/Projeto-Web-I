<?php

class Cliente_f {
   private $cpf;
   private $nome;
   private $sexo;
   private $data_nascimento;
   private $id_cliete;
   function getCpf() {
       return $this->cpf;
   }

   function getNome() {
       return $this->nome;
   }

   function getSexo() {
       return $this->sexo;
   }

   function getData_nascimento() {
       return $this->data_nascimento;
   }

   function getId_cliete() {
       return $this->id_cliete;
   }

   function setCpf($cpf) {
       $this->cpf = $cpf;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setSexo($sexo) {
       $this->sexo = $sexo;
   }

   function setData_nascimento($data_nascimento) {
       $this->data_nascimento = $data_nascimento;
   }

   function setId_cliete($id_cliete) {
       $this->id_cliete = $id_cliete;
   }

   function toString(){
       return $cpf."-".$id_cliente;
   }
}
