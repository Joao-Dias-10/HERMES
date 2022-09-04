<?php

function QTD_RELATORIOS()
{
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "arquivos";

    //String de coneção
    $conn = new mysqli($servidor, $usuario, $senha, $banco);
    $sql = "SELECT * FROM arquivo";
    if ($result = mysqli_query($conn, $sql)) {
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}

function QTD_RELATORIOS_CADASTRADOS()
{
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "arquivos";

    //String de coneção
    $conn = new mysqli($servidor, $usuario, $senha, $banco);
    $sql = "SELECT * FROM cadastrados";
    if ($result = mysqli_query($conn, $sql)) {
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}

function QTD_GRUPOS_CADASTRADOS()
{
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "arquivos";

    //String de coneção
    $conn = new mysqli($servidor, $usuario, $senha, $banco);
    $sql = "SELECT DISTINCT operacao FROM cadastrados";
    if ($result = mysqli_query($conn, $sql)) {
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}

function QTD_RELATORIOS_CADASTRADOS_MES()
{
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "arquivos";

    //String de coneção
    $conn = new mysqli($servidor, $usuario, $senha, $banco);
    $sql = "SELECT DISTINCT operacao FROM cadastrados WHERE data_cadastro BETWEEN '2022-09-01 00:00:00' and '2022-09-30 23:59:59'";
    if ($result = mysqli_query($conn, $sql)) {
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}

function QTD_BAIXADA()
{
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "arquivos";

    //String de coneção
    $conn = new mysqli($servidor, $usuario, $senha, $banco);
    $sql = "SELECT * FROM qtd_baixada";
    if ($result = mysqli_query($conn, $sql)) {
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}
