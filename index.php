<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-image: url('./imagens/papel.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
        .login{
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }
    </style>
    
</head>

<body>
<div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>Acesso Restrito</h3>
                        </div>
                        <div class="card-body">
                            <form action="login.php" method="POST">
                                <div>
                                    <div class="mb3">
                                        <label>Usuário</label>
                                        <input type="text" name="usuario" class="form-control">
                                        <br>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb3">
                                        <label>Senha</label>
                                        <input type="password" name="senha" class="form-control">   
                                        <br>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb3">
                                        <button type="submit" class="btn btn-primary">Enviar</button>   
                                        <br>
                                    </div>
                                </div>   
                            </form>    
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>   
</body>

</html>