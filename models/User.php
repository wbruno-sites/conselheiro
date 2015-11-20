<?php

class User
{
  public function __construct($mysqli)
  {
    $this->mysqli = $mysqli;
  }

  public function getUsers()
  {
    return $this->mysqli->query("SELECT * FROM users");
  }

  public function login($login, $password)
  {
    $sql = "SELECT login, admin FROM users WHERE login='{$login}' AND password='{$this->hashPassWord($password)}'";
    return $this->mysqli->query($sql);
  }

  public function insertUser($login, $password, $type)
  {
    $sql = "INSERT INTO users (`login`, `password`, `admin`) VALUES ('{$login}','{$this->hashPassWord($password)}','{$type}')";
    return $this->mysqli->query($sql);
  }

  public function hashPassWord($password)
  {
    return sha1($password);
  }
}
