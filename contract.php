<?php

include 'init.php';

$id_m = $_POST['id_m'];
$id_c = $_POST['id_c'];
$nome_m = $_POST['nome_m'];
$nome_c = $_POST['nome_c'];
$local = $_POST['local'];
$horario = $_POST['horario'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
	
$contratou = mysqli_query($conecta,  "INSERT INTO CONTRATOS (ID_M, ID_C, NOME_M, NOME_C, LOCAL, HORARIO, DIA, MES, ANO) VALUES ('$id_m', '$id_c', '$nome_m', '$nome_c', '$local', '$hora', '$dia', '$mes', '$ano')");

	//mysqli_close($conecta);
	
	//header('location:index.php');
	
	$conectou = mysqli_query($conecta, "SELECT EMAIL FROM MUSICO WHERE ID = '$id_m'") or die("erro ao selecionar");

    while($linha = mysqli_fetch_array($conectou)){
        $email = $linha['EMAIL'];
        $to = $email;

        $subject = "Proposta de contratação";
    
        $message = "<html lang='en'>
        	<head>
        		<meta charset='utf-8'>
        	</head>
        	<body>
        	<h1>Músicos de Aluguel</h1>
        	<br>
        	<h2>Você acabou de receber uma prpposta de contratação.<br>
        	Para saber detalhes, aceitar, ou recusar. Acesse o Músicos de Aluguel agora!</h2>
        	<br>
        	<a href='http://musicosdealuguel.000webhostapp.com'>Acessar</a>
        	</body
        </html>";
        $headers = "Content-type: text/html";


    }
    $to = $email;

    $subject = "Proposta de contratação";
    
    $message = "<html lang='en'>
        	<head>
        		<meta charset='utf-8'>
        	</head>
        	<body>
        	<h1>Músicos de Aluguel</h1>
        	<br>
        	<h2>Você acabou de receber uma proposta de contratação.<br>
        	Para saber detalhes, aceitar ou recusar. Acesse o Músicos de Aluguel agora!</h2>
        	<br>
        	<a href='http://musicosdealuguel.000webhostapp.com'>Acessar</a>
        	</body
        </html>";
    $headers = "Content-type: text/html";
    
    $mail = mail($to, $subject, $message, $headers);

    
    if($contratou && $mail){
        echo "<script language='javascript' type='text/javascript'>alert('Músico solicitado com sucesso!');window.location.href='index.php';</script>";
    }
    else{
        echo"<script language='javascript' type='text/javascript'>alert('Não foi possível solicitar o músico no momento!');window.location.href='contratooo.php';</script>";
    }
    

?>