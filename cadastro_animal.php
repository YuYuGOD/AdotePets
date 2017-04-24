<?php
include_once("conexao.php");
$tipo = $_POST['tipo'];
$nome = $_POST['nome'];
$raca = $_POST['raca'];
$sexo = $_POST['sexo'];
$porte = $_POST['porte'];
$idade = $_POST['idade'];
$foto = $_POST['foto'];
$descricao = $_POST['descricao'];

//echo "$nome_usuario - $email_usuario";

$cadastro_animal = "INSERT INTO animal ( tipo , nome , raca , sexo, porte, idade, foto, descricao) 
VALUES ('$tipo', '$nome', '$raca', '$sexo', '$porte','$idade','$foto', '$descricao')";

$cadastro_animal = mysqli_query($conn, $cadastro_animal);

if(mysqli_affected_rows($conn) != 0){
    echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/AdotePets/cadastro_animal.html'>
                    <script type=\"text/javascript\">
                        alert(\"Animal cadastrado com Sucesso.\");
                    </script>
                ";
}else{
    echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/AdotePets/cadastro_animal.html'>
                    <script type=\"text/javascript\">
                        alert(\"O Animal não foi cadastrado com Sucesso.\");
                    </script>
                ";
}
?>
