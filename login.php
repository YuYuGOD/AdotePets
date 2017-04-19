<?php

session_start(); // Inicia a session

include "conexao.php";

$usuario = $_POST['email'];
$senha = $_POST['senha'];

if ((!$usuario) || (!$senha)){

    echo "Por favor, todos campos devem ser preenchidos! <br /><br />";

    include "cadastro.html";

}else{

    $senha = md5($senha);

    $sql = mysqli_query(

        "SELECT * FROM usuario
WHERE usuario='{$usuario}'
AND senha='{$senha}'"

    );

    $login_check = mysqli_num_rows($sql);

    if ($login_check > 0){

        while ($row = mysqli_fetch_array($sql)){

            foreach ($row AS $key => $val){

                $$key = stripslashes( $val );

            }

            $_SESSION['id_usuario'] = $id_usuario;
            $_SESSION['nome'] = $nome;
            $_SESSION['sobrenome'] = $sobrenome;
            $_SESSION['email'] = $email;

            mysqli_query(

                "UPDATE usuario SET data_ultimo_login = now()
WHERE usuario_id ='{$id_usuario}'"

            );

            header("Location: area_restrita.php");

        }

    }else{

        echo "Você não pode logar-se! Este usuário e/ou senha não são válidos!<br />
Por favor tente novamente!<br />";

        include "cadastro.html";

    }

}

?>