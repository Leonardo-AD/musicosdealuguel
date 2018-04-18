<?php

include 'init.php';
include 'cabecalho.php';
if (!logado()) {
    redirect('login.php');
} else {
    $iu = $_SESSION['iu'];
    redirect("piu.php?user=$iu");
}

?>
<p><a href="logout.php">Sair</a></p>