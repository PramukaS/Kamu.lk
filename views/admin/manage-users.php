<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Manage Users</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../assets/css/admin/adminstyle2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/admin/adminstyle.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/admin/to-do.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/adminstyle-responsive.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/admin/styles.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/admin/style.css">
</head>

<body>
  <div class="admin-dashboard">
        <?php include('nav/nav2.php'); ?>
      <div class="content">

        <?php if (isset($_SESSION['message'])): ?>
          <div class="msg">
            <?php 
              echo $_SESSION['message']; 
              unset($_SESSION['message']);
            ?>
          </div>
        <?php endif ?>

        <?php //$results = mysqli_query($db, "SELECT * FROM accounts"); ?>
  

        <div class="tableview">
          <table class="table" border="1em" style="position:relative; top:10px; left: -90px;">
            <tr> 
              <th colspan="6"><h2>User Profiles</h2></th>
            </tr>
            <tr>
              <th>User ID</th>
              <th>Username</th>
              <th>Usertype</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
            <?php foreach($users as $user) { ?>
              <tr>
                <td><?php echo $user['id'];?></td>
                <td><?php echo $user['email'];?></td>
                <td><?php echo $user['username'];?></td>
                <td><?php echo $user['user_type_id'];?></td>
                <td><a href="manageusers.php?edit=<?php echo $user['id'];?>"
                  id="update">Edit</a>
                  <a href="process.php?delete=<?php echo $user['id'];?>"
                   id="delete">Delete</a>

                </td>
              </tr>


            <?php
           }
            ?>
          </table>
          
        </div>
        <div>
          <form action="process.php" method='POST'class="userform" style="position:relative; top:-120px; left: 0px;"> 
            <div class="adduserview">
              <table class="addusertable">
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
              </tr>
              <tr>
                <td><label>Username</label></td>
                <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
              </tr>
               
              <tr>
                <td><label>User Email</label></td>
                <td><input type="email" name="emailid" value="<?php echo $emailid; ?>"></td>
              </tr>
              <tr>
                <td><label for="user">User Type</label></td>
                <td><input type = "text" name="usertype"value="<?php echo $usertype; ?>">
                </td>
              </tr>
              <tr>
                <td><label for="user">Password</label></td>
                <td><input type = "password" name="password"value="<?php echo $password; ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <?php //if($update == true): ?>
                    <button type="submit" id="add" name="update">Update</button></td>
              </tr>
              <tr>
                <td><?php // else: ?><button type="submit" id="add" name="save">Save</button></td>
              </tr>
            <?php //endif; ?>
            </table>
            </div>
          </form>
        </div>
      </section>
    </section>
</body>

</html>

