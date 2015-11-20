<?php

define('CONFIG_FILE', './config.ini');

$configs = parse_ini_file(CONFIG_FILE);

var_dump($configs);


$mysqli = new mysqli($configs['mysql']['host'], $configs['mysql']['user'], $configs['mysql']['password'], $configs['mysql']['database']);

$query = $mysqli->query('SELECT * FROM candidates');

while($data = $query->fetch_object()) {
  echo $data->id, '-' ,$data->name, '-' ,$data->region_id;
}
