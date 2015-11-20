<?php
require '../config/bootstrap.php';

if( _post('id') &&  _post('login') &&  _post('password') ) {
  require('../models/User.php');
  $user = new User($GLOBALS['mysqli']);
  $result = $user->updateUser( _post('id'),  _post('login'),  _post('password'), ( _post('admin')) ?  _post('admin') : 'user');

  if($result != null) {
    $message = "Usuário modificado com sucesso!";
    header("Location: http://{$GLOBALS['config']['app']['url']}/listar-usuarios.php?success={$message}");
    exit();
  }

  header("Location: http://{$GLOBALS['config']['app']['url']}/editar-usuario.php?id={_post('id')}");
  exit();
}
header("Location: http://{$GLOBALS['config']['app']['url']}/listar-usuarios.php");
exit();
