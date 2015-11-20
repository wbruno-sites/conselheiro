<?php
require '../config/bootstrap.php';
require '../models/ElectoralVotes.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $result = [];
  $ev = new ElectoralVotes($GLOBALS['mysqli']);
  $query = $ev->upsert(_post('candidateid'), _post('schoolid') , _post('roomid'), _post('votes_amount'), 'confirmed');

  if ($GLOBALS['mysqli']->error) {
    $result['error'] = $GLOBALS['mysqli']->error;

    echo json_encode($result);
    exit;
  }

  $result['result'] = $query;
  echo json_encode($result);
  exit;
}
