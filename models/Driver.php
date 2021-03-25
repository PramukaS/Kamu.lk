<?php

require_once ROOT . "/Database.php";

class Driver extends Database {

    public function getOrders() {
        $sql = "select orderh.id, orderh.ddate, orderh.customer_name, sd.address, sd.tele from orderh, shipping_details as sd where orderh.id = sd.order_id and orderh.driver_id = 1";
        $query = $this->con->query($sql);
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

}