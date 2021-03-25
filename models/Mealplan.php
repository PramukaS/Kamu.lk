<?php

require_once ROOT . "/Database.php";

class Mealplan extends Database {
    public function show() {
        $sql = "select * from req_meal_plans";
        $query = $this->con->query($sql);
        $query->execute();
        $data = $query->fetchAll();
        return $data;
      } 

    public function findMealPlanById($id) {
        $sql = "SELECT * FROM req_meal_plans WHERE request_id ='$id'";
        $query = $this->con->query($sql);
        $query->execute();
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data;
      }

    public function delete($id){
        $sql = "DELETE FROM req_meal_plans WHERE request_id = '$id'";
        if($this->con->query($sql)){
          return true;
        }else{
          return false;
        }
      }
}