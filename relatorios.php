<?php include "iuricode\Estrutura\Head.php"; ?>
<?php include "iuricode\Estrutura\Navbar_cliente.php"; ?>


<div class="container-fluid">
    <div class="row">

        <section class="content">

            <ul class="cards">
                <?php
                include "scripts\config.php";
                include "scripts\gerar.php";
                
                $query = $mysqli->query($sql);
                while ($dados = $query->fetch_array()) {
                ?>
                    <li class="cards__item">
                        <div class="card">
                            <div class="card__image card__image--fence"></div>
                            <div class="card__content">
                                <center>
                                <div class="card__title"><b><?php echo $dados['operacao']; ?></b></div>
                                <div class="card__title"><b><?php echo $dados['nome']; ?></b></div>
                                </center>
                                <p class="card__title"><b>ÚILTIMA ATUALIZAÇÃO: <?php echo $dados['data']; ?></b></p>

                                <center>
                                    <a id="mis" href='scripts\contabaixar.php?dados=<?php echo $dados['arquivo'];echo "|";echo $dados['codigo'];echo "|";echo $dados['data'];echo "|";echo $dados['nome'];echo "|"; echo $dados['operacao'];echo "|";echo $dados['ANO'];echo "|"; echo $dados['MES']; ?>'>
                                    <button type="button" class="btn btn-secondary"><i class='fas fa-file-download'></i> <b>BAIXAR RELATÓRIO<b></button>
                                    </a>
                                </center>


                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>

        </section>
    </div>
</div>
<style>
.card__image--fence {
        background-image: url(iuricode/assets/img/relatorios.gif);
    }
</style>
<?php include "iuricode\Estrutura\Footer.php"; ?>