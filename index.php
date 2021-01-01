<?php

$dir_name = dirname($_SERVER['SCRIPT_NAME']);

define('ROOT', __DIR__);

// define('ASSETS_PATH', $dir_name . "/assets/");

// url => http://localhost:81/mvcp/user/add-post
// url => user/add-post
$url = trim(substr_replace(trim($_SERVER['REQUEST_URI'], '/'), '', 0, strlen($dir_name)), "?");

// associative arrays
$routes = [
  'user/add-post' => 'UserController@addPost',
  'user/request-meal-plan' => 'UserController@requestMealPlan',

  //seller
  'seller/dash' => 'SellerController@dash',
  'seller/dash-include/edit-restaurant-details' => 'SellerController@editRestaurantDetails',
  'seller/dash-include/add-food-item' => 'SellerController@addFoodItem',
  'seller/dash-include/edit-food-item' => 'SellerController@editFoodItem',
  'seller/dash-include/view-food-item' => 'SellerController@viewFoodItem',
  'seller/dash-include/view-order' => 'SellerController@viewOrder',
  'seller/dash-include/order-history' => 'SellerController@orderHistory',
  'seller/dash-include/contact-admin' => 'SellerController@contactAdmin',

  //driver
  'driver/dash' => 'DriverController@dash',
  'driver/dash-include/accept-orders' => 'DriverController@acceptOrders',
  'driver/dash-include/contact-admin' => 'DriverController@contactAdmin',
  'driver/dash-include/delivery-history' => 'DriverController@deliveryHistory',
  'driver/dash-include/earnings' => 'DriverController@earnings',
  'driver/dash-include/edit-profile' => 'DriverController@editProfile',
  'driver/dash-include/update-location' => 'DriverController@updateLocation',

];

$found = false;
// $request_path_only = explode("?", $url)[0];

foreach($routes as $route => $name) {
  if ($route === $url) {
    $found = true;
    // UserController@addPost
    $split = explode("@", $name);
    // [UserController, addPost]
    $controller_file = $split[0];
    $method = $split[1];

    require_once __DIR__ . "/controllers/" . $controller_file . ".php";
    $controller = new $controller_file();
    call_user_func([$controller, $method]);
  }
}

if ($found == false) {
  echo "404 Page Not Found";
}