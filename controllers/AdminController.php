<?php

require_once ROOT  . '/View.php';
require_once ROOT . '/models/User.php';
require_once ROOT . '/models/Stats.php';
require_once ROOT . '/models/Transaction.php';

class AdminController {
  
  public function totalUsers(){
    $model = new Stats();

    $countAdmin= $model->countAdmin();
    $countNutritionist= $model->countNutritionist();
    $countReguser= $model->countReguser();
    $countSeller= $model->countSeller();
    $countDriver= $model->countDriver();
    $orderDelivered= $model->orderDelivered();
    $orderOnprocess= $model->orderOnprocess();
    $orderCancelled= $model->orderCancelled();
    $orderRejected= $model->orderRejected();
    $consultancyChecked= $model->consultancyChecked();
    $consultancyOnprocess= $model->consultancyOnprocess();
    $consultancyCancelled= $model->consultancyCancelled();
    $consultancyRejected= $model->consultancyRejected();

    $view = new View("admin/admin");

    $view->assign('adminCount', $countAdmin);
    $view->assign('nutritionistCount', $countNutritionist);
    $view->assign('reguserCount', $countReguser);
    $view->assign('sellerCount', $countSeller);
    $view->assign('driverCount', $countDriver);
    $view->assign('deliveredOrder', $orderDelivered);
    $view->assign('processOrder', $orderOnprocess);
    $view->assign('cancelledOrder', $orderCancelled);
    $view->assign('rejectedOrder', $orderRejected); 
    $view->assign('checkedRequest', $consultancyChecked);
    $view->assign('processRequest', $consultancyOnprocess);
    $view->assign('cancelledRequest', $consultancyCancelled);
    $view->assign('rejectedRequest', $consultancyRejected);  
  }

  public function showReport(){
    $model = new Stats();

    //$countAdmin= $model->countAdmin();
    $countNutritionist= $model->countNutritionist();
    $countReguser= $model->countReguser();
    $countSeller= $model->countSeller();
    $countDriver= $model->countDriver();
    //$orderDelivered= $model->orderDelivered();
    //$orderOnprocess= $model->orderOnprocess();
    //$orderCancelled= $model->orderCancelled();
    //$orderRejected= $model->orderRejected();
    //$consultancyChecked= $model->consultancyChecked();
    //$consultancyOnprocess= $model->consultancyOnprocess();
    //$consultancyCancelled= $model->consultancyCancelled();
    //$consultancyRejected= $model->consultancyRejected();

    $view = new View("admin/admin-report");

    //$view->assign('adminCount', $countAdmin);
    $view->assign('nutritionistCount', $countNutritionist);
    $view->assign('reguserCount', $countReguser);
    $view->assign('sellerCount', $countSeller);
    $view->assign('driverCount', $countDriver);
    /*$view->assign('deliveredOrder', $orderDelivered);
    $view->assign('processOrder', $orderOnprocess);
    $view->assign('cancelledOrder', $orderCancelled);
    $view->assign('rejectedOrder', $orderRejected); 
    $view->assign('checkedRequest', $consultancyChecked);
    $view->assign('processRequest', $consultancyOnprocess);
    $view->assign('cancelledRequest', $consultancyCancelled);
    $view->assign('rejectedRequest', $consultancyRejected); */ 
  }
  

  public function addUser() {
    $data = [
      'id' => '',
      'email' => '',
      'username' => '',
      'password' => '',
      'user_type_id' => '',
      'Error' => ''
    ];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'email' => trim($_POST['email']),
        'username' => trim($_POST['username']),
        'password' => trim($_POST['password']),
        'user_type_id' => trim($_POST['user_type_id']),
        'Error' => ''
      ];

      //Check if user already exists.
      $model = new User();
      if ($model->findUser($data['username'])) {
        $data['Error'] = 'User is already inserted';
      }

