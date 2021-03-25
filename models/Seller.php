<?php

require_once ROOT . "/Database.php";

class Seller extends Database {
    public function addFood($data, $file) {
        $foodName = $data['foodName'];
        $descrption = $data['description'];
        $price = $data['price'];
        $image = $file;
        $resId = 7;

        if ($foodName == "") {
            $_SESSION['menu_item']['item_name'] = "Food name cannot be blank";
            return;
        }

        
        $sql = "INSERT INTO menu_item (item_name,description,price,image,resturant_id) VALUES ('$foodName', '$descrption', '$price', '$image' , '$resId')";
        if($this->con->query($sql)){
          return true;
        }else{
          return false;
        }
    }

    public function editFood($data, $file) {
        $foodName = $data['foodName'];
        $descrption = $data['description'];
        $price = $data['price'];
        $image = $file;
        $resId = 7;

        if ($foodName == "") {
            $_SESSION['menu_item']['item_name'] = "Food name cannot be blank";
            return;
        }

        $id = $_GET['id'];

        
        $sql = "update menu_item set item_name = '$foodName', description = '$descrption', price = $price, image = '$image', resturant_id = $resId where id = $id ";
        if($this->con->query($sql)){
          return true;
        }else{
          return false;
        }
    }

    public function getMenuItems () {
        $sql = "select * from menu_item";
        $query = $this->con->query($sql);
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function getMenuItem ($item_id) {
        $sql = "select * from menu_item where id = $item_id";
        $query = $this->con->query($sql);
        $query->execute();
        $data = $query->fetch();
        return $data;
    }

    public function getOrders() {
        $sql = "select distinct orderh.id, orderh.accepted, orderh.ddate, orderh.customer_name, orderd.qty, orderd.price, menu_item.item_name from orderh, orderd, menu_item where orderh.id = orderd.order_id and orderd.menu_item_id = menu_item.id";
        $query = $this->con->query($sql);
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function acceptOrder($id) {
        $sql = "update orderh set accepted = true where id = $id";
        $query = $this->con->query($sql);
        $query->execute();
    }

    public function rejectOrder($id) {
        $sql = "update orderh set accepted = false where id = $id";
        $query = $this->con->query($sql);
        $query->execute();
    }

    public function getDrivers() {
        $sql = "select * from deliverydriver";
        $query = $this->con->query($sql);
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function getCount() {
        $sql = "select count(*) from orderh";
        $query = $this->con->query($sql);
        $query->execute();
        $data = $query->fetch();
        return $data;
    }

    public function assignDriver($driver, $id) {
        $sql = "update orderh set driver_id = $driver where id = $id";
        $query = $this->con->query($sql);
        $query->execute();
    }


}