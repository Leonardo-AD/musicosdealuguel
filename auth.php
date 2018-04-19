<?php

include 'init.php';

$user = $_POST['login'];
$pw = $_POST['senha'];
$_SESSION['user'] = $user;

if (login($user, $pw)) {
    header('location:indexlog.php');
} else {
    header('location:login.php');
}

?>
