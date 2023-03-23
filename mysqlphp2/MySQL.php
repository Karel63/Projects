<?php
require "IDB.php";

class MySQL implements IDB{
  private $con;
  public function connect(
    string $host = "", 
    string $username = "", 
    string $password = "", 
    string $database = ""
  ): ?static{
    $this->con = mysqli_connect($host, $username, $password, $database);
    if($this->con === false){
      echo "Error";
      exit;
    }
    return $this;
  }
  function select(string $query): array{
    $data = mysqli_query($this->con, $query);
    $data = mysqli_fetch_all($data, MYSQLI_ASSOC);
    return $data;
  }
  function insert(string $table, array $data): bool{
    $keys = "";
    $values = "";
    $t = 1;
    foreach($data as $key => $value){
      if(count($data) == $t){
        $keys .= $key;
        $values .= $value;
        break;
      }
      $keys .= $key . ", ";
      $values .= $value . "', '";
      $t++;
    }
    mysqli_query($this->con, "INSERT INTO $table($keys) VALUES('$values')");
    return true;
  }
  function update(string $table, int $id, array $data): bool{
    $keys = "";
    $t = 1;
    foreach($data as $key => $value){
      if(count($data) == $t){
        $keys .= $key . " = '" . $value . "'";
        break;
      }
      $keys .= $key . " = '" . $value . "', ";
      $t++;
    }
    mysqli_query($this->con, "UPDATE $table SET $keys WHERE id='$id'");
    return false;
  }
  function delete(string $table, int $id): bool{
    mysqli_query($this->con, "DELETE FROM $table WHERE id='$id'");
    return true;
  }
}