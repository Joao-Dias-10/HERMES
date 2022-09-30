<?php include "iuricode\Estrutura\Head.php"; ?>
<?php include "iuricode\Estrutura\Navbar.php"; ?>
<?php include "scripts\Functios.php"; ?>


<div class="container-fluid">
    <div class="row">

        <section class="content">

            <center>
                <ul class="cards">

                    <li class="cards__item">
                        <div class="card">
                            <div class="card__content">
                                <center>
                                    <div class="card__title"><b>
                                            <h3>
                                                <font color="#000000"><?php echo QTD_RELATORIOS();?></font>
                                            </h3>
                                        </b>
                                    </div>
                                    <p class="card__title"><img src="iuricode\assets\img\grafico-de-barras (2).png" alt="" height="30">
                                        <font color="#000000"><b>QUANTIDADE DE RELATÓRIOS CONSOLIDADO</b></font>
                                    </p>
                                </center>

                            </div>
                        </div>
                    </li>
                    <li class="cards__item">
                        <div class="card">
                            <div class="card__content">
                                <center>
                                    <div class="card__title"><b>
                                            <h3>
                                                <font color="#000000">12</font>
                                            </h3>
                                        </b></div>
                                    <p class="card__title"><img src="iuricode\assets\img\grafico-de-barras (2).png" alt="" height="30">
                                        <font color="#000000"><b>QUANTIDADE DE ACESSOS A PLATAFORMA MÊS</b></font>
                                    </p>
                                </center>

                            </div>
                        </div>
                    </li>

                    <li class="cards__item">
                        <div class="card">
                            <div class="card__content">
                                <center>
                                    <div class="card__title"><b>
                                            <h3>
                                                <font color="#000000"><?php echo QTD_BAIXADA();?></font>
                                            </h3>
                                        </b></div>
                                    <p class="card__title"><img src="iuricode\assets\img\grafico-de-barras (2).png" alt="" height="30">
                                        <font color="#000000"><b>QUANTIDADE BAIXADA CONSOLIDADO MÊS</b></font>
                                    </p>
                                </center>

                            </div>
                        </div>
                    </li>

                </ul>
            </center>


            <div class="accordion" id="accordionExample">
                <center>
                    <div class="accordion-item">

                        <h2 class="accordion-header" id="headingOne">
                            <button id="colapse" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                <img src="iuricode\assets\img\icons8-odata-48.png" alt="" srcset="">
                                <font color="#000000"> ACOMPANHAMENTO</font>

                            </button>
                        </h2>

                        <div  style="overflow-x: scroll;" id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table" id="table">
                                <thead>
                                        <tr>
                                            <th style="text-align: center">ANO</th>
                                            <th style="text-align: center">MES</th>
                                            <th style="text-align: center">DATA</th>
                                            <th style="text-align: center">GRUPO</th>
                                            <th style="text-align: center">NOME</th>
                                            <th style="text-align: center">EDITAR</th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">ANO</th>
                                            <th style="text-align: center">MES</th>
                                            <th style="text-align: center">DATA</th>
                                            <th style="text-align: center">GRUPO</th>
                                            <th style="text-align: center">NOME</th>
                                            <th style="text-align: center">EDITAR</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php


                                        include "scripts\config.php";
                                        include "scripts\gerar.php";
                                        $query = $mysqli->query($sql);
                                        while ($dados = $query->fetch_array()) {
                                        ?>


                                            <tr>

                                                <td style="text-align: center">
                                                    <?php echo $dados['ANO']; ?>
                                                </td>

                                                <td style="text-align: center">
                                                    <?php echo $dados['MES']; ?>
                                                </td>

                                                <td style="text-align: center">
                                                    <?php echo $dados['data']; ?>
                                                </td>
                                                <td style="text-align: center">
                                                    <?php echo $dados['operacao']; ?>
                                                </td>
                                                <td style="text-align: center">
                                                    <?php echo $dados['nome']; ?>
                                                </td>
                                                <td style="text-align: center">
                                                    <center>
                                                        <a id="mis" href='scripts\contabaixar.php?dados=<?php echo $dados['arquivo'];echo "|";echo $dados['codigo'];echo "|";echo $dados['data'];echo "|";echo $dados['nome'];echo "|"; echo $dados['operacao'];echo "|";echo $dados['ANO'];echo "|"; echo $dados['MES']; ?>'>
                                                            <button type="button" class="btn btn-secondary"><i class='fas fa-file-download'></i></button>
                                                        </a>
                                                        <a id="mis" href='scripts\Excluir.php?id=<?php echo $dados['codigo'];
                                                                                                    echo $dados['arquivo']; ?>'>
                                                            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                                        </a>
                                                        <!-- <a id="mis" href='inserir.php'>
                                                            <button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                                                        </a> -->
                                                    </center>
                                                </td>









                                            </tr>
                                        <?php } ?>
                                    </tbody>
 
                                  

                                </table>
                            </div>
                        </div>
                    </div>


            </div>

        </section>
    </div>
</div>
<style>
    .card__image--fence {
        background-image: url(iuricode/assets/img/relatorios.gif);
    }
</style>
<?php include "iuricode\Estrutura\Footer.php"; ?>