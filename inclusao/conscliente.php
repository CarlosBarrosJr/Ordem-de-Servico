<?php
    session_start();
    include_once("../config.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Registro</title>

    <link rel="stylesheet" href="../inclusao/stylecliente.css">
    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <button onclick="location.href='../dashboard.php'">Retornar ao Menu</button>

    <div class="box">
        <legend><b>Cliente</b></legend>
        <br>
        <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "Nome: " . $row["nome"]. "<br><br>";
                    echo "Email: " . $row["email"]. "<br>";
                }
            } else {
                echo "0 results";
            }

            $conn->close();
        ?>



    </div>

</body>
</html>