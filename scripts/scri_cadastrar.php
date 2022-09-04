<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>

<body>
    <?php
    $nome = $_POST['nome'];
    $operacao = $_POST['operacao'];

    if (isset($_POST['nome'])) {

        function grupo($operacao, $nome)
        {
            include "config.php";
            $sql = "SELECT operacao FROM cadastrados WHERE operacao='$operacao' and nome='$nome'";
            $query = $mysqli->query($sql);
            $total = mysqli_num_rows($query);

            return $total;
        }

        if (grupo($operacao, $nome) == 0 || grupo($operacao, $nome)== null) {

            $nome = $_POST['nome'];
            $operacao = $_POST['operacao'];
            $variavel = "s";

            include "config.php";

            $sql = "INSERT INTO cadastrados (nome,operacao,data_cadastro) VALUES ('$nome','$operacao',NOW())";
            $query = $mysqli->query($sql);

    ?>
            <script language='javascript'>
                Swal.fire({
                    icon: 'success',
                    title: 'INSERIDO'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "../cadastrar.php";
                    }
                })
            </script>
        <?php
        } else {
            $nome = $_POST['nome'];
            $operacao = $_POST['operacao'];
            $variavel = "s";



            include "config.php";

            $sql = "UPDATE cadastrados SET  nome ='$nome', operacao ='$operacao', data_cadastro = NOW() WHERE  operacao IN ('$operacao') and nome IN ('$nome')";
            $query = mysqli_query($mysqli, $sql)
        ?>
            <script language='javascript'>
                Swal.fire({
                    icon: 'success',
                    title: 'ATUALIZADO NO SISTEMA'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "../cadastrar.php";
                    }
                })
            </script>

        <?php


        }
    } else {
        ?>

        <script language='javascript'>
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Tente novamente mais tarde!'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = "../index.php";
                }
            })
        </script>


    <?php


    }
    ?>


</body>

</html>
<?php
