<?php

require_once ROOT  . '/View.php';
require_once ROOT . '/models/Food.php';
require_once ROOT . '/models/Nutritionist.php';
require_once ROOT . '/models/Mealplan.php';

class NutritionistController {
  public function dashboard() {

    $model = new Food();
    $countFood = $model->countFood();
    $view = new View("nutritionist/dashboard");
    $view->assign('foodCount', $countFood);

    $model = new Mealplan();
    $plans = $model->show();
    $view->assign('plans', $plans);
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
      // print_r($_POST);
      // die();
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
      // print_r($_POST);
      // die();
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

  public function myProfile() {
    $id = $_GET['id'];
    $model = new Nutritionist();
    $user = $model->findUserById($id);

    $data = [
      'id' => '',
      'name' => '',
      'username' => '',
      'email' => '',
      'med_id' => '',
      'tele_no' => '',
      'usernameError' => '',
      'emailError' => ''
    ];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'id' => $_GET['id'],
        'name' => trim($_POST['name']),
        'username' => trim($_POST['username']),
        'email' => trim($_POST['email']),
        'med_id' => trim($_POST['med_id']),
        'tele_no' => trim($_POST['tele_no']),
        'usernameError' => '',
        'emailError' => ''
      ];

      $nameValidation = "/^[a-zA-Z0-9]*$/";

      //Validate username on letters/numbers
        if (empty($data['username'])) {
            $data['usernameError'] = 'Please enter username.';
        } elseif (!preg_match($nameValidation, $data['username'])) {
            $data['usernameError'] = 'Name can only contain letters and numbers.';
        }

      //Validate email
        if (empty($data['email'])) {
            $data['emailError'] = 'Please enter email address.';
        } elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
              $data['emailError'] = 'Please enter the correct format.';
        }

        $model = new Nutritionist();
        if($model->changeUsername($data['id'],$data['username'])){
            $model = new Nutritionist();
            if ($model->findUserByUsername($data['username'])) {
              $data['usernameError'] = 'Username is already taken.';
            }
        }

        if($model->changeEmail($data['id'],$data['email'])){
          $model = new Nutritionist();
          if ($model->findUserByEmail($data['email'])) {
            $data['emailError'] = 'Email is already taken.';
          }
        }
        

        if (empty($data['usernameError']) && empty($data['emailError'])) {
            $model = new Nutritionist();
            if ($model->update($data)) {
              echo "<script>";
              echo "alert('Successfully Changed!');";
              echo "window.location = '../nutritionist/my-profile?id=".$data['id']."'"; // redirect with javascript, after page loads
              echo "</script>";
            } else {
                die('Something went wrong.');
            }
        }
      }

    $view = new View("nutritionist/my-profile");
    $view->assign('id', $user['user_id']);
    $view->assign('med_id', $user['medical_id']);
    $view->assign('name', $user['name']);
    $view->assign('username', $user['username']);
    $view->assign('email', $user['email']);
    $view->assign('tele_no', $user['tele_no']);
    $view->assign('usernameError', $data['usernameError']);
    $view->assign('emailError', $data['emailError']);
  }

  public function changePassword(){
    $data = [
      'id' => '',
      'currentPassword' => '',
      'password' => '',
      'confirmPassword' => '',
      'passwordError' => '',
      'confirmPasswordError' => '',
      'error' =>''
    ];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      // print_r($_POST);
      // die();
      $data = [
        'id' => $_GET['id'],
        'currentPassword' => trim($_POST['currentPassword']),
        'password' => trim($_POST['password']),
        'confirmPassword' => trim($_POST['confirmPassword']),
        'passwordError' => '',
        'confirmPasswordError' => '',
        'error' => ''
      ];
      // print_r($data);
      // die();

    if(!empty($data['currentPassword'])){
      $model = new Nutritionist;
      if($model->passwordVerify($data['id'], $data['currentPassword'])){
        
        $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

        // Validate password on length, numeric values,
        if(empty($data['password'])){
          $data['passwordError'] = 'Please enter password.';
        } elseif(strlen($data['password']) < 8){
          $data['passwordError'] = 'Password must be at least 8 characters';
        } elseif (preg_match($passwordValidation, $data['password'])) {
          $data['passwordError'] = 'Password must be have at least one numeric value.';
        }

        //Validate confirm password
        if (empty($data['confirmPassword'])) {
          $data['confirmPasswordError'] = 'Please enter confirm password.';
        } else {
          if ($data['password'] != $data['confirmPassword']) {
          $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
          }
        }

        if (empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

          // Hash password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
          $model = new Nutritionist();
          if ($model->updatePassword($data)) {
            echo "<script>";
            echo "alert('Successfully Changed!');";
            echo "window.location = '../nutritionist/my-profile?id=".$data['id']."'"; // redirect with javascript, after page loads
            echo "</script>";
          } else {
              die('Something went wrong.');
          }
        }
      }else{
        $data['error'] = 'Current Password not matched.';
      }
    }else{
      $data['error'] = 'Current Password cannot be empty.';
    }
  }

    $view = new View("nutritionist/change-password");
    $view->assign('passwordError', $data['passwordError']);
    $view->assign('confirmPasswordError', $data['confirmPasswordError']);
    $view->assign('error', $data['error']);
 }
  

 public function requestList() {
  $view = new View("nutritionist/request-list");
  $model = new Mealplan();
  $plans = $model->show();
  $view->assign('plans', $plans);
}

  public function addMealPlan() {
    $id = $_GET['id'];
    $model = new Mealplan();
    $plans = $model->findMealPlanById($id);
    // print_r($plans);
    // die();
    $view = new View("nutritionist/mealplan-add");
    $view->assign('request_id', $plans['request_id']);
    $view->assign('user_id', $plans['user_id']);
    $view->assign('name', $plans['name']);
    $view->assign('age', $plans['age']);
    $view->assign('height', $plans['height']);
    $view->assign('weight', $plans['weight']);
    $view->assign('bmi', $plans['bmi']);
    $view->assign('ex_level', $plans['ex_level']);
    $view->assign('preference', $plans['preference']);
    $view->assign('notes', $plans['notes']);
  }

  public function viewMealPlan() {
    $view = new View("nutritionist/mealplan-view");
  }

  public function deleteMealPlan(){
    $id = $_GET['id'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $model = new Mealplan();
      if($model->delete($id)) {
        header('location: request-list');
      } else {
        die('Something went wrong!');
      }
    }
  }

  public function addPost() {
    $view = new View("nutritionist/post-add");
  }

  public function viewPost() {
    $view = new View("nutritionist/post-view");
  }

  public function contactAdmin() {
    $id = $_GET['id'];
    $model = new Nutritionist();
    $user = $model->findUserById($id);
    // print_r($user);
    // die();
    $data = [
      'id' => '',
      'username' => '',
      'email' => '',
      'subject' => '',
      'message' => '',
    ];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'id' => $_GET['id'],
        'username' => $user['username'],
        'email' => $user['email'],
        'subject' => trim($_POST['subject']),
        'message' => trim($_POST['message'])
      ];
    
      $model = new Nutritionist();
      if ($model->sendMessage($data)) {
        echo "<script>alert('Successfully Sent!')</script>";
      } else {
        die('Something went wrong.');
      }
    }
    $view = new View("nutritionist/contact-admin");
  }

  public function inbox() {
    $view = new View("nutritionist/inbox");
  }

  public function logout() {
    $view = new View("nutritionist/logout");
  }
}