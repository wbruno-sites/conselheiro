<?php

$configs = parse_ini_file(CONFIG_FILE);

$GLOBALS['mysqli'] = new mysqli($configs['mysql']['host'], $configs['mysql']['user'], $configs['mysql']['password'], $configs['mysql']['database']);
