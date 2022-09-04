<?php include "iuricode\Estrutura\Head.php"; ?>
<?php include "iuricode\Estrutura\Navbar.php"; ?>

<div class="container-fluid">
    <div class="caixa">
        <div class="caixa2">
            <form action="scripts\lancado.php" method="post" enctype="multipart/form-data">

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">ANO</label>
                        <select class="form-control" id="ano" name="ano" required>
                            <option value=""></option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">MÊS</label>
                        <select class="form-control" id="mes" name="mes" required>
                            <option value=""></option>
                            <option value="JAN">JANEIRO</option>
                            <option value="FEV">FEVEREIRO</option>
                            <option value="MAR">MARÇO</option>
                            <option value="ABR">ABRIL</option>
                            <option value="MAI">MAIO</option>
                            <option value="JUN">JUNHO</option>
                            <option value="JUL">JULHO</option>
                            <option value="AGO">AGOSTO</option>
                            <option value="SET">SETEMBRO</option>
                            <option value="OUT">OUTUBRO</option>
                            <option value="NOV">NOVEMBRO</option>
                            <option value="DEZ">DEZEMBRO</option>
                        </select>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="mome" class="form-label">RELATÓRIO</label>
                        <select class="form-control" id="mome" name="nome" required>
                            <option value=""></option>
                            <?php
                            include "scripts\config.php";
                            $sql = "SELECT DISTINCT nome FROM cadastrados";
                            $query = $mysqli->query($sql);
                            while ($dados = $query->fetch_array()) {
                            ?>
                                <option value="<?php echo $dados['nome']; ?>"><?php echo $dados['nome']; ?></option>
                            <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="operacao" class="form-label">OPERAÇÃO</label>
                        <select class="form-control" id="operacao" name="operacao" required>
                            <option value=""></option>
                            <?php
                            include "scripts\config.php";
                            $sql = "SELECT DISTINCT operacao FROM cadastrados";
                            $query = $mysqli->query($sql);
                            while ($dados = $query->fetch_array()) {
                            ?>
                                <option value="<?php echo $dados['operacao']; ?>"><?php echo $dados['operacao']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                </div>


                <div class="col-md-12">
                    <label for="arquivo" class="form-label required ">ARQUIVO</label>
                    <input type="file" class="form-control" name="arquivo" id="arquivo" required />
                </div>

                <script>

                </script>

                <div id="espaco" class="d-grid gap-2 col-6 mx-auto">

                    <button id="submit" type="submit" class="btn btn-dark"><b>ATUALIZAR</b></button>

                </div>
                <label></label>

            </form>
        </div>
    </div>
</div>


<?php include "iuricode\Estrutura\Footer.php"; ?>