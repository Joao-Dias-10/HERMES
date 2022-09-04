<?php

    if (isset($_GET['id'])) {
        $grupo = $_GET['id'];
        $sql = "SELECT * FROM arquivo WHERE Operacao IN ('$grupo')";
    } elseif (isset($_GET['busca'])) {
        $grupo = $_GET['busca'];
        $sql = " SELECT * FROM arquivo WHERE nome LIKE '%" . $grupo . "%' ";
    } elseif (isset($_GET['mes'])) {
        $mes = $_GET['mes'];
        $sql = " SELECT * FROM arquivo WHERE MES IN ('$mes')";
    } elseif (isset($_GET['id']) == '') {
        $sql = "SELECT * FROM arquivo";
    } else {
        $sql = "SELECT * FROM arquivo";
    }
 


?>