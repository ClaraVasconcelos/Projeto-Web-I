<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjetoWeb/bd/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjetoWeb/vo/Endereco.php';
class EnderecoDAO {
    function salvar($obj){
     
        try{
            $sql = "insert into endereco(bairro, rua,cep,uf,num,cidade,complemento)
                     values (:bairro,:rua,:cep,:uf,:num,:cidade,:complemento)";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":bairro", $obj->getBairro());
            $p_sql->bindValue(":rua", $obj->getRua());
            $p_sql->bindValue(":cep", $obj->getCep());
            $p_sql->bindValue(":uf", $obj->getUf());
            $p_sql->bindValue(":num", $obj->getNum());
            $p_sql->bindValue(":cidade", $obj->getCidade());
            return $p_sql->execute();
        } catch (Exception $ex) {
            echo $exc->getTraceAsString() . 'ocorreu um erro';
        }
    }
    function atualizar($endereco){
        try{
                $sql = "UPDATE endereco SET 
                bairro = :bairro,
                rua = :rua,
                cep = :cep,
                uf = :uf,
                cidade = :cidade,
                complemento = :complemento,
                num = :num WHERE id=:id";
                $p_sql = Conexao::getInstance()->prepare($sql);

                $bairro = $endereco->getBairro();
                $rua = $endereco->getRua();
                $cep = $endereco->getCep();
                $uf = $endereco->getUf();
                $cidade = $endereco->getCidade();
                $complemento = $endereco->getComplemento();
                $num = $endereco->getNum();

                $p_sql->bindValue(":bairro", $bairro);
                $p_sql->bindValue(":rua", $rua);
                $p_sql->bindValue(":cep", $cep);
                $p_sql->bindValue(":uf", $uf);
                $p_sql->bindValue(":cidade", $cidade);
                $p_sql->bindValue(":complemento", $complemento);
                $p_sql->bindValue(":num", $num);
                return $p_sql->execute();
            }catch (Exception $e) {
                echo "Ocorreu um erro ao tentar executar esta ação";
            }
    }
    function remover($idEndereco){
        try {
             $sql = "DELETE FROM enderco WHERE idEndereco = :idEndereco";
             $p_sql = Conexao::getInstance()->prepare($sql);
             $p_sql->bindValue(":idEndereco", $idEndereco);
             return $p_sql->execute();
         }catch (Exception $e){
             echo "Ocorreu um erro ao tentar executar esta ação.";
         }
    }
    function listar(){
        try {
            $sql = "SELECT * FROM endereco";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->execute();
            //return $this->popularUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
            $res = $p_sql->fetchAll(PDO::FETCH_NUM);
                 foreach ($res as $resp) {
                   $bairro = $resp[0];
                   $rua = $resp[1];
                   $cep = $resp[2];
                   $uf = $resp[3];
                   $cidade = $resp[4];
                   $complemento = $resp[5];
                   $num = $resp[6];

                   echo '<ul>
                     <li><strong>Bairro: ', $bairro, '</strong></li>
                     <li><strong>Rua: ', $rua, '</strong></li>
                     <li><strong>CEP: ', $cep, '</strong></li>
                     <li><strong>UF: ', $uf, '</strong></li>
                     <li><strong>Cidade: ', $cidade, '</strong></li>
                     <li><strong>Complemento: ', $complemento, '</strong></li>
                     <li><strong>Número: ', $num, '</strong></li>
                     </ul>';
                 }
        }catch (Exception $exc) {
            echo $exc->getTraceAsString();
        
        }
    }
    function pegarPorID($idEndereco){
        try{
                $sql = "SELECT * FROM endereco WHERE idEndereco = :idEndereco";
                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->bindValue(":idEndereco",$id_cliente);
                $p_sql->execute();
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
                $endereco = new Endereco();
                $endereco->setBairro($row['bairro']);
                $endereco->setRua($row['rua']);
                $endereco->setCep($row['cep']);
                $endereco->setUf($row['uf']);
                $endereco->setCidade($row['cidade']);
                $endereco->setComplemento($row['complemento']);
                $endereco->setNum($row['num']);
                return $endereco;

            }catch(Exception $e){
                echo "Ocorreu um erro";
            }
    }
}
