<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjetoWeb/bd/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjetoWeb/vo/Cliente_j.php';
class Cliente_jDAO {
    function salvar($obj){
       
       try{
            $sql = "insert into cliente_j(cnpj,razao_social,inscricao_estadual,id_cliente)"
                    . " values (:cnpj,:razao_social,:inscricao_estadual,:id_cliente)";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":cnpj", $obj->getCnpj());
            $p_sql->bindValue(":razao_social", $obj->getRazao_social());
            $p_sql->bindValue(":inscricao_estadual", $obj->getEscricao_estadual());
            $p_sql->bindValue(":id_cliente", $obj->getId_cliente());
            return $p_sql->execute();
        } catch (Exception $ex) {
            echo $exc->getTraceAsString() . 'ocorreu um erro';
        } 
    }
    function atualizar($cliente_j){
        try{
                $sql = "UPDATE cliente_j SET 
                razao_social = :razao_social,
                cnpj = :cnpj,
                inscricao_estadual = :inscricao_estadual,
                id_cliente = :id_cliente WHERE id=:id";
                $p_sql = Conexao::getInstance()->prepare($sql);

                //$id = $cliente->getId();
                $razao_social = $cliente_j->getRazao_social();
                $cnpj = $cliente-_j>getCnpj();
                $inscricao_estadual = $cliente_j->getInscricao_estadual();
                $id_cliente = $cliente_j->getId_cliente();

                $p_sql->bindValue(":razao_social", $razao_social);
                $p_sql->bindValue(":cnpj", $cnpj);
                $p_sql->bindValue(":inscricao_estadual", $inscricao_estadual);
                $p_sql->bindValue(":id_cliente", $id_cliente);
                return $p_sql->execute();
            }catch (Exception $e) {
                echo "Ocorreu um erro ao tentar executar esta ação";
            }
    }
    function remover($id_cliente){
        try {
             $sql = "DELETE FROM cliente_j WHERE id_cliente = :id_cliente";
             $p_sql = Conexao::getInstance()->prepare($sql);
             $p_sql->bindValue(":id_cliente", $id_cliente);
             return $p_sql->execute();
         }catch (Exception $e){
             echo "Ocorreu um erro ao tentar executar esta ação.";
         }
    }
    function listar(){
        try {
            $sql = "SELECT * FROM cliente_j";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->execute();
            //return $this->popularUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
            $res = $p_sql->fetchAll(PDO::FETCH_NUM);
                 foreach ($res as $resp) {
                   $razao_social = $resp[0];
                   $cnpj = $resp[1];
                   $inscricao_estadual = $resp[2];
                   $id_cliente = $resp[3];

                   echo '<ul>
                     <li><strong>Id: ', $id_cliente, '</strong></li>
                     <li><strong>Razão Social: ', $razao_social, '</strong></li>
                     <li><strong>CNPJ: ', $cnpj, '</strong></li>
                     <li><strong>Inscrição Estadual: ', $inscricao_estadual, '</strong></li>
                     </ul>';
                 }
        }catch (Exception $exc) {
            echo $exc->getTraceAsString();
        
        }
    }
    function pegarPorID($id_cliente){
        try{
                $sql = "SELECT * FROM cliente_j WHERE id_cliente = :id_cliente";
                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->bindValue(":id_cliente",$id_cliente);
                $p_sql->execute();
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
                $cliente_j = new Cliente_j();
                $cliente_j->setId_cliente($row['id_cliente']);
                $cliente_j->setRazao_social($row['razao_social']);
                $cliente_j->setCnpj($row['cnpj']);
                $cliente_j->setIscricao_estadual($row['inscricao_estadual']);
                return $cliente_j;

            }catch(Exception $e){
                echo "Ocorreu um erro";
            }
    }
    
}
