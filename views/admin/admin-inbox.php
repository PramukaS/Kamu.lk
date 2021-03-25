<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Inbox</title>
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
          <table id="mailnav" class="table" border="0" style="position:relative; left:-45px; top:2px; background-color: #fff; color: #000;  ">
            <tr> 
              <td colspan="2"><button style="border-radius: 10px; padding:6px 8px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>&#8287 &#8287 &#8287 Compose</button></td>
            </tr>
            
            <tr><th colspan="2" style="position:relative; left:0px; top:2px;"><i class="fa fa-inbox"></i>&#8287 &#8287 &#8287 Recieved</th></tr>
             <tr> <th colspan="2" style="position:relative; left:-12px; top:2px;"><i class="fa fa-envelope-o"></i>&#8287 &#8287 &#8287 Send</th></tr>
              <tr><th colspan="2" style="position:relative; left: 2px; top:2px;"><i class="fa fa-exclamation-circle"></i>&#8287 &#8287 &#8287 Important</th></tr>
              <tr><th colspan="2" style="position:relative; left: -11px; top:2px;"><i class="fa fa-trash-o "></i>&#8287 &#8287 &#8287 Trash</th></tr>

              <tr><th colspan="2" style="position:relative; left:-7px; top:2px;"><i class="fa fa-star"></i>&#8287 &#8287 &#8287 Starred</th></tr>
          </table>
        </div>
          <div class="tableview">
           <table id="mailchart" class="table" border="0" style="position:relative; left:175px; top:-200px;">
            <tr><th></th></tr>
            <tr style="background-color:#fff;"> 
              <td colspan="8"><h2 style="color: #000;">Inbox</h2></td>
            </tr>
            
            <tr>
              <td><input type="checkbox" name="mark"></td>
              <td>&#8287 &#8287<i class="fa fa-star"></i></td>
              <td>Pathmika</td>
              <td>Hi, There I've to convey...</td>
              <td>15th Nov</td>
              <td><i class="fa fa-trash-o "></i>&#8287 &#8287</td>
              <td><i class="fa fa-envelope-open"></i>&#8287 &#8287</td>
              <td><i class="fa fa-mail-reply"></i>&#8287 &#8287</td>
            </tr>
             <tr>
              <td><input type="checkbox" name="mark"></td>
              <td>&#8287 &#8287<i class="fa fa-star"></i></td>
              <td>Pramuka</td>
              <td>Hey I've finished the task..</td>
              <td>14th Nov</td>
              <td><i class="fa fa-trash-o "></i>&#8287 &#8287</td>
              <td><i class="fa fa-envelope-open"></i>&#8287 &#8287</td>
              <td><i class="fa fa-mail-reply"></i>&#8287 &#8287</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="mark"></td>
              <td>&#8287 &#8287<i class="fa fa-star"></i></td>
              <td>Shifna</td>
              <td>Send me those restaurant docs...</td>
              <td>12th Nov</td>
              <td><i class="fa fa-trash-o "></i>&#8287 &#8287</td>
              <td><i class="fa fa-envelope-open"></i>&#8287 &#8287</td>
              <td><i class="fa fa-mail-reply"></i>&#8287 &#8287</td>

            </tr>
            <tr>
              <td><input type="checkbox" name="mark"></td>
              <td>&#8287 &#8287<i class="fa fa-star"></i></td>
              <td>Supervisor</td>
              <td>Did You all finish the tasks...</td>
              <td>08th Nov</td>
              <td><i class="fa fa-trash-o "></i>&#8287 &#8287</td>
              <td><i class="fa fa-envelope-open"></i>&#8287 &#8287</td>
              <td><i class="fa fa-mail-reply"></i>&#8287 &#8287</td>

            </tr>
            <tr>
              <td><input type="checkbox" name="mark"></td>
              <td>&#8287 &#8287<i class="fa fa-star"></i></td>
              <td>Ahshaf Nisthar</td>
              <td>I've trouble while sign in...</td>
              <td>3rd Nov</td>
              <td><i class="fa fa-trash-o "></i>&#8287 &#8287</td>
              <td><i class="fa fa-envelope-open"></i>&#8287 &#8287</td>
              <td><i class="fa fa-mail-reply"></i>&#8287 &#8287</td>

            </tr>
            <tr>
              <td><input type="checkbox" name="mark"></td>
              <td>&#8287 &#8287<i class="fa fa-star"></i></td>
              <td>Pramuka</td>
              <td>Did you clear the pending requests</td>
              <td>24th Oct</td>
              <td><i class="fa fa-trash-o "></i>&#8287 &#8287</td>
              <td><i class="fa fa-envelope-open"></i>&#8287 &#8287</td>
              <td><i class="fa fa-mail-reply"></i>&#8287 &#8287</td>

            </tr>
            <tr>
              <td><input type="checkbox" name="mark"></td>
              <td>&#8287 &#8287<i class="fa fa-star"></i></td>
              <td>Pathmika</td>
              <td>do we able do that within this...</td>
              <td>14th Oct</td>
              <td><i class="fa fa-trash-o "></i>&#8287 &#8287</td>
              <td><i class="fa fa-envelope-open"></i>&#8287 &#8287</td>
              <td><i class="fa fa-mail-reply"></i>&#8287 &#8287</td>

            </tr>
          </table>
          </div>
          
            
      </section>
      <!-- /wrapper -->
    </section>
</body>

</html>

