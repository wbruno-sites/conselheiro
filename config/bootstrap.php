<?php
ini_set('include_path', dirname(__FILE__));
ini_set('display_erros', false);
//error_reporting(E_STRICT);

# CONSTS
define('CONFIG_FILE', 'config.ini');

$GLOBALS['config'] = parse_ini_file(CONFIG_FILE);
$GLOBALS['error'] = false;

session_start();

# INCLUDE
require_once('database.php');
require_once('functions.php');
