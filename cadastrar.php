<?php include "iuricode\Estrutura\Head.php"; ?>
<?php include "iuricode\Estrutura\Navbar.php"; ?>

<div class="container-fluid">
    <div class="caixa">
        <div class="caixa2">
            <form action="scripts\scri_cadastrar.php" method="post" enctype="multipart/form-data">

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="mome" class="form-label">RELATÓRIO</label>
                        <input type="text" class="form-control" id="mome" name="nome" required/>

                    </div>
                    <div class="col-md-6">
                        <label for="operacao" class="form-label">OPERAÇÃO</label>
                        <input type="text" class="form-control" id="operacao" name="operacao" required/>
                    </div>
                    <div class="col-md-12">
                        <label for="email" class="form-label">EMAIL</label>
                        <textarea type="text" class="form-control" id="email" name="email" rows="3"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="emailcopia" class="form-label">EMAIL COPIA</label>
                        <textarea type="text" class="form-control" id="emailcopia" name="emailcopia" rows="3"></textarea>
               </div>
      

                </div>

                <div id="espaco" class="d-grid gap-2 col-6 mx-auto">

                    <button id="submit" type="submit" class="btn btn-dark"><b>ATUALIZAR</b></button>

                </div>
                <label></label>

            </form>
        </div>
    </div>
</div>


<?php include "iuricode\Estrutura\Footer.php"; ?>