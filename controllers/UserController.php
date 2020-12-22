<?php

require_once ROOT  . '/View.php';
require_once ROOT . '/models/Post.php';

class UserController {
  // user/request-meal-plan
  public function requestMealPlan() {
    $view = new View("user/request-meal-plan");
  }

  // user/add-post
  public function addPost() {
    $view = new View("user/add-post");
    $model = new Post();
    $posts = $model->find();
    $view->assign('posts', $posts);
  }
}