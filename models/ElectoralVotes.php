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
      SELECT c.id, c.name, r.name as region_name, votes_amount, v.status
        FROM candidates c
        INNER JOIN regions r
          ON c.region_id = r.id
        LEFT JOIN votes v
          ON v.candidate_id = c.id
            AND v.school_id = '{$school_id}'
            AND v.room_id = '{$room_id}'
        ORDER BY c.id");
  }

  public function upsert($candidate_id, $school_id, $room_id, $votes_amount, $status)
  {
    $sql = "INSERT INTO votes (candidate_id, school_id, room_id, votes_amount, status)
        VALUES ({$candidate_id}, {$school_id}, {$room_id}, {$votes_amount}, '{$status}')
          ON DUPLICATE KEY UPDATE votes_amount = {$votes_amount}, status = '{$status}'";

    return $this->mysqli->query($sql);
  }

  public function total($order)
  {
    $order_by = $order === 'total' ? 'total DESC' : 'id ASC';

    $sql = "SELECT c.id, c.name, SUM(votes_amount) AS total
      FROM candidates c
      INNER JOIN votes v
        ON v.candidate_id = c.id
      GROUP BY c.id
      ORDER BY {$order_by}";

    return $this->mysqli->query($sql);
  }

  public function region()
  {
    $sql = "SELECT c.id, c.region_id, r.name as region_name, c.name, SUM(votes_amount) AS total
      FROM candidates c
      INNER JOIN votes v
        ON v.candidate_id = c.id
      INNER JOIN regions r
        ON r.id = c.region_id
      GROUP BY c.region_id, c.id
      ORDER BY c.region_id, total DESC";

    return $this->mysqli->query($sql);
  }

  public function school()
  {
    $sql = "SELECT c.id, v.school_id, s.name as school_name, c.name, SUM(votes_amount) AS total
      FROM candidates c
      INNER JOIN votes v
        ON v.candidate_id = c.id
      INNER JOIN schools s
        ON s.id = v.school_id
      GROUP BY v.school_id, c.id
      ORDER BY v.school_id, c.id";

    return $this->mysqli->query($sql);
  }

  public function getStatusLabel($status)
  {
    switch ($status) {
     case 'pending':
       $html = '<span class="label label-warning">pending</span>';
       break;
     case 'confirmed':
       $html = '<span class="label label-success">confirmed</span>';
       break;
     default:
       $html = '';
       break;
   }
   return $html;
  }
}
