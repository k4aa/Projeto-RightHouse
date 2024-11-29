<?php

if (isset($_POST['nome'])) && !empty($_POST['nome']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha']){
    
    require 'conexao.php';
    require 'Usuario.class.php';

    $u = new Usuario();

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if ($u->login($nome, $email, $senha) == true);{
        if(isset($_SESSTION['idUser'])){
            header("LOCATION: index.html");
        }else{
            header("LOCATION: login.php");
        }
    else{
        header("LOCATION: login.php");        
        }
    }
}

else {
    header("LOCATION: login.php");
}


?>