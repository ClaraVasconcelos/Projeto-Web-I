<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjetoWeb/bd/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjetoWeb/vo/Compra.php';

class CompraDAO {
    function salvar($obj){
        try{
            $sql = "insert into compra(forma_pagamento,data,id,id_cliente) values (:forma_pagamento,:data,:id,:id_cliente)";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":forma_pagamento", $obj->getForma_pagamento());
            $p_sql->bindValue(":data", $obj->getData());
            $p_sql->bindValue(":id", $obj->getId());
            $p_sql->bindValue(":id_cliente", $obj->getId_cliente());
            return $p_sql->execute();
        } catch (Exception $ex) {
            echo $exc->getTraceAsString() . 'ocorreu um erro';
        }
    }
    function atualizar($compra){
        try{
                $sql = "UPDATE compra SET 
                forma_pagamento = :forma_pagamento,
                data = :data,
                id = :id,
                id_cliente = :id_cliente WHERE id_compra=:id_compra";
                $p_sql = Conexao::getInstance()->prepare($sql);

                //$id = $cliente->getId();
                $forma_pagamento = $compra->getForma_pagamento();
                $data = $compra->getData();
                $id = $compra->getId();
                $id_cliente = $compra->getId_cliente();

                $p_sql->bindValue(":forma_pagamento", $forma_pagamento);
                $p_sql->bindValue(":data", $data);
                $p_sql->bindValue(":id", $id);
                $p_sql->bindValue(":id_cliente", $id_cliente);
                return $p_sql->execute();
            }catch (Exception $e) {
                echo "Ocorreu um erro ao tentar executar esta ação";
            }
    }
    function remover($id_compra){
        try {
             $sql = "DELETE FROM compra WHERE id_compra = :id_compra";
             $p_sql = Conexao::getInstance()->prepare($sql);
             $p_sql->bindValue(":id_compra", $id_compra);
             return $p_sql->execute();
         }catch (Exception $e){
             echo "Ocorreu um erro ao tentar executar esta ação.";
         }
    }
    function listar(){
        try {
            $sql = "SELECT * FROM compra";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->execute();
            //return $this->popularUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
            $res = $p_sql->fetchAll(PDO::FETCH_NUM);
                 foreach ($res as $resp) {
                   $forma_pagamento = $resp[0];
                   $data = $resp[1];
                   $id = $resp[2];
                   $id_cliente = $resp[3];

                   echo '<ul>
                     <li><strong>Forma de Pagamento: ', $forma_pagamento, '</strong></li>
                     <li><strong>Data: ', $data, '</strong></li>
                     <li><strong>Id Produto: ', $id, '</strong></li>
                     <li><strong>Id Cliente: ', $id_cliente, '</strong></li>
                     </ul>';
                 }
        }catch (Exception $exc) {
            echo $exc->getTraceAsString();
        
        }
    }
    function pegarPorID($id_compra){
        try{
                $sql = "SELECT * FROM compra WHERE id_compra = :id_compra";
                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->bindValue(":id_compra",$id_compra);
                $p_sql->execute();
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
                $compra = new Compra();
                $compra->setId_cliente($row['id_cliente']);
                $compra->setForma_pagamento($row['forma_pagamento']);
                $compra->setData($row['data']);
                $compra->setId($row['id']);
                return $compra;

            }catch(Exception $e){
                echo "Ocorreu um erro";
            }
    }
}