    if (empty($data['Error'])){
      $model = new User();
      if ($model->addUser($data)){
        header('location: user-view');
      } else {
          die('Something went wrong.');
      }
    }  
  }
    $view = new View("admin/user-add");
    $view->assign('Error', $data['Error']);
  }

  public function viewUser() {
    $view = new View("admin/user-view");
    $model = new User();
    $users = $model->show();
    $view->assign('users', $users);
  }

  public function updateUser(){
    $id = $_GET['id'];
    $model = new User();
    $users = $model->findUserById($id);
    // print_r($users);
    // die();
    $type = $model->findUserType($users['user_type_id']);
 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      // print_r($_POST);
      // die();
      $data = [
        'id' => $_GET['id'],
        'email' => trim($_POST['email']),
        'username' => trim($_POST['username']),
        'user_type_id' => trim($_POST['user_type_id']),
        'Error' => ''
      ];

      $model = new User();
      if ($model->update($data)) {
        header('location: user-view');
      } else {
          die('Something went wrong.');
      }
    }
    // $model = new User();
    // $type = $model->findUserType($data['user_type_id']);

    $view = new View("admin/user-update");
    $view->assign('id', $users['id']);
    $view->assign('email', $users['email']);
    $view->assign('username', $users['username']);
    $view->assign('password', $users['password']);
    $view->assign('user_type_id', $users['user_type_id']);
    $view->assign('user_type', $type['type']);
    
  }

  public function deleteUser(){
    $id = $_GET['id'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $model = new User();
      if($model->delete($id)) {
        header('location: user-view');
      } else {
        die('Something went wrong!');
      }
    }
  }

// -----------*----------*---------*------Inbox (View/Update/Delete)---*-----------*-----------*--------------*-------//
public function viewInbox() {
  $view = new View("admin/inbox-view");
  $model = new User();
  $users = $model->showMessage();
  $view->assign('users', $users);
}

public function updateMessages(){
  $id = $_GET['id'];
  $model = new User();
  $users = $model->findMessageById($id);

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $data = [
      'id' => $_GET['id'],
      'username' => trim($_POST['username']),
      'subject' => trim($_POST['subject']),
      'message' => trim($_POST['message']),
      'reply' => trim($_POST['reply']),
      'Error' => ''
    ];

    $model = new User();
    if ($model->updateMessage($data)) {
      header('location: inbox-view');
    } else {
        die('Something went wrong.');
    }
  }

  $view = new View("admin/inbox-update");
  $view->assign('id', $users['id']);
  $view->assign('username', $users['username']);
  $view->assign('subject', $users['subject']);
  $view->assign('message', $users['message']);
  $view->assign('reply', $users['reply']);
  
}

public function deleteMessages(){
  $id = $_GET['id'];

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $model = new User();
    if($model->deleteMessage($id)) {
      header('location: inbox-view');
    } else {
      die('Something went wrong!');
    }
  }
}


//---------------*----------------------*--------------------*----------------------*--------//
  
