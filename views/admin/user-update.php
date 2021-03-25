<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Users</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../assets/css/admin/adminstyle2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/admin/adminstyle.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/admin/to-do.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/adminstyle-responsive.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/admin/styles.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/admin/style.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/admin/forms.css">
</head>

<body>
  <div class="admin-dashboard">
        <?php include('nav/nav2.php'); ?>
      <div class="content">
      <div class="user-form form-container">
            <h2 style="text-transform: capitalize;">Update User Details</h2><br>
                <form class="form" action="../admin/user-update?id=<?php echo $id;?>" method="post">
                    <div class="form-group">
                        <label>Email</label>
                            <input class="form-control" type="text" name="email" size="50"
                                value="<?php echo $email;?>" autocomplete="off" placeholder="Enter Email Here" required><br>
                        <label>Username</label>
                            <input class="form-control" type="text"  name="username" size="50"
                                    value="<?php echo $username;?>" placeholder="Enter Username" required><br>
                        <label>User-Type</label>
                                <select name="user_type_id" id="user_type_id" class="form-control">
                                    <option value="<?php echo $user_type_id;?>"><?php echo $user_type;?></option>
                                    <option value="1">Admin</option>
                                    <option value="2">Nutritionist</option>
                                    <option value="3">User</option>
                                    <option value="4">Seller</option>
                                    <option value="5">Driver</option>
                                </select>                               
                    </div>
                    <input class="button" type="submit" name='submit2' value="Update" size="25">
                   
                </form>
        </div>
    </div>
</body>
</html>