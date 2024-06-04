<?php
session_start();
include_once("../config.php");

$nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$id=filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);


$result_usuarios="UPDATE usuarios SET nome='$nome',email='$email',criado=NOW() WHERE id='$id'";
mysqli_query($connCad,$result_usuarios);

if(mysqli_affected_rows($connCad)){
    $_SESSION['msg']="<p style='color:green;'>Usuario editado com sucesso</p>";
    header("Location:lista.php");
}else{
    $_SESSION['msg']="<p style='color:red;'>Usuario não editado</p>";
    header("Location:editar.php?id='$id'");
}

?>