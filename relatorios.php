<?php
require_once('./config/bootstrap.php');

authenticate();

$arr = ['total', 'region', 'school'];
$report = _get('report');

if (in_array($report, $arr)) {
  loadView($report);
} else {
  loadView('not-found');
}
