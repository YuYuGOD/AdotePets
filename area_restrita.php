<?php

session_start(); // Inicia a session
include "functions.php"; // arquivo de funções.
session_checker(); // chama a função que verifica se a session iniciada da acesso à página.

echo "Bem vindo <strong>". $_SESSION['nome'] ." ". $_SESSION['email'] ."</strong>!<br />
Você está acessando área restrita para usuários cadastrados!
<br /><br />";

echo "Seu nível de usuário é <strong>". $_SESSION['nivel_usuario']."</strong>.
<br />Com esse nível, você tem permisão de acesso às
seguintes áreas: <br /><br />";

if ($_SESSION['nivel_usuario'] == 0){

    echo "- <strong>Forum</strong><br />Abrir tópicos, postar em tópicos
de terceiros.<br /><br />";

}

if ($_SESSION['nivel_usuario'] == 1){

    echo "- <strong>Forum</strong><br />Administração -
Acesso total <br /><br />";

}

/* Não colocarei representações para outros níveis de acesso, mas fica entendido que o
limite de níveis de acesso quem define é você*/

echo "<a href=\"logout.php\">Sair</a>";

?>