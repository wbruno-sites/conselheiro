<?php
require '../config/bootstrap.php';

if( _post('login') && _post('password') ) {
  require('../models/User.php');
  $user = new User($GLOBALS['mysqli']);
  $result = $user->insertUser( _post('login'), _post('password'), (_post('admin')) ? _post('admin') : 'user');

  if($result != null) {
    $message = "Usuário cadastrado com sucesso!";
    header("Location: http://{$GLOBALS['config']['app']['url']}/listar-usuarios.php?success={$message}");
    exit();
  }

  $message = "Ouve um erro ao alterar o usuário. Tente novamente!";
  header("Location: http://{$GLOBALS['config']['app']['url']}/cadastrar-usuario.php?error={$message}");
  exit();
}
