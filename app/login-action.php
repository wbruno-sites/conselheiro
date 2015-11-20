<?php
require '../config/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if($_POST['login'] && $_POST['password']){
    require_once('../models/User.php');
    $user = new User($GLOBALS['mysqli']);

    $result = $user->login($_POST['login'],$_POST['password']);
    $rows = $result->fetch_array(MYSQLI_ASSOC);

    if($rows) {
      $_SESSION['user'] = $rows;
      header("Location: http://{$GLOBALS['config']['app']['url']}/index.php");
      exit();
    }

    $message = "Usuário ou senha invalido!";
    $message = "Usuário ou senha invalido!";
    header("Location: http://{$GLOBALS['config']['app']['url']}/login.php?error=$message");
  }
}
