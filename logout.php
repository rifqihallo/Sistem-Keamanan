<?php
session_start();

$_SESSION['id_user']='';
$_SESSION['username']='';
$_SESSION['password']='';

unset($_SESSION['id_user']);
unset($_SESSION['username']);
unset($_SESSION['nama']);
unset($_SESSION['email']);

session_unset();
session_destroy();
header('Location:login.php');

?>