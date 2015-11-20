<?php
require '../config/bootstrap.php';

if( _get('id') ) {

  if( _get('id') == $_SESSION['user']['id'] ) {
    $message = "Você não pode remover o próprio cadastro!";
    header("Location: http://{$GLOBALS['config']['app']['url']}/listar-usuarios.php?error={$message}");
    exit();
  }

  require('../models/User.php');
  $user = new User($GLOBALS['mysqli']);
  $result = $user->deleteUser( _get('id') );

  if($result != null) {
    $message = "Usuário deletado com sucesso!";
    header("Location: http://{$GLOBALS['config']['app']['url']}/listar-usuarios.php?success={$message}");
    exit();
  }

  $message = "Erro ao remover usuario!";
  header("Location: http://{$GLOBALS['config']['app']['url']}/listar-usuarios.php?error={$message}");
  exit();
}
$message = "Erro ao remover usuario!";
header("Location: http://{$GLOBALS['config']['app']['url']}/listar-usuarios.php?error={$message}");
exit();
