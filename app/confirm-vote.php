<?php
require '../config/bootstrap.php';
loadModel('ElectoralVotes');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $result = [];
  $ev = new ElectoralVotes($GLOBALS['mysqli']);
  $query = $ev->upsert($_POST['candidateid'], $_POST['schoolid'] , $_POST['roomid'], $_POST['votes_amount'], 'confirmed');

  if ($GLOBALS['mysqli']->error) {
    $result['error'] = $GLOBALS['mysqli']->error;

    echo json_encode($result);
    exit;
  }

  $result['result'] = $query;
  echo json_encode($result);
  exit;
}
