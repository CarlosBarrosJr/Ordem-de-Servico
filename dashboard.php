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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">

    <title>Sistema de Ordem de Serviço</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Ordem de Servço</a> 
            
            <?php 
                
                print "Olá, " . $_SESSION["nome"];
            
                print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
        
            ?>  
        </div>
    </nav>

    <nav class="dp-menu">
        <ul>
            <li><a href="#">Cadastro</a>
                <ul>
                    <li><a href="inclusao/clientes.php">Clientes</a>
                    <li><a href="#">Ordem Serviço</a>
                    <li><a href="inclusao/usuario.php">Usuários</a>
                </ul>
            </li>    
            <li><a href="#">consultas</a>
                <ul>
                    <li><a href="conaltexcl/lista.php">Clientes</a>
                    <li><a href="#">Ordem Serviço</a>
                </ul>
            </li>    
            <li><a href="#">Relatório</a>
                <ul>
                    <li><a href="relatorios/relclientes.php">Clientes</a>
                    <li><a href="#">Ordem Serviço</a>
                </ul>
            </li>    
        </ul>   
    </nav> 

</body>
</html>