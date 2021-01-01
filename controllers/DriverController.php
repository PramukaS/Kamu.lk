<?php

require_once ROOT  . '/View.php';

class DriverController {
  // driver/dash
  public function dash() {
    $view = new View("driver/dash");
  }

  // driver/dash-include/accept-orders
  public function acceptOrders() {
    $view = new View("driver/dash-include/accept-orders");
  }

  // driver/dash-include/contact-admin
  public function contactAdmin() {
    $view = new View("driver/dash-include/contact-admin");
  }

  // driver/dash-include/delivey-history
  public function deliveryHistory() {
    $view = new View("driver/dash-include/delivery-history");
  }

  // driver/dash-include/earnings
  public function earnings() {
    $view = new View("driver/dash-include/earnings");
  }

  // driver/dash-include/edit-profile
  public function editProfile() {
    $view = new View("driver/dash-include/edit-profile");
  }

  // driver/dash-include/update-location
  public function updateLocation() {
    $view = new View("driver/dash-include/update-location");
  }



}