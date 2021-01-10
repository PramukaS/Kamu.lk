<?php

require_once ROOT  . '/View.php';

class SellerController {
  // seller/dash
  public function dash() {
    $view = new View("seller/dash");
  }

  // seller/edit-restaurant-details
  public function editRestaurantDetails() {
    $view = new View("seller/edit-restaurant-details");
  }
  // seller/my-profile
  public function myProfile() {
    $view = new View("seller/my-profile");
  }

  // seller/add-food-item
  public function addFoodItem() {
    $view = new View("seller/add-food-item");
  }

  // seller/edit-food-item
  public function editFoodItem() {
    $view = new View("seller/edit-food-item");
  }

  // seller/view-food-item
  public function viewFoodItem() {
    $view = new View("seller/view-food-item");
  }

  // seller/view-order
  public function viewOrder() {
    $view = new View("seller/view-order");
  }

  // seller/order-history
  public function orderHistory() {
    $view = new View("seller/order-history");
  }

  // seller/contact-admin
  public function contactAdmin() {
    $view = new View("seller/contact-admin");
  }





}
