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
              <th colspan="9"><h2>Recievable Details</h2></th>
            </tr>
            <tr>
              <th>Trans_ID</th>
              <th>Order_ID</th>
              <th>User_ID</th>
              <th>Date</th>
              <th>Payment Type</th>
              <th>Amount(LKR)</th>
              <th>Status</th>
              <th colspan="2">Actions</th>
            </tr>
            <?php foreach($trans as $tran) { ?>
              <tr>
                <td><?php echo $tran['trans_id'];?></td>
                <td><?php echo $tran['order_id'];?></td>
                <td><?php echo $tran['user_id'];?></td>
                <td><?php echo $tran['date'];?></td>
                <td><?php echo $tran['payment_type'];?></td>
                <td><?php echo $tran['amount'];?></td>
                <td><?php echo $tran['status'];?></td>
                <td><a href="recievable-update?id=<?php echo $tran ['trans_id'];?>"> 
                <button id="update">Update</button></a></td>
                  
                <td> 
                  <form action="recievable-delete?id=<?php echo $tran ['trans_id'];?>" method="POST">
                      <input type="submit" name="delete" value="Delete" id="delete">
                  </form>
                </td>
              </tr>
            <?php } ?>
          </table>
        </div>     
</body>

</html>

