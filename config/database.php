<?php

$GLOBALS['mysqli'] = new mysqli($GLOBALS['config']['mysql']['host'], $GLOBALS['config']['mysql']['user'], $GLOBALS['config']['mysql']['password'], $GLOBALS['config']['mysql']['database']);

if($GLOBALS['mysqli']->connect_errno) {
  $GLOBALS['error'] = $GLOBALS['mysqli']->connect_errno . ' - ' . $GLOBALS['mysqli']->connect_error;
}
