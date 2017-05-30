<?php
include_once("conexao.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$estado = $_POST['estado'];

//echo "$nome - $email";

$cadastro = "INSERT INTO usuario ( nome , email , senha , cidade, telefone, estado)
VALUES ('$nome', '$email', '$senha', '$cidade', '$telefone','$estado')";

$cadastro = mysqli_query($conn, $cadastro);

if(mysqli_affected_rows($conn) != 0){
    echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/AdotePets/formulario_login.php'>
                    <script type=\"text/javascript\">
                        alert(\"Usuario cadastrado com sucesso!\");
                    </script>
                ";
}else{
    echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/AdotePets/formulario_usuario.php'>
                    <script type=\"text/javascript\">
                        alert(\"O usuario não foi cadastrado com sucesso!\");
                    </script>
                ";
}
?>
