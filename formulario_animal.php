<?PHP
session_start();

//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {
    //Destrói
    session_destroy();

    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);

    //Redireciona para a página de autenticação
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Animal</title>
    <meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function validaCampo()
        {
            if(document.cadastro_animal.tipo.value=="")
            {
                alert("O Campo Tipo é obrigatório!");
                return false;
            }
            else
            if(document.cadastro_animal.nome.value=="")
            {
                alert("O Campo Nome é obrigatório!");
                return false;
            }
            if(document.cadastro_animal.raca.value=="")
            {
                alert("O campo Raça é obrigatório!");
                return false;
            }
            if(document.cadastro_animal.sexo.value=="")
            {
                alert("O Campo Sexo é obrigatório!");
                return false;
            }
            if(document.cadastro_animal.porte.value=="")
            {
                alert("O Campo Porte é obrigatório!");
                return false;
            }
            else
            if(document.cadastro_animal.idade.value=="")
            {
                alert("O Campo Idade é obrigatório!");
                return false;
            }
            if(document.cadastro_animal.foto.value=="")
            {
                alert("O Campo Foto é obrigatório!");
                return false;
            }
            if(document.cadastro_animal.descricao.value=="")
            {
                alert("O Campo Descrição é obrigatório!");
                return false;
            }
            else


                return true;
        }
        <!-- Fim do JavaScript que validará os campos obrigatórios! -->
    </script>
    <style>
        .botao {
            background: url('image/btn_cadastrar.png');
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
<?php include("header.php"); ?>
</nav>

<!-- CADASTRO DE ANIMAL -->
<div class="container">

    <img src="image/img_anuncieaquiseupet.png" style="margin-left: 300px; width: 500px; height:180px;"/></div>


</div>
</div>
<div class="panel-body" >
    <form method="POST" action="cadastro_animal.php" class="form-horizontal" onsubmit="return validaCampo(); return false;">

        <div id="signupalert" style="display:none" class="alert alert-danger">
            <p>Erro:</p>
            <span></span>
        </div>
        <div class="form-group">

            <label class="col-md-3 control-label">Tipo</label>
            <div class="col-md-9">
                <input name="tipo" type="text" id="tipo" size="70" maxlength="60" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Nome</label>
            <div class="col-md-9">
                <input name="nome" type="text" id="nome" size="70" maxlength="60" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Raça</label>
            <div class="col-md-9">
                <input name="raca" type="text" id="raca" maxlength="12" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Sexo</label>
            <div class="col-md-9">
                <input name="sexo" type="text" id="sexo" size="70" maxlength="70" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Porte</label>
            <div class="col-md-9">
                <input name="porte" type="text" id="porte" size="70" maxlength="70" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Idade</label>
            <div class="col-md-9">
                <input name="idade" type="text" id="idade" size="70" maxlength="70" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Foto</label>
            <div class="col-md-9">
                <input name="foto" type="file" id="foto"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Descrição</label>
            <div class="col-md-9">
                <textarea name="descricao" id="descricao" rows="10" cols="70" maxlength="500"></textarea></p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-9">
                <input type="submit" value="                        " id="cadastrar" name="cadastrar" class="botao">
            </div>
        </div>

        <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">

            <!--<div class="col-md-offset-3 col-md-9">
                <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Cadastre-se com o Facebook</button>
            </div>-->
            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="formulario_login.php" onclick="$('#signupbox').hide(); $('#loginbox').show()">Voltar a tela de Login</a></div>

        </div>
    </form>
</div>

</body>
</html>