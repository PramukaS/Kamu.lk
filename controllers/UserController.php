<?php

require_once ROOT  . '/View.php';
require_once ROOT . '/models/Post.php';

class UserController {

  // user/user-dash
  public function userDash() {
    $view = new View("user/user-dash");
  }

  // user/request-meal-plan
  public function requestMealPlan() {
    $view = new View("user/request-meal-plan");
  }

  // user/add-post
  public function addPost() {
    $view = new View("user/add-post");
  }
  /*public function addPost() {
    $view = new View("user/add-post");
    $model = new Post();
    $posts = $model->find();
    $view->assign('posts', $posts);
  }*/
  public function contactAdministration() {
    $view = new View("user/contact-administration");
  }
   public function viewPost() {
    $view = new View("user/add-post");
  }

   public function contactNutritionist() {
    $view = new View("user/contact-nutritionist");
  }
  public function userProfile() {
    $view = new View("user/user-profile");
  }

}