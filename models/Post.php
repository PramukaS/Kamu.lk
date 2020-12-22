<?php

require_once ROOT . "/Database.php";

class Post extends Database {
  public function find() {
    $sql = "select * from post";
    $query = $this->con->query($sql);
    $query->execute();
    $data = $query->fetchAll();
    return $data;
  } 

  public function create($post_name) {
  } 
}