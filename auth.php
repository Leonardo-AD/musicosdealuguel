<?php

include 'init.php';

$user = $_POST['login'];
$pw = $_POST['senha'];

if (login($user, $pw)) {
    header('location:indexlog.php');
} else {
    header('location:login.php');
}

?>
