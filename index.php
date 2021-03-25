<?php

$dir_name = dirname($_SERVER['SCRIPT_NAME']);

define('ROOT', __DIR__);

// url => http://localhost:81/mvcp/user/add-post
// url => user/add-post
$url = trim(substr_replace(trim($_SERVER['REQUEST_URI'], '/'), '', 0, strlen($dir_name)), "?");

// associative arrays
$routes = [

  //admin Controllers
  'admin/admin' => 'AdminController@admin',
  'admin/admin' => 'AdminController@totalUsers',
  'admin/admin-report' => 'AdminController@adminReport',
  'admin/admin-report' => 'AdminController@showReport',
  'admin/user-view' => 'AdminController@viewUser',
  'admin/user-add' => 'AdminController@addUser',
  'admin/user-update' => 'AdminController@updateUser',
  'admin/user-delete' => 'AdminController@deleteUser',
  'admin/inbox-view' => 'AdminController@viewInbox',
  'admin/inbox-update' => 'AdminController@updateMessages',
  'admin/inbox-delete' => 'AdminController@deleteMessages',
  'admin/income-add' => 'AdminController@addTransaction',
  'admin/payable-view' => 'AdminController@viewPayable',
  'admin/recievable-view' => 'AdminController@viewRecievable',
  'admin/payable-update' => 'AdminController@payableUpdate',
  'admin/recievable-update' => 'AdminController@recievableUpdate',
  'admin/payable-delete' => 'AdminController@payableDelete',
  'admin/recievable-delete' => 'AdminController@recievableDelete',
  'admin/manage-users' => 'AdminController@manageUsers',
  'admin/map' => 'AdminController@map',
  'admin/manage-posts' => 'AdminController@managePosts',
  'admin/income' => 'AdminController@income',
  'admin/logout' => 'AdminController@logout',

  //main controllers
  'main/index' => 'MainController@index',
  'main/about-us' => 'MainController@aboutUs',
  'main/blog' => 'MainController@blog',
  'main/restaurant' => 'MainController@restaurant',

  //authentication controller
  'auth/login' => 'AuthController@login',
  'auth/signup-user' => 'AuthController@signUpUser',

  //nutritionist controller
  'nutritionist/dashboard' => 'NutritionistController@dashboard',
  'nutritionist/food-add' => 'NutritionistController@addFood',
  'nutritionist/food-view' => 'NutritionistController@viewFood',
  'nutritionist/food-update' => 'NutritionistController@updateFood',
  'nutritionist/food-delete' => 'NutritionistController@deleteFood',
  'nutritionist/mealplan-add' => 'NutritionistController@addMealPlan',
  'nutritionist/request-list' => 'NutritionistController@requestList',
  'nutritionist/mealplan-view' => 'NutritionistController@viewMealPlan',
  'nutritionist/mealplan-delete' => 'NutritionistController@deleteMealPlan',
  'nutritionist/post-add' => 'NutritionistController@addPost',
  'nutritionist/post-view' => 'NutritionistController@viewPost',
  'nutritionist/contact-admin' => 'NutritionistController@contactAdmin',
  'nutritionist/my-profile' => 'NutritionistController@myProfile',
  'nutritionist/change-password' => 'NutritionistController@changePassword',
  'nutritionist/inbox' => 'NutritionistController@inbox',
  'nutritionist/logout' => 'NutritionistController@logout'
];

$found = false;
$request_path_only = explode("?", $url)[0];

foreach($routes as $route => $name) {
  if ($route === $request_path_only) {
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