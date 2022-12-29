<?php 
    require 'config.php';
    $id = filter_input(INPUT_GET, 'id');
    $movimentação = [];
    if($id){
        $sql = "SELECT * FROM movimentacao WHERE `id` = '{$id}' ";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $cliente = $result->fetch_assoc();
        }else{
            header('Location: index.php');
        };

    }else{
        header("Location: index.php");
    };

?>
<form method="POST" action="editar_movimentacao_action.php">
        <input type="hidden" name="id" value='<?=$cliente['id'] ?>'>
    <label>
        Tipo de Movimenteção:
        <select required="required" name="movimentacao" value='<?=$movimentacao['movimentacao']?>'>
            <option disabled>selecionar</option>
            <option>Embarque</option>
            <option>Descarga</option>
            <option>Gate in</option>
            <option>Gate out</option>
            <option>Resposicionamento</option>
            <option>Pesagem</option>
            <option>Scanner</option>
        </select>
    </label>
    <label>
        Data inicio: <input required="required"  type="DATETIME-local" name="datainicio" pattern="[A-Z]{4}" title="TEM QUE TER 4 LETRAS" value='<?=$movimentacao['data inicio']?>'>
    </label>
    <label>
        Data final: <input required="required"  type="DATETIME-local" name="datafim" pattern="[0-9]{7}" title="TEM QUE TER 7 NUMEROS" value='<?=$cliente['data final']?>'>
    </label>
    <input type="submit" value="SALVAR">
</form>