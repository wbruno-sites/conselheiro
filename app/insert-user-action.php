<?php
require '../config/bootstrap.php';

if($_POST['login'] && $_POST['password']) {
  require('../models/User.php');
  $user = new User($GLOBALS['mysqli']);
  $result = $user->insertUser($_POST['login'], $_POST['password'], ($_POST['admin']) ? $_POST['admin'] : 'user');

  if($result != null) {
     header("Location: http://localhost:8080/listar-usuarios.php");
    exit();
  }

  header("Location: http://localhost:8080/cadastrar-usuario.php");
  exit();
}
