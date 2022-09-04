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
    error_reporting(E_ALL);
    ini_set('display_errors', '0');
    $nome = $_POST['nome'];
    $operacao = $_POST['operacao'];
    $ano = $_POST['ano'];
    $mes = $_POST['mes'];

    if(isset( $_POST['nome'])){
    

    function grupo($operacao, $nome, $mes, $ano)
    {
        include "config.php";
        $sql = "SELECT operacao FROM arquivo WHERE operacao='$operacao' and nome='$nome' and MES='$mes' and ANO='$ano'";
        $query = $mysqli->query($sql);
        $total = mysqli_num_rows($query);

        return $total;
    }





    if (grupo($operacao, $nome, $mes, $ano) == 0) {
        //echo "NÃO tem no banco";
        //formulario foi enviado
        $arquivo = $_FILES['arquivo'];

        $arquivoNovo = explode(".", $arquivo['name']);

        if ($arquivoNovo[sizeof($arquivoNovo) - 1] != 'xlsb' and $arquivoNovo[sizeof($arquivoNovo) - 1] != 'xlsx' and $arquivoNovo[sizeof($arquivoNovo) - 1] != 'xlsm') {

    ?>
            <script language='javascript'>
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Você tentou enviar um arquivo inapropriado. So é permitido extensões xlsb, xlsm ou xlsx!'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "../index.php";
                    }
                })
            </script>

        <?php
            die("");
        } else {

            //condição de erro
            move_uploaded_file($arquivo['tmp_name'], 'uploads/'. $mes . $ano . $operacao . $arquivo['name']);
            include "config.php";
            include "functions.php";




            $nome = $_POST['nome'];
            $arquivo = $operacao . $arquivo['name'];
            $operacao = $_POST['operacao'];
            $variavel = "s";
            $id = uniqid();



            $sql = "INSERT INTO arquivo (ANO, MES, codigo, nome,arquivo,operacao,data) VALUES ('$ano','$mes','$id','$nome','$mes$ano$arquivo','$operacao',NOW())";
            $query = $mysqli->query($sql);



        ?>



            <script language='javascript'>
                Swal.fire({
                    icon: 'success',
                    title: 'INSERIDO'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "../index.php";
                    }
                })
            </script>

        <?php



        }
    } else {
        $arquivo = $_FILES['arquivo'];

        $arquivoNovo = explode(".", $arquivo['name']);

        if ($arquivoNovo[sizeof($arquivoNovo) - 1] != 'xlsb' and $arquivoNovo[sizeof($arquivoNovo) - 1] != 'xlsx' and $arquivoNovo[sizeof($arquivoNovo) - 1] != 'xlsm') {

        ?>
            <script language='javascript'>
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Você tentou enviar um arquivo inapropriado. So é permitido extensões xlsb, xlsm ou xlsx!'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "../index.php";
                    }
                })
            </script>

        <?php
            die("");
        } else {
            //condição de erro
            //condição de erro
            move_uploaded_file($arquivo['tmp_name'], 'uploads/' . $mes . $ano . $operacao . $arquivo['name']);
            include "config.php";
            include "functions.php";




            $nome = $_POST['nome'];
            $arquivo = $operacao . $arquivo['name'];
            $operacao = $_POST['operacao'];
            $variavel = "s";
            $id = uniqid();


            include "config.php";

            $sql = "UPDATE arquivo SET ANO='$ano', MES='$mes', codigo='$id', nome ='$nome',arquivo ='$mes$ano$arquivo',operacao ='$operacao', data = NOW() WHERE operacao IN ('$operacao') and nome IN ('$nome')";
            $query = mysqli_query($mysqli, $sql)


        ?>




            <script language='javascript'>
                Swal.fire({
                    icon: 'success',
                    title: 'ATUALIZADO NO SISTEMA'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "../index.php";
                    }
                })
            </script>

    <?php

        }
    }} else{
        ?>
        
            <script language='javascript'>
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Tamanho do arquivo excede o permitido pelo sistema!'
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
