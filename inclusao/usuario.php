<?php 
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='index.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>

    <link rel="stylesheet" href="../inclusao/stylecliente.css">
    
</head>

<body>
    <button onclick="location.href='../dashboard.php'">Retornar ao Menu</button>

    <div class="box">       
        <form action="../inclusao/usuario.php" method="POST">
            
                <legend><b>Formulário de Usuários</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="usuario" id="usuario" class="inputUser" required>
                    <label for="usuario" class="labelInput">Usuario</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="data"><b>Data Criação :</b></label>
                    <input type="date" name="data" id="data" required>  
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">senha</label>
                </div>
                <br><br>
                
                <input type="submit" name="submit" id="submit">
            
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
            
        include_once("../config.php");

        $nome = $_POST["nome"];        
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $data = $_POST['data'];
        $senha = $_POST['senha'];
        
        $result = mysqli_query($conn, "INSERT INTO usuarios(nome,email,usuario,data,senha) VALUES ('$nome','$email','$usuario','$data','$senha')");  
    
    }
?>
