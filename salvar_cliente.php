<?php 
    require 'config.php';

    $cliente = filter_input(INPUT_POST, 'cliente');
    $prefixo = filter_input(INPUT_POST, 'prefixo');
    $placa = filter_input(INPUT_POST, 'placa');
    $tipo = filter_input(INPUT_POST, 'tipo');
    $status = filter_input(INPUT_POST, 'status');
    $categoria = filter_input(INPUT_POST, 'categoria');
    // ENVIAR
    $sql = "INSERT INTO container VALUE(NULL, '{$cliente}', '{$prefixo}', '{$placa}', '{$tipo}', '{$status}', '{$categoria}')";
    $sql2 = "SELECT * FROM container where `cliente` = '{$cliente}' AND `prefixo` = '{$prefixo}' AND `placa` = '{$placa}' AND `tipo` = '{$tipo}' AND `status`= '{$status}' AND `categoria` = '{$categoria}'";

    $result = $conn->query($sql2);

    if($result->num_rows === 0){
        // CREATE CLIENTE
        if($conn->query($sql) === TRUE){
            //RETURN CLIENTE ID   
            $last_id = $coon->insert_id;

            // CREATE MOVIMENTAÇÃO
            $sql3 = "INSERT INTO movimentacao VALUES('{$last_id}', '{$cliente}', '', '', '')";
            if($conn->query($sql3) === TRUE){
                header("Location: index.php");
            };
        };
        

    }else{
        header("Location: novo_cliente.php");
    };
?>