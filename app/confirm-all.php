<?php
require '../config/bootstrap.php';
require '../models/ElectoralVotes.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $result = [];
  $ev = new ElectoralVotes($GLOBALS['mysqli']);

  foreach ($_POST['items'] as $item) {
    $query = $ev->upsert($item['candidateid'], $item['schoolid'] , $item['roomid'], $item['votes_amount'], 'confirmed');
  }


  $result['result'] = $query;
  echo json_encode($result);
  exit;
}
