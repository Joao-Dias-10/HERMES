<?php

if (isset($_GET['dados'])) {
    $dado = $_GET['dados'];
    $array = explode('|', $dado);
    $doc0 = $array[0];
    $cod_unico = $array[1];
    $data = $array[2];
    $nome = $array[3];
    $operacao = $array[4];
    $MES = $array[5];
    $ANO = $array[6];
    $cliente = "João Dias";

    header("location: uploads/".$doc0);
    include "config.php";   

    $sql = "INSERT INTO qtd_baixada (DATA_DO_DONWLOAD,documento,cod_unico,data,nome,operacao,ANO,MES,usuario) VALUES (NOW(),'$doc0','$cod_unico','$data','$nome','$operacao','$MES','$ANO','$cliente')";
    $query = $mysqli->query($sql);
}

    ?>