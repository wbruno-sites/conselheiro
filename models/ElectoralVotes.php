<?php

class ElectoralVotes
{
  public function __construct($mysqli)
  {
    $this->mysqli = $mysqli;
  }

  public function getCalculation($school_id, $room_id)
  {
    return $this->mysqli->query("
      SELECT c.id, c.name, r.name as region_name, votes_amount
        FROM candidates c
        INNER JOIN regions r
          ON c.region_id = r.id
        LEFT JOIN votes v
          ON v.candidate_id = c.id
            AND v.school_id = '{$school_id}'
            AND v.room_id = '{$room_id}'
        ORDER BY c.id");
  }

  public function vote($candidate_id, $school_id, $room_id, $votes_amount)
  {
    $sql = "INSERT INTO votes (candidate_id, school_id, room_id, votes_amount, status)
        VALUES ({$candidate_id}, {$school_id}, {$room_id}, {$votes_amount}, 'pending')
          ON DUPLICATE KEY UPDATE votes_amount = {$votes_amount}";

    return $this->mysqli->query($sql);
  }
}
