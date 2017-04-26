<?php include("header.php"); ?>


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
                <h4>Produtos</h4>
                <hr>

                <div>

                    <div class="row">

                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="assets/produtos/1.png">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>...</p>
                                    <p><a href="produto.php?id=1" class="btn btn-primary" role="button">Comprar</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="assets/produtos/2.png" alt="...">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>...</p>
                                    <p><a href="#" class="btn btn-primary" role="button">Comprar</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="assets/produtos/3.png" alt="...">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>...</p>
                                    <p><a href="#" class="btn btn-primary" role="button">Comprar</a> </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="assets/produtos/4.png" alt="...">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>...</p>
                                    <p><a href="#" class="btn btn-primary" role="button">Comprar</a> </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="assets/produtos/1.png">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>...</p>
                                    <p><a href="#" class="btn btn-primary" role="button">Comprar</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="assets/produtos/2.png" alt="...">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>...</p>
                                    <p><a href="#" class="btn btn-primary" role="button">Comprar</a> </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="assets/produtos/3.png" alt="...">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>...</p>
                                    <p><a href="#" class="btn btn-primary" role="button">Comprar</a> </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="assets/produtos/4.png" alt="...">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>...</p>
                                    <p><a href="#" class="btn btn-primary" role="button">Comprar</a></p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- PAGINADOR -->

                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">10</a></li>
                        <li><a href="#">11</a></li>
                        <li><a href="#">12</a></li>

                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>



        </div>

    </div>




<?php include("footer.php"); ?>