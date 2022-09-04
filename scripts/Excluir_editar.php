<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php


    include "config.php";
    //Pegar nome do relatorio e do arquivo
    $delete = $_GET["del"];
    //nome do relatorio
    // deleta dados referentes do banco
    $sql = "DELETE FROM cadastrados WHERE id =  '$delete' ";
    //verifica se deleto
    if ($mysqli->query($sql) == TRUE) {

    ?>

            <script language='javascript'>
                Swal.fire({
                    icon: 'success',
                    title: 'Relatório excluido com sucesso!'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */

                    if (result.isConfirmed) {
                        <?php $previous = $_SERVER['HTTP_REFERER'];?>
                        window.location.href ="<?=$previous ?>";
                    }
                })
            </script>



        <?php
        } else {
        ?>
            <script language='javascript'>
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Não foi possivel fazer a exlusão, tente novamente mais tarde!'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        <?php $previous = $_SERVER['HTTP_REFERER'];?>
                        window.location.href ="<?=$previous ?>";
                    }
                })
            </script>


        <?php
        }

    ?>

</body>

</html>