public function addTransaction() {
    $data = [
      'trans_id' => '',
      'order_id' => '',
      'user_id' => '',
      'date' => '',
      'payment_type' => '',
      'amount' => '',
      'status' => '',
      'Error' => ''
    ];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'order_id' => trim($_POST['order_id']),
        'user_id' => trim($_POST['user_id']),
        'date' => trim($_POST['date']),
        'payment_type' => trim($_POST['payment_type']),
        'amount' => trim($_POST['amount']),
        'status' => trim($_POST['status']),
        'Error' => ''
    ];

    //Check if Transaction already recorded.
    $model = new Transaction();
    if ($model->findTransaction($data['trans_id'])) {
      $data['Error'] = 'Transaction is already inserted';
    }

    if (empty($data['Error'])){
      $model = new Transaction();
      if ($model->addTransaction($data)) {
        header('location: recievable-view');
      } else {
          die('Something went wrong.');
      }
    } 
  }
    $view = new View("admin/income-add");
    $view->assign('Error', $data['Error']);
  }

  public function viewPayable(){
    $view = new View("admin/payable-view");
    $model = new Transaction();
    $trans = $model->showPayable();
    $view->assign('trans', $trans);
  }

  public function viewRecievable(){
    $view = new View("admin/recievable-view");
    $model = new Transaction();
    $trans = $model->showRecievable();
    $view->assign('trans', $trans);
  }

  public function payableUpdate(){
    $trans_id = $_GET['trans_id'];
    $model = new Transaction();
    $trans = $model->findTransactionById($trans_id);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'trans_id' => $_GET['trans_id'],
        'order_id' => trim($_POST['order_id']),
        'user_id' => trim($_POST['user_id']),
        'date' => trim($_POST['date']),
        'payment_type' => trim($_POST['payment_type']),
        'amount' => trim($_POST['amount']),
        'status' => trim($_POST['status']),
        'Error' => ''
      ];

      $model = new Transaction();
      if ($model->updatePayable($data)) {
        header('location: payable-view');
      } else {
          die('Something went wrong.');
      }
    }

    $view = new View("admin/payable-update");
    $view->assign('trans_id', $trans['trans_id']);
    $view->assign('order_id', $trans['order_id']);
    $view->assign('user_id', $trans['user_id']);
    $view->assign('date', $trans['date']);
    $view->assign('payment_type', $trans['payment_type']);
    $view->assign('amount', $trans['amount']);
    $view->assign('status', $trans['status']);
    
  }

  public function payableDelete(){
    $trans_id = $_GET['trans_id'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $model = new Transaction();
      if($model->deletePayable($trans_id)) {
        header('location: payable-view');
      } else {
        die('Something went wrong!');
      }
    }
  }

  public function recievableUpdate(){
    $trans_id = $_GET['trans_id'];
    $model = new Transaction();
    $trans = $model->findTransactionById($trans_id);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'trans_id' => $_GET['trans_id'],
        'order_id' => trim($_POST['order_id']),
        'user_id' => trim($_POST['user_id']),
        'date' => trim($_POST['date']),
        'payment_type' => trim($_POST['payment_type']),
        'amount' => trim($_POST['amount']),
        'status' => trim($_POST['status']),
        'Error' => ''
      ];

      $model = new Transaction();
      if ($model->updateRecievable($data)) {
        header('location: recievable-view');
      } else {
          die('Something went wrong.');
      }
    }

    $view = new View("admin/recievable-update");
    $view->assign('trans_id', $trans['trans_id']);
    $view->assign('order_id', $trans['order_id']);
    $view->assign('user_id', $trans['user_id']);
    $view->assign('date', $trans['date']);
    $view->assign('payment_type', $trans['payment_type']);
    $view->assign('amount', $trans['amount']);
    $view->assign('status', $trans['status']);
    
  }

  public function recievableDelete(){
    $trans_id = $_GET['trans_id'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $model = new Transaction();
      if($model->deleteRecievable($trans_id)) {
        header('location: recievable-view');
      } else {
        die('Something went wrong!');
      }
    }
  }
  //--------------------------------------*******************--------------------*****************---------------//
  public function viewNewUser() {
    $view = new View("admin/admin");
    $model = new Stats();
    $users = $model->newUser();
  }


  public function manageUsers() {
    $view = new View("admin/manage-users");
  }

  public function admin() {
    $view = new View("admin/admin");
  }

  public function adminInbox() {
    $view = new View("admin/admin-inbox");
  }
  
  public function newAdminSignup() {
    $view = new View("admin/admin");
    $model = new User();
    $foods = $model->adminNewSignup();
    $view->assign('users', $users);
  }

  public function adminReport() {
    $view = new View("admin/admin-report");
  }

  public function managePosts() {
    $view = new View("admin/manage-posts");
  }

  public function map() {
    $view = new View("admin/map");
  }

  public function income() {
    $view = new View("admin/income");
  }

  public function logout() {
    $view = new View("admin/logout");
  }
}