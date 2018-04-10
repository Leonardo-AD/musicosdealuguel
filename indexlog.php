<?php

include 'init.php';

if (!logado()) {
    redirect('login.php');
} else {
    redirect('piu.php');
}

?>
<p><a href="logout.php">Sair</a></p>