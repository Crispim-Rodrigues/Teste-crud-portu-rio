<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porto</title>
</head>
<body>
    <header>
        <a href="#">Home</a>
        <a href="novo_cliente.php">Novo Cliente</a>
    </header>
    <h1 class="titulo">Clientes</h1>

    <table border='1' style='margin: 0 auto; border-collapse: collapse'>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Prefixo</th>
            <th>Placa</th>
            <th>Tipo</th>
            <th>Status</th>
            <th>Categoria</th>
            <th>Ações</th>
        </tr>
            <?php 
                require 'config.php';
                $sql = "SELECT * FROM container";
                $result = $conn->query($sql);
                
                if($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()){
                        echo "<tr>"; 
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["cliente"] . "</td>";
                        echo "<td>" . $row["prefixo"] . "</td>";
                        echo "<td>" . $row["placa"] . "</td>";
                        echo "<td>" . $row["tipo"] . "</td>";
                        echo "<td>" . $row["status"] . "</td>";
                        echo "<td>" . $row["categoria"] . "</td>";
                        echo "<td>
                                <a href='excluir_cliente.php?id=". $row["id"]."' style='padding: 0 5px; text-decoration: none; color: red;'>[Excluir]</a>
                                <a href='editar_cliente.php?id=". $row["id"]."' style='padding: 0 5px; text-decoration: none; color: green;'>[Editar]</a>
                            </td>";
                        echo "</tr>";
                    };
                };

            
            
            
            ?>
    </table>
   
    <h1 class="titulo">Movimentação</h1>
    
    <table border='1' style='margin: 0 auto; border-collapse: collapse'>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Movimentação</th>
            <th>Data Inicio</th>
            <th>Data fim</th>
            <th>Ações</th>
        </tr>
            <?php 
                require 'config.php';
                $sql = "SELECT * FROM movimentacao";
                $result = $conn->query($sql);
                
                if($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()){
                        echo "<tr>"; 
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["cliente"] . "</td>";
                        echo "<td>" . $row["movimentacao"] . "</td>";
                        echo "<td>" . $row["data inicio"] . "</td>";
                        echo "<td>" . $row["data final"] . "</td>";
                        echo "<td>
                                <a href='excluir_cliente.php?id=". $row["id"]."' style='padding: 0 5px; text-decoration: none; color: red;'>[Excluir]</a>
                                <a href='editar_movimentacao.php?id=". $row["id"]."' style='padding: 0 5px; text-decoration: none; color: green;'>[Editar]</a>
                            </td>";
                        echo "</tr>";
                    };
                };

            
            
            
            ?>
    </table >
    <h1 class="titulo">Formulario</h1>

    <table border='1' style='margin: 0 auto; border-collapse: collapse; text-align: center;'>
        <tr>
            <th>Id</th>
            <th>Cliente</th>
            <th>Tipo de Movimentação</th>
        </tr>
        <tr>
            <?php 
                require 'config.php';
                $sql = "SELECT * FROM container";
                $sql2 = "SELECT * FROM movimentacao";
                $result = $conn->query($sql);
                $result2 = $conn->query($sql2);
                if($result->num_rows > 0 AND $result2->num_rows > 0){
                    while($row = $result->fetch_assoc() AND $row2 = $result2->fetch_assoc()){
                        
                        echo "<tr>";
                        echo "<td>".$row["id"] . "</td>";
                        echo "<td>".$row["cliente"] . "</td>";
                        echo "<td>".$row2["movimentacao"] . "</td>";
                        echo "</tr>";
                    };
                    echo "<tr>";
                    echo "<th>TOTAL</th>";
                    echo "<td colspan='2'>" .$result->num_rows. "</td>";
                    echo "</tr>";
                }else{
                    echo "Null";
                }
            
            
            ?>
            
        </tr>

    </table>


</body>
</html>

