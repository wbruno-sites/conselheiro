<?php
ini_set('include_path', dirname(__FILE__));

# CONSTS
define('CONFIG_FILE', 'config.ini');


session_start();

# INCLUDE
require_once('database.php');
require_once('functions.php');
