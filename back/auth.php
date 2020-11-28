<?php
session_start();
$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

if(authenticateFake($login, $password)){
  $_SESSION['auth'] = true;
  header('Location: ../form.php');
} else {
  header('Location: ../login.php');
}

function authenticateFake($l, $p){
 return $l == 'admin' && $p == '@cesso#algar..';
}

?>