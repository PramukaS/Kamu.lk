<?php

require_once ROOT  . '/View.php';
require_once ROOT . '/models/Auth.php';


class AuthController {

  public function login() {  
    $data = [
        'username' => '',
        'password' => '',
        'usernameError' => '',
        'passwordError' => '',
    ];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'username' => trim($_POST['username']),
        'password' => trim($_POST['password']),
        'usernameError' => '',
        'passwordError' => '',
      ];

      //validate username
        if (empty($data['username'])) {
          $data['usernameError'] = 'Please enter a username.';
        }
      //Validate password
        if (empty($data['password'])) {
          $data['passwordError'] = 'Please enter a password.';
        }
        
      //check for username
        $model = new Auth();
        if(!$model->findUserByUsername($data['username'])){
          $data['usernameError'] = 'Invalid username.';
        }

        if (empty($data['usernameError']) && empty($data['passwordError'])) {
          $model = new Auth();
          $loggedInUser = $model->login($data['username'], $data['password']);
          
          if($loggedInUser){
            if ($loggedInUser['user_type_id'] == 1) {
              session_start();
              $_SESSION['loggedin'] = ['user_type' => 'ADMIN', 'user_id' => $loggedInUser['id'], 'username' => $loggedInUser['username']];
              header('location: ../admin/admin');
              die();
            }
            else if ($loggedInUser['user_type_id'] == 2) {
              session_start();
              $_SESSION['loggedin'] = ['user_type' => 'NUTRITIONIST', 'user_id' => $loggedInUser['id'], 'username' => $loggedInUser['username']];
              // print_r($_SESSION['loggedin']);
              // die();
              header('location: ../nutritionist/dashboard');
              die();
            }else if ($loggedInUser['user_type_id'] == 3) {
              header('location: ../main/restaurant');
            }
          } else {
            $data['passwordError'] = 'Password or username is incorrect. Please try again.';
          }
        } 
      }else{
        $data = [
          'username' => '',
          'password' => '',
          'usernameError' => '',
          'passwordError' => ''
        ];
      } 
      $view = new View("auth/login");
      $view->assign('usernameError', $data['usernameError']);
      $view->assign('passwordError', $data['passwordError']);
  }

  public function signUpUser(){
      $data = [
        'username' => '',
        'email' => '',
        'password' => '',
        'confirmPassword' => '',
        'userTypeId' => '',
        'usernameError' => '',
        'emailError' => '',
        'passwordError' => '',
        'confirmPasswordError' => ''
      ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'username' => trim($_POST['username']),
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'confirmPassword' => trim($_POST['confirmPassword']),
          'userTypeId' => trim($_POST['userTypeId']),
          'usernameError' => '',
          'emailError' => '',
          'passwordError' => '',
          'confirmPasswordError' => ''
      ];

        $nameValidation = "/^[a-zA-Z0-9]*$/";
        $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

        //Validate username on letters/numbers
        if (empty($data['username'])) {
          $data['usernameError'] = 'Please enter username.';
        } elseif (!preg_match($nameValidation, $data['username'])) {
          $data['usernameError'] = 'Name can only contain letters and numbers.';
        }else {
          //Check if username exists.
          $model = new Auth();
          if ($model->findUserByUsername($data['username'])) {
          $data['usernameError'] = 'Username is already taken.';
          }
        }

        //Validate email
        if (empty($data['email'])) {
            $data['emailError'] = 'Please enter email address.';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $data['emailError'] = 'Please enter the correct format.';
        } else {
            //Check if email exists.
            $model = new Auth();
            if ($model->findUserByEmail($data['email'])) {
            $data['emailError'] = 'Email is already taken.';
            }
        }

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

        // Make sure that errors are empty
        if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

            // Hash password
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            $model = new Auth();
            if ($model->userSignUp($data)) {
                header('location: login');
            } else {
                die('Something went wrong.');
            }
        }
  }
    $view = new View("auth/signup-user");
    $view->assign('usernameError', $data['usernameError']);
    $view->assign('emailError', $data['emailError']);
    $view->assign('passwordError', $data['passwordError']);
    $view->assign('confirmPasswordError', $data['confirmPasswordError']);
  }
}