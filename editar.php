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
                                                <font color="#000000"><?php echo QTD_RELATORIOS_CADASTRADOS(); ?></font>
                                            </h3>
                                        </b>
                                    </div>
                                    <p class="card__title"><img src="iuricode\assets\img\grafico-de-barras (2).png" alt="" height="30">
                                        <font color="#000000"><b>QUANTIDADE DE RELATÓRIOS CADASTRADOS</b></font>
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
                                                <font color="#000000"><?php echo  QTD_GRUPOS_CADASTRADOS();?></font>
                                            </h3>
                                        </b></div>
                                    <p class="card__title"><img src="iuricode\assets\img\grafico-de-barras (2).png" alt="" height="30">
                                        <font color="#000000"><b>QUANTIDADE DE GRUPOS CADASTRADOS</b></font>
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
                                                <font color="#000000"><?php echo QTD_RELATORIOS_CADASTRADOS_MES();?></font>
                                            </h3>
                                        </b></div>
                                    <p class="card__title"><img src="iuricode\assets\img\grafico-de-barras (2).png" alt="" height="30">
                                        <font color="#000000"><b>QUANTIDADE DE RELATÓRIOS CADASTRADOS MÊS</b></font>
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

                        <div style="overflow-x: scroll;" id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table" id="table">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">ID</th>
                                            <th style="text-align: center">RELATÓRIO</th>
                                            <th style="text-align: center">GRUPO</th>
                                            <th style="text-align: center">DATA DO CADASTRO</th>
                                            <th style="text-align: center">EDITAR</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php


                                        include "scripts\config.php";
                                        $sql = "SELECT * FROM cadastrados";
                                        $query = $mysqli->query($sql);
                                        while ($dados = $query->fetch_array()) {
                                        ?>


                                            <tr>

                                                <td style="text-align: center">
                                                    <?php echo $dados['id']; ?>
                                                </td>

                                                <td style="text-align: center">
                                                    <?php echo $dados['nome']; ?>
                                                </td>

                                                <td style="text-align: center">
                                                    <?php echo $dados['operacao']; ?>
                                                </td>
                                                <td style="text-align: center">
                                                    <?php echo $dados['data_cadastro']; ?>
                                                </td>

                                                <td style="text-align: center">
                                                    <center>
                                                        <a id="mis" href='scripts\Excluir_editar.php?del=<?php echo $dados['id']; ?>'>
                                                            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                                        </a>

                                                        <a id="mis" href='cadastrar_editar.php?id=<?php echo $dados['id']; ?>'>
                                                            <button type="button" class="btn btn-primary"> <i class="fa-solid fa-pen-to-square"></i></button>
                                                        </a>




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

    #padrao {
        color: orange;
    }
</style>
<?php include "iuricode\Estrutura\Footer.php"; ?>