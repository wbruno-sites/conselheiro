<?php
require '../config/bootstrap.php';

if($_POST['login'] && $_POST['password']) {
  require('../models/User.php');
  $user = new User($GLOBALS['mysqli']);
  $result = $user->insertUser($_POST['login'], $_POST['password'], ($_POST['admin']) ? $_POST['admin'] : 'user');

  if($result != null) {
    $message = "Usuário cadastrado com sucesso!";
    header("Location: http://{$GLOBALS['config']['app']['url']}/listar-usuarios.php?success={$message}");
    exit();
  }

  $message = "Ouve um erro ao alterar o usuário. Tente novamente!";
  header("Location: http://{$GLOBALS['config']['app']['url']}/cadastrar-usuario.php?error={$message}");
  exit();
}
