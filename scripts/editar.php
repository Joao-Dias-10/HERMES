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
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $operacao = $_POST['operacao'];

    if (isset($_POST['id'])) {




       include "config.php";;


        $sql = "UPDATE cadastrados SET  operacao='$operacao', nome='$nome', data_cadastro=NOW()  WHERE id IN ('$id')";
        $query = mysqli_query($mysqli, $sql)
    ?>
        <script language='javascript'>
            Swal.fire({
                icon: 'success',
                title: 'ATUALIZADO NO SISTEMA'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    <?php $previous = $_SERVER['HTTP_REFERER']; ?>
                    window.location.href = "../editar.php";
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
