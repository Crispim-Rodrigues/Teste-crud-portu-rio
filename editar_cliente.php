<?php 
    require 'config.php';
    $id = filter_input(INPUT_GET, 'id');
    $cliente = [];
    if($id){
        $sql = "SELECT * FROM container WHERE `id` = '{$id}' ";
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
<h1>Editar Cliente</h1>

<form method="POST" action="editar_cliente_action.php">
        <input type="hidden" name="id" value='<?=$cliente['id'] ?>'>
    <label>
        Cliente: <input required="required"  type="text" maxlength="20" name="cliente" pattern="[A-Za-z]{4,20}" value='<?=$cliente['cliente']?>'>
    </label>
    <label>
        Prefixo: <input required="required"  type="text" maxlength="4" name="prefixo" pattern="[A-Z]{4}" title="TEM QUE TER 4 LETRAS" value='<?=$cliente['prefixo']?>'>
    </label>
    <label>
        Placa: <input required="required"  type="text" maxlength="7" name="placa" pattern="[0-9]{7}" title="TEM QUE TER 7 NUMEROS" value='<?=$cliente['placa']?>'>
    </label>
    <label>
        <select required="required" name="tipo" value='<?=$cliente['tipo']?>'>
            <option disabled>selecionar</option>
            <option>20</option>
            <option>40</option>
        </select>
    </label>
    <label>
        <select name="status" value='<?=$cliente['status']?>'>
            <option disabled>selecionar</option>
            <option>Cheio</option>
            <option>Vazio</option>
        </select>
    </label>
    <label>
        <select required="required" name="categoria" value='<?=$cliente['categoria']?>'>
            <option disabled>selecionar</option>
            <option>Exportação</option>
            <option>Inportação</option>
        </select>
    </label>
    <input type="submit" value="SALVAR">
</form>