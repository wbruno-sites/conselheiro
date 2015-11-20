<?php

class School
{
  public function __construct($mysqli)
  {
    $this->mysqli = $mysqli;
  }

  public function getAll()
  {
    return $this->mysqli->query('SELECT id, name, rooms_amount FROM schools');
  }
}
