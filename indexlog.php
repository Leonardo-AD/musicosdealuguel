<?php

include 'init.php';

if (!logado()) {
    header('location:login.php');
} else {
    header('location:piu.php');
}

?>
<p><a href="logout.php">Sair</a></p>