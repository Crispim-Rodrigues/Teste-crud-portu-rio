<?php 
    require 'config.php';

    $id = filter_input(INPUT_POST, 'id');
    $movimentacao = filter_input(INPUT_POST, 'movimentacao');
    $datainicio = filter_input(INPUT_POST, 'datainicio');
    $datafim = filter_input(INPUT_POST, 'datafim');

    // Editar

    $sql = "UPDATE movimentacao SET movimentacao = '{$movimentacao}', `data inicio` = '{$datainicio}', `data final` = '{$datafim}' where `id` = '{$id}'";
    if($conn->query($sql) === TRUE){
        header("Location: index.php");
    }else{
        header("Location: editar_movimentacao.php");
    };


?>