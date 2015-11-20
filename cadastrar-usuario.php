<?php
require_once('./config/bootstrap.php');

if($_POST){
  if($_POST['login'] && $_POST['password']) {
    loadModel('User');
    $user = new User($GLOBALS['mysqli']);
    $result = $user->insertUser($_POST['login'], $_POST['password'], ($_POST['admin']) ? $_POST['admin'] : 'user');
  }
}

loadView('cadastrar-usuario');
