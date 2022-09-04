<nav id="nav" class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="relatorios.php">

      <img id="hermes" src="iuricode\assets\img\hermes.png" height="30">HERMES

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <form action="" method="post">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <b>Home</b>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="filtro" name="filtro" class="form-control" onchange="this.form.submit()">

              <li><a class="dropdown-item" href='table_relatorios.php'>TABELAS</a></li>
              <li><a class="dropdown-item" href='relatorios.php'>CARDS</a></li>
            </ul>
          </li>
        </form>
        <form action="" method="post">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <b>Histórico</b>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="filtro" name="filtro" class="form-control" onchange="this.form.submit()">
              <li><a class="dropdown-item">2022</a></li>

              <!-- <a id="mis" href='scripts\Excluir.php?id=<?php echo $dados['codigo']; ?>'> -->
              <?php
              include "scripts\config.php";
              $sql = "SELECT DISTINCT MES FROM arquivo";
              $query = $mysqli->query($sql);
              while ($dados = $query->fetch_array()) {
              ?>
                <li><a class="dropdown-item" href='historicotablerelatorios.php?mes=<?php echo $dados['MES']; ?>'><?php echo $dados['MES']; ?></a></li>
              <?php
              }
              ?>

            </ul>
          </li>
        </form>
<!-- 
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <b>Controle</b>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="filtro" name="filtro" class="form-control" onchange="this.form.submit()">

              <li><a class="dropdown-item" href='cadastrar.php'>CADASTRAR RELATÓRIOS</a></li>
              <li><a class="dropdown-item" href='editar.php'>EDITAR RELATÓRIOS CADASTRADOS</a></li>
            </ul>
          </li>

        <li class="nav-item">
          <a class="nav-link" href="inserir.php"><b>Inserir</b></a>
        </li> -->
        <!-- <form action="" method="post">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <b>Grupos</b>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="filtro" name="filtro" class="form-control" onchange="this.form.submit()">

              <li><a class="dropdown-item" href='index.php?id=ALTO VALOR'>Alto Valor</a></li>
              <li><a class="dropdown-item" href='index.php?id=CLARO'>Claro</a></li>
              <li><a class="dropdown-item" href='index.php?id=NET'>NET</a></li>
              <li><a class="dropdown-item" href='index.php?id=EMPRESARIAL NET'>Empresarial NET</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href='index.php'>TODOS</a></li>

            </ul>
          </li>
        </form> -->

      </ul>

      <div class="dropdown">

        <i id="user" class="fa-solid fa-user-tie" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">Óla</a></li>
          <li><a class="dropdown-item" href="scripts\logout.php"><i class="fa-solid fa-right-from-bracket"></i> Sair</a></li>
        </ul>
      </div>
      <div class="d-flex">
        <form class="d-flex">
          <input name="busca" for="busca" class="form-control me-2" type="search" placeholder="Pesquisar Relatório.." aria-label="Search">
          <button class="btn btn-outline-secondary" type="submit"><b>Buscar</b></button>
        </form>
      </div>
    </div>
  </div>
</nav>
<script>
  document.getElementById('filtro').addEventListener('change', function() {
    this.form.submit();
  });
</script>