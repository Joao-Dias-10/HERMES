<?php
$mes_atual = date('m'); //MES
$mes_atual2 = '';
$ano_atual =date('Y'); //ANO


if($mes_atual == '01'){
    $mes_atual2 = "JAN";
}elseif($mes_atual == '02'){
    $mes_atual2 = "FEV";
}
elseif($mes_atual == '03'){
    $mes_atual2 =  "MAR";
}
elseif($mes_atual == '04'){
    $mes_atual2 =  "ABR";
}
elseif($mes_atual == '05'){
    $mes_atual2 =  "MAI";
}
elseif($mes_atual == '06'){
    $mes_atual2 =  "JUN";
}
elseif($mes_atual == '07'){
    $mes_atual2 =  "JUL";
}
elseif($mes_atual == '08'){
    $mes_atual2 =  "AGO";
}
elseif($mes_atual == '09'){
    $mes_atual2 =  "SET";
}
elseif($mes_atual == '10'){
    $mes_atual2 =  "OUT";
}
elseif($mes_atual == '11'){
    $mes_atual2 =  "NOV";
}
elseif($mes_atual == '12'){
    $mes_atual2 =  "DEZ";
}

    if (isset($_GET['id'])) {
        $grupo = $_GET['id'];
        $sql = "SELECT * FROM arquivo WHERE Operacao IN ('$grupo') and MES = '$mes_atual2' and ANO = '$ano_atual'";
    } elseif (isset($_GET['busca'])) {
        $grupo = $_GET['busca'];
        $sql = " SELECT * FROM arquivo WHERE  MES = '$mes_atual2' and ANO = '$ano_atual' and nome LIKE '%" . $grupo . "%' ";
    } elseif (isset($_GET['mes'])) {
        $mes = $_GET['mes'];
        $sql = " SELECT * FROM arquivo WHERE MES IN ('$mes')";
    } elseif (isset($_GET['id']) == '') {
        $sql = "SELECT * FROM arquivo WHERE MES = '$mes_atual2' and ANO = '$ano_atual'";
    } else {
        $sql = "SELECT * FROM arquivo WHERE MES = '$mes_atual2' and ANO = '$ano_atual'";
    }
 


?>