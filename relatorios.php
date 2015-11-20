<?php
require_once('./config/bootstrap.php');

authenticate();
$report = _get('report');
loadView($report);
