<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjetoWeb/bd/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjetoWeb/vo/Cliente.php';
class ClienteDAO {
    function salvar($obj){
        try{
            $sql = "insert into cliente(telefone,email,login,senha,idEndereco) values (:telefone,:email,:login,:senha,:idEndereco)";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":telefone", $obj->getTelefone());
            $p_sql->bindValue(":email", $obj->getEmail());
            $p_sql->bindValue(":login", $obj->getLogin());
            $p_sql->bindValue(":senha", $obj->getSenha());
            $p_sql->bindValue(":idEndereco", $obj->idEndereco());
            return $p_sql->execute();
        } catch (Exception $ex) {
            echo $exc->getTraceAsString() . 'ocorreu um erro';
        }
    }
    function atualizar($cliente){
        try{
                $sql = "UPDATE cliente SET 
                telefone = :telefone,
                login = :login,
                email = :email,
                idEndereco = :idEndereco,
                senha = :senha WHERE id=:id";
                $p_sql = Conexao::getInstance()->prepare($sql);

                //$id = $cliente->getId();
                $telefone = $cliente->getTelefone();
                $email = $cliente->getEmail();
                $login = $cliente->getLogin();
                $senha = $cliente->getSenha();
                $idEndereco = $cliente->getIdEndereco();

                $p_sql->bindValue(":telefone", $telefone);
                $p_sql->bindValue(":email", $email);
                $p_sql->bindValue(":login", $login);
                $p_sql->bindValue(":senha", $senha);
                $p_sql->bindValue(":idEndereco", $idEndereco);
                return $p_sql->execute();
            }catch (Exception $e) {
                echo "Ocorreu um erro ao tentar executar esta ação";
            }
    }
    function remover($login){
        try {
             $sql = "DELETE FROM cliente WHERE login = :login";
             $p_sql = Conexao::getInstance()->prepare($sql);
             $p_sql->bindValue(":login", $login);
             return $p_sql->execute();
         }catch (Exception $e){
             echo "Ocorreu um erro ao tentar executar esta ação.";
         }
    }
    function pegarPorID($id_cliente){
        try{
                $sql = "SELECT * FROM cliente WHERE id_cliente = :id_cliente";
                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->bindValue(":id_cliente",$id_cliente);
                $p_sql->execute();
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
                $cliente = new Cliente();
                $cliente->setId_cliente($row['id_cliente']);
                $cliente->setEmail($row['email']);
                $cliente->setLogin($row['login']);
                $cliente->setSenha($row['senha']);
                $cliente->setIdEndereco($row['idEndereco']);
                return $cliente;

            }catch(Exception $e){
                echo "Ocorreu um erro";
            }
    }
    function listar(){
        try {
            $sql = "SELECT * FROM cliente";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->execute();
            //return $this->popularUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
            $res = $p_sql->fetchAll(PDO::FETCH_NUM);
                 foreach ($res as $resp) {
                   $telefone = $resp[0];
                   $email = $resp[1];
                   $login = $resp[2];
                   $senha = $resp[3];

                   echo '<ul>
                     <li><strong>Telefone: ', $telefone, '</strong></li>
                     <li><strong>Email: ', $email, '</strong></li>
                     <li><strong>Login: ', $login, '</strong></li>
                     <li><strong>Senha: ', $senha, '</strong></li>
                     </ul>';
                 }
        }catch (Exception $exc) {
            echo $exc->getTraceAsString();
        
        }
    }
}
