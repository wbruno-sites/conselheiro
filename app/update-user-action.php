<?php
require '../config/bootstrap.php';

if($_POST['id'] && $_POST['login'] && $_POST['password']) {
  require('../models/User.php');
  $user = new User($GLOBALS['mysqli']);
  $result = $user->updateUser($_POST['id'], $_POST['login'], $_POST['password'], ($_POST['admin']) ? $_POST['admin'] : 'user');

  if($result != null) {
    $message = "Usuário modificado com sucesso!";
    header("Location: http://{$GLOBALS['config']['app']['url']}/listar-usuarios.php?success={$message}");
    exit();
  }

  header("Location: http://{$GLOBALS['config']['app']['url']}/editar-usuario.php?id={$_POST['id']}");
  exit();
}
header("Location: http://{$GLOBALS['config']['app']['url']}/listar-usuarios.php");
exit();
