<?php

include 'init.php';

$user = $_POST['email'];
$pw = $_POST['senha'];

if (login($user, $pw)) {
    redirect('index.php');
} else {
    redirect('login.php');
}

?>
