<?php


class Cliente {
   private $id_cliente;
   private $telefone;
   private $login;
   private $senha;
   private $idEndereco;
   
   function getId_cliente() {
       return $this->id_cliente;
   }

   function setId_cliente($id_cliente) {
       $this->id_cliente = $id_cliente;
   }
   function getTelefone() {
       return $this->telefone;
   }

   function getLogin() {
       return $this->login;
   }

   function getSenha() {
       return $this->senha;
   }

   function getIdEndereco() {
       return $this->idEndereco;
   }

   function setTelefone($telefone) {
       $this->telefone = $telefone;
   }

   function setLogin($login) {
       $this->login = $login;
   }

   function setSenha($senha) {
       $this->senha = $senha;
   }

   function setIdEndereco($idEndereco) {
       $this->idEndereco = $idEndereco;
   }

   
   function toString(){
       return $id_cliente;
   }
}
