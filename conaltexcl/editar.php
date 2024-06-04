<?php

session_start();
include_once("../config.php");

$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$usuario = "SELECT * FROM usuarios WHERE id='$id'";
$resultado = mysqli_query($connCad,$usuario);
$linha = mysqli_fetch_assoc($resultado)

?>

<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <meta charset="utf-8">
        <title>Editar</title>
        <link rel="stylesheet" href="../conaltexcl/stylecon.css">
            
    </head>

    <body>
        
        

        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>

        <div class="box2">

            <h1>Editar Usuario</h1>
            <br>

            <form method="POST" action="processa_editar.php">

                <label>Nome</label>
                <input type="hidden" name="id" value="<?php echo $linha['id']?>" >
                <br>
                <input type="text" name="nome" value="<?php echo $linha['nome']?>" required>
                <br><br>

                <label>Email</label>
                <br>
                <input type="email" name="email" value="<?php echo $linha['email']?>" required>
                <br><br>

                <label>Telefone</label>
                <br>
                <input type="telefone" name="telefone" value="<?php echo $linha['telefone']?>" required>
                <br><br>

                <label>Genero</label>
                <br>
                <input type="text" name="sexo" value="<?php echo $linha['sexo']?>" required>
                <br><br>

                <label>Data de Nascimento :</label>
                <br>
                <input type="date" name="data_nasc" value="<?php echo $linha['data_nasc']?>" required>
                <br><br>

                <label>Endereço</label>
                <br>
                <input type="text" name="endereco" value="<?php echo $linha['endereco']?>" required>
                <br><br>
                    
                <label>Cidade</label>
                <br>
                <input type="text" name="cidade" value="<?php echo $linha['cidade']?>" required>
                <br><br>
                    
                <label>Estado</label>
                <br>
                <input type="text" name="estado" value="<?php echo $linha['estado']?>" required>
                <br><br><br>

                <input type="submit" value="Editar"><br><br>
                <br><br>
                

            </form>

            <div>
            <a href="lista.php" class="nav1">Usuarios Cadastrados</a>
            <a href="../inclusao/clientes.php" class="nav2">Pagina Cadastro</a><br>
            </div>
        </div>

        

    </body>
</html>