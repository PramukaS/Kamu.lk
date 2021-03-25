<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Manage Transaction</title>
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
          <table class="transtable" border="1em" style="position:relative; top:10px; left: -70px;>
            <tr> 
              <th colspan="7"><h2>Transaction Details</h2></th>
            </tr>
            <tr>
              <th>User ID</th>
              <th>Date</th>
              <th>Username</th>
              <th>Description</th>
              <th>Amount</th>
              <th>Status</th>
              <th>Action</th>
            </tr>

              <!--<tr>
                /*<td><?php // echo $row['id']; ?></td>
                <td><?php //echo $row['date']; ?></td>
                <td><?php //echo $row['username'];?></td>
                <td><?php //echo $row['usertype'];?></td>
                <td><?php //echo $row['emailid'];?></td>
                <td><?php //echo $row['description'];?></td>
                <td><?php //echo $row['amount'];?></td>
                <td><?php //echo $row['status'];?></td>
                <td><a href="income.php?edit=<?php //echo $row['id'];?>"
                  id="update">Edit</a>
                  <a href="accountprocess.php?delete=<?php //echo $row['id'];?>"
                   id="delete">Delete</a>

                </td>
              </tr>-->
          </table>
          
        </div>
        <div>
          <form action="account.php" method='POST'class="userform">
            <div class="adduserview">
              <table class="addusertable" style="position:relative; top:50px; left: -750px;">
                <td><input type="hidden" name="id" value="<?php //echo $id; ?>"></td>
              </tr>
              <tr >
                <td style="position:relative; left:-25px; top:2px;"><label>Date</label></td>
                <td align ="left"><input type="date" name="username" value="<?php //echo $date; ?>"></td>
              </tr>
              <tr>
                <td align ="left"><label>Username</label></td>
                <td align ="left"><input type="text" name="username" value="<?php //echo $username; ?>"></td>
              </tr>
              <tr>
                <td align="left"><label>User Email</label></td>
                <td><input type="email" name="emailid" value="<?php //echo $emailid; ?>"></td>
              </tr>
              <tr>
                <td style="position:relative; left:-5px; top:2px;"><label>User Type</label></td>
                <td><input type = "text" name="usertype"value="<?php //echo $usertype; ?>">
                </td>
              </tr>
              <tr>
                <td style="position:relative; left:3px; top:2px;"><label>Description</label></td>
                <td><input type = "text" name="description"value="">
                </td>
              </tr>
              <tr>
                <td style="position:relative; left:-12px; top:2px;"><label>Amount</label></td>
                <td><input type = "text" name="amount"value="">
                </td>
              </tr>
              <tr>
                <td style="position:relative; left:-15px; top:2px;"><label>Status</label></td>
                <td><input type = "text" name="status"value="">
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

