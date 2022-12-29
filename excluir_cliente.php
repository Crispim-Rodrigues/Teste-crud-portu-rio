<?php 
    require 'config.php';
    $id = filter_input(INPUT_GET, 'id');
    $sql = "DELETE FROM container where id='{$id}'";
    if($conn->query($sql) === TRUE){
        header("Location: index.php");
    };
?>