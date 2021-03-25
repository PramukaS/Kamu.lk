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
        <div class="tableview">
          <table class="table" border="1em" style="position:relative; top:10px; left: -90px;">
            <tr> 
              <th colspan="6"><h2>User Details</h2></th>
            </tr>
            <tr>
              <th>User ID</th>
              <th>Email</th>
              <th>Username</th>
              <th>User_Type_ID</th>
              <th colspan="2">Actions</th>
            </tr>
            <?php foreach($users as $user) { ?>
              <tr>
                <td><?php echo $user['id'];?></td>
                <td><?php echo $user['email'];?></td>
                <td><?php echo $user['username'];?></td>
                <td><?php echo $user['user_type_id'];?></td>
                <td><a href="user-update?id=<?php echo $user ['id'];?>"> 
                <button id="update">Update</button></a></td>
                  
                <td> 
                  <form action="user-delete?id=<?php echo $user ['id'];?>" method="POST">
                      <input type="submit" name="delete" value="Delete" id="delete">
                  </form>
                </td>
              </tr>
            <?php } ?>
          </table>
        </div>  
        
      </div>   
</body>

</html>

