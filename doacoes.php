<?php
include("header.php");
?>


    <div class="container" style="margin-top: 30px;">

        <div class="row">

            <div class="col-sm-12 col-md-2">
                <h4>Tipo</h4>
                <hr>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="categorias.php?id=1">Cachorros</a></li>
                    <?php
                    $arr = array(1, 2, 3, 4);
                    foreach ($arr as & $value) {
                        $value = $value * 2;
                    }
                    unset($value);
                    ?>
                    <li><a href="#">Gatos</a></li>
                </ul>
            </div>

            <div class="col-sm-12 col-md-10">
                <h4>Animais</h4>
                <hr>

                <?php

                include_once("conexao.php");

                $sql = "SELECT * FROM animal;";

                $resultado = mysqli_query($conn, $sql);

                if (mysqli_num_rows($resultado) > 0) {
                  while($row = $resultado->fetch_assoc()) {?>
                  <div class="row">
                      <div class="col-sm-4">
                        <div class="panel panel-primary">
                          <div class="panel-heading"><?php echo $row['nome']?></div>
                          <div  class="panel-body"><img src="./<?php echo $row['foto_url']?>" class="img-responsive" style="width:100%" alt=""/></div>
                          <div class="panel-footer"><?php echo $row['descricao']?>  </div>
                        </div>
                      </div>
                </div>
                <?php }
                }?>

            </div>


        </div>

    </div>




<?php include("footer.php"); ?>
