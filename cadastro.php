<?php
include_once("conexao.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$estado = $_POST['estado'];

//echo "$nome_usuario - $email_usuario";

$cadastro = "INSERT INTO usuario ( nome , email , senha , cidade, telefone, estado) 
VALUES ('$nome', '$email', '$senha', '$cidade', '$telefone','$estado')";

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
