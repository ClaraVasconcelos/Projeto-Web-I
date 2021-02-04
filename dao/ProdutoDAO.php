<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjetoWeb/bd/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjetoWeb/vo/Produto.php';
class ProdutoDAO {
    function salvar($obj){
        try{
            $sql = "insert into produto(origem, qtd,preco,nome,descricao,tipo,personagem)"
                    . " values (:origem,:qtd,:preco,:nome,:descricao,:tipo,:personagem)";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":origem", $obj->getOrigem());
            $p_sql->bindValue(":qtd", $obj->getQtd());
            $p_sql->bindValue(":preco", $obj->getPreco());
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":descricao", $obj->getDescricao());
            $p_sql->bindValue(":tipo", $obj->getTipo());
            $p_sql->bindValue(":personagem", $obj->getPersonagem());
            return $p_sql->execute();
        } catch (Exception $ex) {
            echo $exc->getTraceAsString() . 'ocorreu um erro';
        }
    }
    function atualizar($produto){
        try{
                $sql = "UPDATE produto SET 
                origem = :origem,
                qtd = :qtd,
                preco = :preco,
                nome = :nome,
                descricao = :descricao,
                tipo = :tipo,
                personagem = :personagem WHERE id=:id";
                $p_sql = Conexao::getInstance()->prepare($sql);

                //$id = $cliente->getId();
                $origem = $produto->getOrigem();
                $qtd= $produto->getQtd();
                $preco = $produto->getPreco();
                $nome = $produto->getNome();
                $descricao = $produto->getDescricao();
                $tipo = $produto->getTipo();
                $personagem = $produto->getPersonagem();

                $p_sql->bindValue(":origem", $origem);
                $p_sql->bindValue(":qtd", $qtd);
                $p_sql->bindValue(":preco", $preco);
                $p_sql->bindValue(":nome", $nome);
                $p_sql->bindValue(":descricao", $descricao);
                $p_sql->bindValue(":tipo", $tipo);
                $p_sql->bindValue(":personagem", $personagem);
                
                return $p_sql->execute();
            }catch (Exception $e) {
                echo "Ocorreu um erro ao tentar executar esta ação";
            }
    }
    function remover($id){
        try {
             $sql = "DELETE FROM produto WHERE id = :id";
             $p_sql = Conexao::getInstance()->prepare($sql);
             $p_sql->bindValue(":id", id);
             return $p_sql->execute();
         }catch (Exception $e){
             echo "Ocorreu um erro ao tentar executar esta ação.";
         }
    }
    function listar(){
        try {
            $sql = "SELECT * FROM produto";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->execute();
            //return $this->popularUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
            $res = $p_sql->fetchAll(PDO::FETCH_NUM);
                 foreach ($res as $resp) {
                   $origem = $resp[0];
                   $qtd = $resp[1];
                   $preco = $resp[2];
                   $nome = $resp[3];
                   $descricao = $resp[4];
                   $tipo = $resp[5];
                   $personagem = $resp[6];

                   echo '<ul>
                     <li><strong>Origem: ', $origem, '</strong></li>
                     <li><strong>Quantidade: ', $qtd, '</strong></li>
                     <li><strong>Preço: ', $preco, '</strong></li>
                     <li><strong>Nome: ', $nome, '</strong></li>
                     <li><strong>Descrição: ', $descricao, '</strong></li>
                     <li><strong>Tipo: ', $tipo, '</strong></li>
                     <li><strong>Personagem: ', $personagem, '</strong></li>
                     </ul>';
                 }
        }catch (Exception $exc) {
            echo $exc->getTraceAsString();
        
        }
    }
    function pegarPorID($id){
        try{
                $sql = "SELECT * FROM produto WHERE id = :id";
                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->bindValue(":id",$id);
                $p_sql->execute();
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
                $produto = new Produto();
                $produto->setOrigem($row['origem']);
                $produto->setQtd($row['qtd']);
                $produto->setPreco($row['preco']);
                $produto->setNome($row['nome']);
                $produto->setDescricao($row['descricao']);
                $produto->setTipo($row['tipo']);
                $produto->setPersonagem($row['personagem']);
                return $produto;

            }catch(Exception $e){
                echo "Ocorreu um erro";
            }
    }
}
