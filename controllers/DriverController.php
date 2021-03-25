<?php

require_once ROOT  . '/View.php';
require_once ROOT . "/models/Driver.php";

class DriverController {
  // driver/dash
  public function dash() {
    $view = new View("driver/dash");
  }

  // driver/accept-orders
  public function acceptOrders() {
    $model = new Driver();
    $data = $model->getOrders();
    $view = new View("driver/accept-orders");
    $view->assign("data", $data);
  }

  // driver/contact-admin
  public function contactAdmin() {
    $view = new View("driver/contact-admin");
  }

  // driver/delivey-history
  public function deliveryHistory() {
    $view = new View("driver/delivery-history");
  }

  // driver/earnings
  public function earnings() {
    $view = new View("driver/earnings");
  }

  // driver/edit-profile
  public function editProfile() {
    $view = new View("driver/edit-profile");
  }

  // driver/my-profile
  public function myProfile() {
    $view = new View("driver/my-profile");
  }

  // driver/update-location
  public function updateLocation() {
    $view = new View("driver/update-location");
  }



}