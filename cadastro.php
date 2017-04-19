<?php
include_once("conexao.php");
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$ddd = $_POST['ddd'];
$telefone = $_POST['telefone'];
$nome = $_POST['nome'];
//echo "$nome_usuario - $email_usuario";

$cadastro = "INSERT INTO usuario ( nome , email , senha , cidade , ddd, telefone, login, endereco) 
VALUES ('$nome', '$email', '$login', '$cidade', '$telefone', '$ddd', '$login', '$endereco')";

$cadastro = mysqli_query($conn, $cadastro);

if(mysqli_affected_rows($conn) != 0){
    echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/AdotePets/cadastro.html'>
                    <script type=\"text/javascript\">
                        alert(\"Usuario cadastrado com Sucesso.\");
                    </script>
                ";
}else{
    echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/AdotePets/cadastro.html'>
                    <script type=\"text/javascript\">
                        alert(\"O Usuario não foi cadastrado com Sucesso.\");
                    </script>
                ";
}
?>
