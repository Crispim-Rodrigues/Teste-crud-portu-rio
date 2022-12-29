<?php 
    require 'config.php';

    $id = filter_input(INPUT_POST, 'id');
    $cliente = filter_input(INPUT_POST, 'cliente');
    $prefixo = filter_input(INPUT_POST, 'prefixo');
    $placa = filter_input(INPUT_POST, 'placa');
    $tipo = filter_input(INPUT_POST, 'tipo');
    $status = filter_input(INPUT_POST, 'status');
    $categoria = filter_input(INPUT_POST, 'categoria');

    $sql = "UPDATE container SET cliente = '{$cliente}', prefixo = '{$prefixo}', placa = '{$placa}', tipo = '{$tipo}', `status` = '{$status}', categoria = '{$categoria}' WHERE `id` = '{$id}'";
    $sql2 = "UPDATE movimentacao SET cliente = '{$cliente}' WHERE `id` = '{$id}'";
    if($conn->query($sql) === TRUE AND $conn->query($sql2) === TRUE){
        header("Location: index.php");
    }else{
        header("Location: editar_cliente.php");
    };
?>