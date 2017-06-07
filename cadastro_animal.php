<?php
include_once("conexao.php");
$telefone_animal = $_POST['telefone_animal'];
$tipo = $_POST['tipo'];
$nome = $_POST['nome'];
$raca = $_POST['raca'];
$sexo = $_POST['sexo'];
$porte = $_POST['porte'];
$idade = $_POST['idade'];
$foto = $_POST['foto'];
$descricao = $_POST['descricao'];

//echo "$nome_usuario - $email_usuario";

// Pasta onde o foto vai ser salvo
$_UP['pasta'] = 'uploads/';
// Tamanho máximo do foto (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
// Array com as extensões permitidas
$_UP['extensoes'] = array('jpg', 'png', 'gif');
// Renomeia o foto? (Se true, o foto será salvo como .jpg e um nome único)
$_UP['renomeia'] = true;
// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O foto no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O foto ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do foto foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do foto';
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['foto']['error'] != 0) {
  die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['foto']['error']]);
  exit; // Para a execução do script
}
// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
// Faz a verificação da extensão do foto
$extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
  echo "Por favor, envie fotos com as seguintes extensões: jpg, png ou gif";
  exit;
}
// Faz a verificação do tamanho do foto
if ($_UP['tamanho'] < $_FILES['foto']['size']) {
  echo "O foto enviado é muito grande, envie fotos de até 2Mb.";
  exit;
}
// O foto passou em todas as verificações, hora de tentar movê-lo para a pasta
// Primeiro verifica se deve trocar o nome do foto
if ($_UP['renomeia'] == true) {
  // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
  $nome_final = md5(time()).'.jpg';
} else {
  // Mantém o nome original do foto
  $nome_final = $_FILES['foto']['name'];
}

// Depois verifica se é possível mover o foto para a pasta escolhida
if (move_uploaded_file($_FILES['foto']['tmp_name'], $_UP['pasta'] . $nome_final)) {
  $foto_url = $_UP['pasta'] . $nome_final;
  $cadastro_animal = "INSERT INTO animal (telefone_animal, tipo , nome , raca , sexo, porte, idade, foto_url, descricao)
  VALUES ('$telefone_animal', '$tipo', '$nome', '$raca', '$sexo', '$porte','$idade','$foto_url', '$descricao')";

  $cadastro_animal = mysqli_query($conn, $cadastro_animal);

  if(mysqli_affected_rows($conn) != 0){
      echo "
                      <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/AdotePets/doacoes.php'>
                      <script type=\"text/javascript\">
                          alert(\"Animal cadastrado com sucesso!\");
                      </script>
                  ";
  }else{
      echo "
                      <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/AdotePets/formulario_animal.php'>
                      <script type=\"text/javascript\">
                          alert(\"O animal não foi cadastrado com sucesso!\");
                      </script>
                  ";

  }

} else {
  // Não foi possível fazer o upload, provavelmente a pasta está incorreta
  echo "Não foi possível enviar o foto, tente novamente";
}

?>
