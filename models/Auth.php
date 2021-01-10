<?php

require_once ROOT . "/Database.php";

class Auth extends Database {
  public function login($username, $password) {
    $sql = "SELECT * FROM users WHERE username='$username'";
    $query = $this->con->query($sql);
    $query->execute();
    $data = $query->fetch(PDO::FETCH_ASSOC);

    if (password_verify($password, $data['password'])) {
        return $data;
    }else {
        return false;
    }
  } 

  public function userSignUp($data) {
    $email = $data['email'];
    $username = $data['username'];
    $password = $data['password'];
    $userTypeId = $data['userTypeId'];
    
    $sql = "INSERT INTO users (email,username,password,user_type_id) VALUES ('$email', '$username', '$password', '$userTypeId')";
    if($this->con->query($sql)){
      return true;
    }else{
      return false;
    }
  }


  public function findUserByEmail($email) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $query = $this->con->query($sql);
    $query->execute();

    if ($query->rowCount() > 0){
      return true;
    }else{
      return false;
    }
  }
}