<h1>Novo Cliente</h1>

<form method="POST" action="salvar_cliente.php">
    <label>
        Cliente: <input required="required"  type="text" maxlength="20" name="cliente" pattern="[A-Za-z]{4,20}">
    </label>
    <label>
        Prefixo: <input required="required"  type="text" maxlength="4" name="prefixo" pattern="[A-Z]{4}" title="TEM QUE TER 4 LETRAS">
    </label>
    <label>
        Placa: <input required="required"  type="text" maxlength="7"  name="placa" pattern="[0-9]{7}" title="TEM QUE TER 7 NUMEROS">
    </label>
    <label>
        <select required="required" name="tipo">
            <option disabled>selecionar</option>
            <option>20</option>
            <option>40</option>
        </select>
    </label>
    <label>
        <select name="status">
            <option disabled>selecionar</option>
            <option>Cheio</option>
            <option>Vazio</option>
        </select>
    </label>
    <label>
        <select required="required" name="categoria">
            <option disabled>selecionar</option>
            <option>Exportação</option>
            <option>Inportação</option>
        </select>
    </label>
    <input type="submit" value="SALVAR">
</form>