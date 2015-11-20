<?php
require_once('./config/bootstrap.php');

if($_POST){
  if($_POST['login'] && $_POST['password']) {
    require_once('./models/User.php');
    $User = new User($GLOBALS['mysqli']);
    $result = $User->insertUser($_POST['login'], $_POST['password'], ($_POST['admin']) ? $_POST['admin'] : 'user');
  }
}

loadView('cadastrar-usuario');
