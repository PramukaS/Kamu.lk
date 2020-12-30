<?php

require_once ROOT  . '/View.php';

class SellerController {
  // seller/dash
  public function dash() {
    $view = new View("seller/dash");
  }

  // seller/dash-include/edit-restaurant-details
  public function editRestaurantDetails() {
    $view = new View("seller/dash-include/edit-restaurant-details");
  }

  // seller/dash-include/add-food-item
  public function addFoodItem() {
    $view = new View("seller/dash-include/add-food-item");
  }

  // seller/dash-include/edit-food-item
  public function editFoodItem() {
    $view = new View("seller/dash-include/edit-food-item");
  }

  // seller/dash-include/view-food-item
  public function viewFoodItem() {
    $view = new View("seller/dash-include/view-food-item");
  }

  // seller/dash-include/view-order
  public function viewOrder() {
    $view = new View("seller/dash-include/view-order");
  }

  // seller/dash-include/order-history
  public function orderHistory() {
    $view = new View("seller/dash-include/order-history");
  }

  // seller/dash-include/contact-admin
  public function contactAdmin() {
    $view = new View("seller/dash-include/contact-admin");
  }





}