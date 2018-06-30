<?php

include 'init.php';

$usuario = mysqli_real_escape_string($conecta, $_POST['login']);
$senha = mysqli_real_escape_string($conecta, $_POST['senha']);

$verifica = mysqli_query($conecta, "SELECT * FROM MUSICO WHERE EMAIL = '$usuario' AND SENHA = '$senha'") or die("erro ao selecionar");
    if (mysqli_num_rows($verifica)>0){
        $_SESSION['user'] = $usuario;
        header("location:piu-musico.php");
    }
    else{
        $verifica = mysqli_query($conecta, "SELECT * FROM CONTRATANTE WHERE EMAIL = '$usuario' AND SENHA = '$senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)>0){
            $_SESSION['user'] = $usuario;
            header("location:piu-contratante.php");
        }
        else{
            echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
        die();
        }
    }

mysqli_close($conecta);
	
?>