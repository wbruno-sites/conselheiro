<?php

ini_set('include_path', dirname(__FILE__));
define('CONFIG_FILE', 'config.ini');

$configs = parse_ini_file(CONFIG_FILE);

$mysqli = new mysqli($configs['mysql']['host'], $configs['mysql']['user'], $configs['mysql']['password'], $configs['mysql']['database']);
