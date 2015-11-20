<?php

$GLOBALS['mysqli'] = new mysqli($GLOBALS['config']['mysql']['host'], $GLOBALS['config']['mysql']['user'], $GLOBALS['config']['mysql']['password'], $GLOBALS['config']['mysql']['database']);

$GLOBALS['mysqli']->set_charset("utf8");

if($GLOBALS['mysqli']->connect_errno) {
  $GLOBALS['error'] = $GLOBALS['mysqli']->connect_errno . ' - ' . $GLOBALS['mysqli']->connect_error;
}
