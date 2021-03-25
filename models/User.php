<?php

require_once ROOT . "/Database.php";

class User extends Database {
    
    public function addUser($data) {
        $email = $data['email'];
        $username = $data['username'];
        $password = $data['password'];
        $user_type_id = $data['user_type_id'];
        
        
        $sql = "INSERT INTO users (email,username,password,user_type_id) VALUES ('$email','$username', '$password', '$user_type_id')";
        if($this->con->query($sql)){
          return true;
        }else{
          return false;
        }
    }

    public function findUser($username) {
      $sql = "SELECT * FROM users WHERE username='$username'";
      $query = $this->con->query($sql);
      $query->execute();
    
      if ($query->rowCount() > 0){
        return true;
      }else{
        return false;
      }
    }

    public function findUserById($id) {
      $sql = "SELECT * FROM users WHERE id='$id'";
      $query = $this->con->query($sql);
      $query->execute();
      $data = $query->fetch(PDO::FETCH_ASSOC);
      return $data;
    }

    public function findUserType($type_id){
      $sql = "SELECT * FROM user_type WHERE id='$type_id'";
      $query = $this->con->query($sql);
      $query->execute();
      $type = $query->fetch(PDO::FETCH_ASSOC);
      return $type;
    }

    public function show() {
      $sql = "select * from users";
      $query = $this->con->query($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } 

    public function update($data){
      $id = $data['id'];
      $email = $data['email'];
      $username = $data['username'];
      $user_type_id = $data['user_type_id'];
      

      $sql = "UPDATE users SET id='$id',email='$email',username='$username',user_type_id='$user_type_id'  WHERE id='$id'";
        if($this->con->query($sql)){
          return true;
        }else{
          return false;
        }
    }

    public function delete($id){
      $sql = "DELETE FROM users WHERE id = '$id'";
      if($this->con->query($sql)){
        return true;
      }else{
        return false;
      }
    }
 


  /******************************************Inbox Model Setup*****************************************************/

  public function findMessage($username) {
    $sql = "SELECT * FROM inbox WHERE username='$username'";
    $query = $this->con->query($sql);
    $query->execute();
  
    if ($query->rowCount() > 0){
      return true;
    }else{
      return false;
    }
  }

  public function findMessageById($id) {
    $sql = "SELECT * FROM inbox WHERE id='$id'";
    $query = $this->con->query($sql);
    $query->execute();
    $data = $query->fetch(PDO::FETCH_ASSOC);
    return $data;
  }

  public function showMessage() {
    $sql = "SELECT * FROM inbox";
    $query = $this->con->query($sql);
    $query->execute();
    $data = $query->fetchAll();
    return $data;
  } 

  public function updateMessage($data){
    $id = $data['id'];
    $username = $data['username'];
    $subject = $data['subject'];
    $message = $data['message'];
    $reply = $data['reply'];
    

    $sql = "UPDATE inbox SET id='$id',username='$username', subject='$subject', message='$message', reply='$reply'  WHERE id='$id'";
      if($this->con->query($sql)){
        return true;
      }else{
        return false;
      }
  }

  public function deleteMessage($id){
    $sql = "DELETE FROM inbox WHERE id = '$id'";
    if($this->con->query($sql)){
      return true;
    }else{
      return false;
    }
  }
}


