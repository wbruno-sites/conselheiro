<?php
require '../config/bootstrap.php';

session_unset();
session_destroy();
header("Location: http://{$GLOBALS['config']['app']['url']}/login.php");
