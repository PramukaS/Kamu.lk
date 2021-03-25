<?php

require_once ROOT  . '/View.php';
require_once ROOT  . '/models/Seller.php';

class SellerController {
  // seller/dash
  public function dash() {
    $model = new Seller();
    $count = $model->getCount();

    $view = new View("seller/dash");
    $view->assign('count', $count);
  }

  // seller/edit-restaurant-details
  public function editRestaurantDetails() {
    $model = new Seller();
    $count = $model->getCount();

    $view = new View("seller/edit-restaurant-details");
    $view->assign('count', $count);
  }
  // seller/my-profile
  public function myProfile() {
    $model = new Seller();
    $count = $model->getCount();

    $view = new View("seller/my-profile");
    $view->assign('count', $count);
  }

  // seller/add-food-item
  public function addFoodItem() { 

    $_SESSION['menu_item']['item_name'] = '';

    if (isset($_POST['submit'])){
      $target_dir =  ROOT . "/assets/uploads/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
        
        header("Location: add-food-item");
        echo "Sorry, there was an error uploading your file.";
        die();
      } 
      $file = "assets/uploads/" . basename($_FILES["fileToUpload"]["name"]);

     $model = new Seller();
     $model->addFood($_POST, $file);
     header("Location: view-food-item");
    }
    $model = new Seller();
    $count = $model->getCount();


    $view = new View("seller/add-food-item");
    $view->assign('count', $count);
  }

  // seller/edit-food-item
  public function editFoodItem() {
    $item_id = $_GET['id'];
    $model = new Seller();
    $data = $model->getMenuItem($item_id);
    $_SESSION['edit_menu_item']['item_name'] = '';
    
    if (isset($_POST['submit'])){
      if (isset($_FILES['fileToUpload'])) {
        $target_dir =  ROOT . "/assets/uploads/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
        header("Location: add-food-item");
        echo "Sorry, there was an error uploading your file.";
        die();
      }
      
      $file = "assets/uploads/" . basename($_FILES["fileToUpload"]["name"]);
      } else {
        $file = $data['image'];
      }
      
     $model = new Seller();
     $model->editFood($_POST, $file);
     header("Location: view-food-item");

    }
    $model = new Seller();
     $count = $model->getCount();

    $view = new View("seller/edit-food-item");
    $view->assign('data', $data);
    $view->assign('count', $count);
  }

  // seller/view-food-item
  public function viewFoodItem() {
    $model = new Seller();
    $count = $model->getCount();
    $data = $model->getMenuItems();
    $view = new View("seller/view_food_item");
    $view->assign('data', $data);
    $view->assign('count', $count);

  }

  // seller/view-order
  public function viewOrder() {
    $model = new Seller();
    $data = $model->getOrders();
    $drivers = $model->getDrivers();
    $count = $model->getCount();
    
    $view = new View("seller/view-order");
    $view->assign('data', $data);
    $view->assign('drivers', $drivers);
    $view->assign('count', $count);
  }


  // seller/contact-admin
  public function contactAdmin() {

    $model = new Seller();
    $count = $model->getCount();

    $view = new View("seller/contact-admin");
    $view->assign('count', $count);
  }

  public function acceptOrder() {
    $id = $_GET['id'];
    $model = new Seller();
    $model->acceptOrder($id);
    header('Location: view-order');
  }

  public function rejectOrder() {
    $id = $_GET['id'];
    $model = new Seller();
    $model->rejectOrder($id);
    header('Location: view-order');
  }

  public function assignDriver() {
    $driver = $_POST['driver'];
    $id = $_POST['id'];

    $model = new Seller();
    $model->assignDriver($driver, $id);
    header('Location: view-order');
  }



}
