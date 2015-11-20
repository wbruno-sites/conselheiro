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

  public function findUser($id)
  {
    $sql = "SELECT * FROM users WHERE id={$id} LIMIT 1";
    return $this->mysqli->query($sql);
  }

  public function updateUser($id, $login, $password, $type)
  {
    $sql = "UPDATE users SET login='{$login}', password='{$this->hashPassWord($password)}', admin='{$type}' WHERE id={$id}";
    return $this->mysqli->query($sql);
  }

  public function deleteUser($id)
  {
    $sql = "DELETE FROM users WHERE id={$id}";
    return $this->mysqli->query($sql);
  }

  public function login($login, $password)
  {
    $sql = "SELECT id, login, admin FROM users WHERE login='{$login}' AND password='{$this->hashPassWord($password)}'";
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
