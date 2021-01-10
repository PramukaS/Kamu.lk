<?php

$dir_name = dirname($_SERVER['SCRIPT_NAME']);

define('ROOT', __DIR__);

// define('ASSETS_PATH', $dir_name . "/assets/");

// url => http://localhost:81/mvcp/user/add-post
// url => user/add-post
$url = trim(substr_replace(trim($_SERVER['REQUEST_URI'], '/'), '', 0, strlen($dir_name)), "?");

// associative arrays
$routes = [

  //seller
  'seller/dash' => 'SellerController@dash',
  'seller/edit-restaurant-details' => 'SellerController@editRestaurantDetails',
  'seller/add-food-item' => 'SellerController@addFoodItem',
  'seller/edit-food-item' => 'SellerController@editFoodItem',
  'seller/my-profile' => 'SellerController@myProfile',
  'seller/view-food-item' => 'SellerController@viewFoodItem',
  'seller/view-order' => 'SellerController@viewOrder',
  'seller/order-history' => 'SellerController@orderHistory',
  'seller/contact-admin' => 'SellerController@contactAdmin',

  //driver
  'driver/dash' => 'DriverController@dash',
  'driver/accept-orders' => 'DriverController@acceptOrders',
  'driver/contact-admin' => 'DriverController@contactAdmin',
  'driver/delivery-history' => 'DriverController@deliveryHistory',
  'driver/earnings' => 'DriverController@earnings',
  'driver/edit-profile' => 'DriverController@editProfile',
  'driver/my-profile' => 'DriverController@myProfile',
  'driver/update-location' => 'DriverController@updateLocation',


  //user
  'user/user-dash' => 'UserController@userDash',
  'user/add-post' => 'UserController@addPost',
  'user/request-meal-plan' => 'UserController@requestMealPlan',
  'user/contact-administration' => 'UserController@contactAdministration',
  'user/contact-nutritionist' => 'UserController@contactNutritionist',
  'user/user-profile' => 'UserController@UserProfile',

  //main controllers
  'main/index' => 'MainController@index',
  'main/about-us' => 'MainController@aboutUs',
  'main/blog' => 'MainController@blog',
  'main/restaurant' => 'MainController@restaurant',

  //authentication controller
  'auth/login' => 'AuthController@login',
  'auth/signup-user' => 'AuthController@signUpUser'

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
