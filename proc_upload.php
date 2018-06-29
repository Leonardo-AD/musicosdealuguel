<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php

    include 'init.php';

	$arquivos = $_FILES['arquivo']['name'];
	$id = $_POST['id'];

	$_UP['pasta'] = "foto/";
	

	$_UP['tamanho'] = 1024*1024*100;

	$_UP['extensoes'] = ['png', 'jpg', 'jpeg', 'gif'];

	$_UP['renomear'] = false;


	$_UP['erros']['0'] = 'nao houve erro'; 
	$_UP['erros']['1'] = 'houve';
	$_UP['erros']['2'] = 'houve';
	$_UP['erros']['3'] = 'houve';
	$_UP['erros']['4'] = 'houve';

	if($_FILES['arquivo']['error'] != 0){
		die("Não foi possivel fazer o upload, erro : <br/>".$_UP['erros'][$_FILES['arquivo']['error']]);
		exit;
	}

	$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));

	if(array_search($extensao, $_UP['extensoes']) === false ){
		echo "error";
		header('location:piu-musico.php');
	}

	else if($_UP['tamanho'] < $_FILES['arquivo']['size']){
		//echo "tamanho grande";
	}

	else{

		if ($_UP['renomear'] == true) {
			$nome_final = time().'.jpg';
		}

		else{
			$nome_final = $_FILES['arquivo']['name'];
			$id = $_POST['id'];
			header('location:piu-musico.php');
		}

		if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'].$nome_final)){
			$query = mysqli_query($conecta, "INSERT INTO FOTOS (ID_MUSICO,FOTO) VALUES ('$id','$nome_final')");

			header('location:piu-musico.php');
		}

		else {
			echo "imagem não foi cadastrada com sucesso";
		}

	}

?>

</body>
</html>