<?php

function loadView($view, $sidebar = true)
{
    require_once('./includes/head.php');
    if($sidebar) {
      require_once('./includes/sidebar.php');
      require_once('./includes/navbar.php');
    }
    ?>
    <!-- Page Content -->
    <div class="container-fluid">
    <div class="row">
<?php
    if($GLOBALS['error']) {
      echo '<p class="alert alert-danger" role="alert">' . $GLOBALS['error'] .'</p>';
    }
?>

    <?php
    $file = "./views/{$view}.php";
    if (is_file($file)) {
      require_once "./views/{$view}.php";
    } else {
      require './views/not-found.php';
    }
    ?>
    </div></div>
    <?php
    require_once './includes/footer.php';
}

function loadModel($model)
{
  return require_once("./models/{$model}.php");
}

function authenticate()
{
  if(!$_SESSION['user']) {
    header("Location: http://{$GLOBALS['config']['app']['url']}/login.php");
    exit();
  }
}

function isAdmin()
{
  return $_SESSION['user']['admin'] === 'admin';
}

function _get($key)
{
  return isset($_GET[$key]) ? filter_var($_GET[$key]) : null;
}
function _post($key)
{
  return isset($_POST[$key]) ? filter_var($_POST[$key]) : null;
}

function isPost()
{
  return $_SERVER['REQUEST_METHOD'] === 'POST';
}
