<?php 
    session_start();
    include_once("../config.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>usuarios</title>
        <link rel="stylesheet" href="../conaltexcl/stylecon.css">

        <style>
                table {
                font-family: arial, sans-serif;
                width: 200%;
                
                margin-left: -295px;
                
                }

                td, th {
                text-align: left;
                padding: 10px;
                }

                tr:nth-child(even) {
                background-color: #dddddd;
                }
        </style>

    </head>

    <button onclick="location.href='../dashboard.php'">Retornar ao Menu</button>

    <body>
        <div class="box">
            <h1>Lista de Usuario Cadastrados</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>EDITAR</th>
                    <th>APAGAR</th>
                </tr>
                <?php
                    
                    $user = "SELECT * FROM usuarios";

                    $resultado = mysqli_query($connCad,$user);

                    while($linha = mysqli_fetch_assoc($resultado)){
                        echo"<tr>";
                        echo "<td>" . $linha['id'] . "</td>";
                        echo "<td>" . $linha['nome'] . "</td>";
                        echo "<td>" . $linha['email'] . "</td>";
                        echo "<td><a href='editar.php?id=" . $linha['id'] . "'>Editar</a></td>";
                        echo "<td><a href='processa_apagar.php?id=" . $linha['id'] . "'>Apagar</a></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </body>
</html>