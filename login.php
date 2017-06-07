<?php
session_start();

$femail = $_POST['email'];
$fsenha = $_POST['senha'];

include("conexao.php");

$sql = "SELECT *
FROM usuario
WHERE email = '$femail'
AND senha = '$fsenha';";

$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) > 0) {

    $login = mysqli_fetch_array($login);
    $_SESSION = array_merge($_SESSION, $login);
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;

    header("Location: doacoes.php");

} else {

    die("Não Logado");
    header('location:index.php');

}


?>
