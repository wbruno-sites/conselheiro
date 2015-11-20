<?php

class ElectoralVotes
{
  public function __construct($mysqli)
  {
    $this->mysqli = $mysqli;
  }

  public function getCalculation($school_id, $room_id)
  {
    return $this->mysqli->query('SELECT c.id, c.name, r.name as region_name FROM candidates c INNER JOIN regions r ON c.region_id = r.id ORDER BY c.id');
  }
}
