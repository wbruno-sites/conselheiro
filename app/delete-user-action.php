<?php
require '../config/bootstrap.php';

if($_GET['id']) {
  require('../models/User.php');
  $user = new User($GLOBALS['mysqli']);
  $result = $user->deleteUser($_GET['id']);

  if($result != null) {
    $message = "Usuário deletado com sucesso!";
    header("Location: http://localhost:8080/listar-usuarios.php?success={$message}");
    exit();
  }

  $message = "Erro ao remover usuario!";
  header("Location: http://localhost:8080/listar-usuarios.php?error={$message}");
  exit();
}
$message = "Erro ao remover usuario!";
header("Location: http://localhost:8080/listar-usuarios.php?error={$message}");
exit();
