<?php

require_once ROOT  . '/View.php';

class NutritionistController {
  public function dashboard() {
    $view = new View("nutritionist/dashboard");
  }

  public function addFood() {
    $view = new View("nutritionist/food-add");
  }

  public function viewFood() {
    $view = new View("nutritionist/food-view");
  }

  public function addMealPlan() {
    $view = new View("nutritionist/mealplan-add");
  }

  public function viewMealPlan() {
    $view = new View("nutritionist/mealplan-view");
  }

  public function addPost() {
    $view = new View("nutritionist/post-add");
  }

  public function viewPost() {
    $view = new View("nutritionist/post-view");
  }

  public function contactAdmin() {
    $view = new View("nutritionist/contact-admin");
  }

  public function myProfile() {
    $view = new View("nutritionist/my-profile");
  }

  public function inbox() {
    $view = new View("nutritionist/inbox");
  }

  public function logout() {
    $view = new View("nutritionist/logout");
  }
}