<?php

function loadView($view, $sidebar = true)
{
    require_once('./includes/head.php');
    if($sidebar) {
      require_once('./includes/sidebar.php');
      require_once('./includes/toggleMenu.php');
    }
    ?>
    <!-- Page Content -->
    <div class="container-fluid">
    <div class="row">
    <?php
    require_once("./views/$view.php");
    ?>
    </div></div>
    <?php
    require_once('./includes/footer.php');
}

function authenticate()
{
  if(!$_SESSION['user']) {
    header("Location: http://localhost:8080/login.php");
    exit();
  }
}

function _get($key)
{
  return isset($_GET[$key]) ? $_GET[$key] : null;
}

function loginAction()
{
  if($_POST['login'] && $_POST['password']){

    require_once('./models/User.php');

    $User = new User($GLOBALS['mysqli']);

    $result = $User->login($_POST['login'],$_POST['password']);
    $rows = $result->fetch_array(MYSQLI_ASSOC);

    if($rows) {
      $_SESSION['user'] = $rows;
      header("Location: http://localhost:8080/index.php");
      exit();
    }

    $message = "Usuário ou senha invalido!";
    header("Location: http://localhost:8080/login.php?error=$message");
  }
}
