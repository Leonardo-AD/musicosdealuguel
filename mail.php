<?php

include 'init.php';

$email = "tarcisiomarques00000@gmail.com";

$to = $email;

$subject = "Teste de e-mail";

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
	<button><a href='http://musicosdealuguel.000webhostapp.com'>Acessar</a></button>
	</body
</html>";
$headers = "Content-type: text/html";

$mail = mail($to, $subject, $message, $headers);

?>