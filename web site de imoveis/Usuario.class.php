<?php

class Usuario{

    public function login($nome, $email, $senha){

        global $pdo;

        $sql = "SELECT * FROM usuarios WHERE email = :email, nome = :nome AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $nome);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

           $_SESSTION['idusuario'] = $dado['idusuario'];

           return true;
        }
        else{
            return false;
        }
    }

}

?>