<?php

include 'init.php';

$usuario = $_POST['login'];
$senha = $_POST['senha'];
$entrar = $_POST['entrar'];
if (isset($entrar)) {
             
    $verifica = mysqli_query($conecta, "SELECT * FROM USERS WHERE USUARIO = '$usuario' AND SENHA = '$senha'") or die("erro ao selecionar");
    if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
        die();
    }else{
        $_SESSION['user'] = $usuario;
        header("location:piu.php");
    }
}

mysqli_close($conecta);
	
?>
