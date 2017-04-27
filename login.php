<?php

$femail = $_POST['email'];
$fsenha = $_POST['senha'];

include("conexao.php");

$sql = "SELECT *
FROM usuario
WHERE email = '$femail' 
AND senha = '$fsenha';";

$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) > 0) {
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header("Location: doacoes.php");
} else {

    die("nao logado");
    header('location:index.php');

}
?>