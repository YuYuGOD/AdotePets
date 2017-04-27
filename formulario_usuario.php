<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Fim do JavaScript que validará os campos obrigatórios! -->
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

<!-- CADASTRO DE USUARIO -->
<div class="panel-title"><img src="image/img_crieseuperfil.png" style="margin-left: 450px; width: 500px; height:200px;"/></div>
</div>
<div class="panel-body" >
    <form onsubmit="return valida(this);" method="POST" action="cadastro.php" class="form-horizontal">

        <div id="signupalert" style="display:none" class="alert alert-danger">
            <p>Erro:</p>
            <span></span>
        </div>
        <div class="form-group">

            <label class="col-md-3 control-label">Nome</label>
            <div class="col-md-9">
                <input name="nome" type="text" id="nome" size="70" maxlength="60" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">E-mail</label>
            <div class="col-md-9">
                <input name="email" type="email" id="email" size="70" maxlength="60" placeholder="exemplo@gmail.com" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Senha</label>
            <div class="col-md-9">
                <input name="senha" type="password" id="senha" maxlength="12" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Cidade</label>
            <div class="col-md-9">
                <input name="cidade" type="text" id="cidade" size="70" maxlength="70" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Telefone</label>
            <div class="col-md-9">
                <input type="tel" required="required" maxlength="15" name="telefone" id="telefone"  />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Estado</label>
            <div class="col-md-9">
                <input name="estado" type="text" id="estado" size="70" maxlength="70" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-9">
                <div class="button"></div>
                <input type="submit" value="                        " id="cadastrar" name="cadastrar" class="botao">
            </div>
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