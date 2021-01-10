<?php

$dir_name = dirname($_SERVER['SCRIPT_NAME']);

define('ROOT', __DIR__);

// define('ASSETS_PATH', $dir_name . "/assets/");

// url => http://localhost:81/mvcp/user/add-post
// url => user/add-post
$url = trim(substr_replace(trim($_SERVER['REQUEST_URI'], '/'), '', 0, strlen($dir_name)), "?");

// associative arrays

$routes = [
  //user
  'user/user-dash' => 'UserController@userDash',
  'user/add-post' => 'UserController@addPost',
  'user/request-meal-plan' => 'UserController@requestMealPlan',
  'user/contact-administration' => 'UserController@contactAdministration',
  'user/contact-nutritionist' => 'UserController@contactNutritionist',
    'user/user-profile' => 'UserController@UserProfile',

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