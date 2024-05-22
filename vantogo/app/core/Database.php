<?php

class Database
{
  public $lastId;

  private function connect()
  {
    // Table -> users, Fields -> id, firstname, lastname, email, password
    $string = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
    $con = new PDO($string, DB_USER, DB_PASS);
    return $con;
  }

  public function query($query, $data = [])
  {
    $con = $this->connect();
    $stm = $con->prepare($query);

    $check = $stm->execute($data);
    $this->lastId = $con->lastInsertId();

    if ($check) {
      $result = $stm->fetchAll(PDO::FETCH_OBJ);

      if (is_array($result) && count($result) > 0) {
        return $result;
      }
    }
    return false;
  }
}