<?php
require './config/bootstrap.php';
require './models/ElectoralVotes.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $ev = new ElectoralVotes($GLOBALS['mysqli']);
  $result = $ev->vote($_POST['candidateid'], $_POST['schoolid'] , $_POST['roomid'], $_POST['votes_amount']);

  if ($GLOBALS['mysqli']->error) {
    echo $GLOBALS['mysqli']->error;
  }

}
