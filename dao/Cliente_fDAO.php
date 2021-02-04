<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ProjetoWeb/bd/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ProjetoWeb/vo/Cliente_f.php';
class Cliente_fDAO {
    function salvar($obj){
      try{
            $sql = "insert into cliente_f(cpf,nome,sexo,data_nascimento,id_cliente)"
                    . " values (:cpf,:nome,:sexo,:data_nascimento,:id_cliente)";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":cpf", $obj->getCpf());
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":sexo", $obj->getSexo());
            $p_sql->bindValue(":data_nascimento", $obj->getData_nascimento());
            $p_sql->bindValue(":id_cliente", $obj->getId_cliente());
            return $p_sql->execute();
        } catch (Exception $ex) {
            echo $exc->getTraceAsString() . 'ocorreu um erro';
        }  
    }
    function atualizar($cliente_f){
        try{
                $sql = "UPDATE cliente_f SET 
                cpf = :cpf,
                nome = :nome,
                sexo = :sexo,
                data_nascimento = :data_nascimento,
                id_cliente = :id_cliente WHERE id_cliente=:id_cliente";
                $p_sql = Conexao::getInstance()->prepare($sql);

                //$id = $cliente->getId();
                $cpf = $cliente_f->getCpf();
                $nome = $cliente_f->getNome();
                $sexo = $cliente_f->getSexo();
                $data_nascimento = $cliente_f->getData_nascimento();

                $p_sql->bindValue(":cpf", $cpf);
                $p_sql->bindValue(":nome", $nome);
                $p_sql->bindValue(":sexo", $sexo);
                $p_sql->bindValue(":data_nascimento", $data_nascimento);
                return $p_sql->execute();
            }catch (Exception $e) {
                echo "Ocorreu um erro ao tentar executar esta ação";
            }

    }
    function remover($id_cliente){
        try {
             $sql = "DELETE FROM cliente_f WHERE id_cliente = :id_cliente";
             $p_sql = Conexao::getInstance()->prepare($sql);
             $p_sql->bindValue(":id_cliente", $id_cliente);
             return $p_sql->execute();
         }catch (Exception $e){
             echo "Ocorreu um erro ao tentar executar esta ação.";
         }
    }
    function listar(){
        try {
            $sql = "SELECT * FROM cliente_f";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->execute();
            //return $this->popularUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
            $res = $p_sql->fetchAll(PDO::FETCH_NUM);
                 foreach ($res as $resp) {
                   $cpf = $resp[0];
                   $nome = $resp[1];
                   $sexo = $resp[2];
                   $data_nascimento = $resp[3];

                   echo '<ul>
                     <li><strong>Cfp: ', $cpf, '</strong></li>
                     <li><strong>Nome: ', $nome, '</strong></li>
                     <li><strong>Sexo: ', $sexo, '</strong></li>
                     <li><strong>Data de Nascimento: ', $data_nascimento, '</strong></li>
                     </ul>';
                 }
        }catch (Exception $exc) {
            echo $exc->getTraceAsString();
        
        }
    }
    function pegarPorID($id_cliente){
        try{
                $sql = "SELECT * FROM cliente_f WHERE id_cliente = :id_cliente";
                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->bindValue(":id_cliente",$id_cliente);
                $p_sql->execute();
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
                $cliente_f = new Cliente_f();
                $cliente_f->setId_cliente($row['id_cliente']);
                $cliente_f->setCpf($row['cpf']);
                $cliente_f->setNome($row['nome']);
                $cliente_f->setSexo($row['sexo']);
                $cliente_f->setData_nascimento($row['data_nascimento']);
                return $cliente_f;

            }catch(Exception $e){
                echo "Ocorreu um erro";
            }
    }
}
