<?php

require_once ROOT  . '/View.php';
require_once ROOT . '/models/Food.php';

class NutritionistController {
  public function dashboard() {
    $view = new View("nutritionist/dashboard");
  }

  public function addFood() {
    $data = [
      'foodName' => '',
      'calories' => '',
      'protein' => '',
      'fat' => '',
      'Error' => ''
    ];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'foodName' => trim($_POST['foodName']),
        'calories' => trim($_POST['calories']),
        'protein' => trim($_POST['protein']),
        'fat' => trim($_POST['fat']),
        'Error' => ''
    ];

    //Check if food already exists.
    $model = new Food();
    if ($model->findFood($data['foodName'])) {
      $data['Error'] = 'Food is already inserted';
    }

    if (empty($data['Error'])){
      $model = new Food();
      if ($model->addFood($data)) {
        header('location: food-view');
      } else {
          die('Something went wrong.');
      }
    }  
  }
    $view = new View("nutritionist/food-add");
    $view->assign('Error', $data['Error']);
  }

  public function viewFood() {
    $view = new View("nutritionist/food-view");
    $model = new Food();
    $foods = $model->show();
    $view->assign('foods', $foods);
  }

  public function updateFood(){
    $id = $_GET['id'];
    $model = new Food();
    $foods = $model->findFoodById($id);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'id' => $_GET['id'],
        'foodName' => trim($_POST['foodName']),
        'calories' => trim($_POST['calories']),
        'protein' => trim($_POST['protein']),
        'fat' => trim($_POST['fat']),
        'Error' => ''
      ];

      $model = new Food();
      if ($model->update($data)) {
        header('location: food-view');
      } else {
          die('Something went wrong.');
      }
    }

    $view = new View("nutritionist/food-update");
    $view->assign('id', $foods['id']);
    $view->assign('foodName', $foods['foodName']);
    $view->assign('calories', $foods['calories']);
    $view->assign('protein', $foods['protein']);
    $view->assign('fat', $foods['fat']);
  }

  public function deleteFood(){
    $id = $_GET['id'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $model = new Food();
      if($model->delete($id)) {
        header('location: food-view');
      } else {
        die('Something went wrong!');
      }
    }
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