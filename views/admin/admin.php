<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Dashboard</title>
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
                <!-- **************************** User Stats *************************************************** -->
               <table class="newuserstats" class="table" border="0" style="background-color: #004953; position:relative; top:-10px;">
               <tr> 
                 <td colspan="10">
                 <h2>New User Signups</h2>
                </td>
              </tr>
              <tr>
                <td colspan="2" rowspan="4">
                  <h3 style="color: #fff;"> Registerd User</h3>
                  <br>
                 <i class="fa fa-user fa-3x"></i><br>
                 <br><h5><?php echo $reguserCount;?></h5><br>
                </td>

                <td colspan="2" rowspan="4">
                  <h3 style="color: #fff;"> Admin</h3>
                  <br>
                 <i class="fa fa-user-secret fa-3x"></i><br>
                 <br><h5><?php echo $adminCount;?></h5><br>
                </td>
                
                <td colspan="2" rowspan="4">
                 <h3 style="color: #fff;">&#8287 &#8287  &#8287 Nutritionist  &#8287 &#8287 &#8287</h3>
                  <br>
                  <i class="fa fa-heart fa-3x"></i><br>
                  <br><b><h5><?php echo $nutritionistCount;?></h5><br>
                </td>

                <td colspan="2" rowspan="4">
                 <h3 style="color: #fff;">&#8287 &#8287 &#8287 Seller  &#8287 &#8287 &#8287</h3>
                  <br>
                  <i class="fa fa-shopping-bag fa-3x"></i><br>
                  <br><b><h5><?php echo $sellerCount;?> </h5><br>
                </td>

                <td colspan="2" rowspan="4">
                 <h3 style="color: #fff;">Delivery Person</h3>
                  <br>
                  <i class="fa fa-bicycle fa-3x"></i><br>
                 <br><b><h5><?php echo $driverCount;?></h5><br>
                </td>
              </tr>
              </table>
            </div>
            <!-- **************************** Delivery Stats *************************************************** -->
            <div class="tableview">
               <table class="newuserstats" class="table" border="0" style="background-color: #009E60; position:relative; top:-30px;">
               <tr> 
                 <td colspan="8">
                 <h2>Delivery Process</h2>
                </td>
              </tr>
              <tr>
                <td colspan="2" rowspan="4">
                  <h3 style="color: #fff;">&#8287 &#8287 Delivered  &#8287 &#8287 </h3>
                  <br>
                  <i class="fa fa-truck fa-3x"></i>&#8287 &#8287<i class="fa fa-check-circle-o fa-3x"></i><br>
                 <br><h5><?php echo $deliveredOrder;?></h5><br>
                </td>

                <td colspan="2" rowspan="4">
                 <h3 style="color: #fff;">&#8287 &#8287  &#8287 On Process </h3>
                  <br>
                  <i class="fa fa-truck fa-3x"></i>&#8287 &#8287<i class="fa fa-clock-o fa-3x"></i><br>
                  <br><h5><?php echo $processOrder;?></h5><br>
                </td>

                <td colspan="2" rowspan="4">
                 <h3 style="color: #fff;"> &#8287 &#8287 Canceled &#8287 &#8287 &#8287</h3>
                  <br>
                  <i class="fa fa-truck fa-3x"></i>&#8287 &#8287<i class="fa fa-thumbs-o-down fa-3x"></i><br>
                  <br><b><h5></i> <?php echo $cancelledOrder;?> </h5><br>
                </td>

                <td colspan="2" rowspan="4">
                 <h3 style="color: #fff;">Rejected  &#8287 &#8287  &#8287 &#8287</h3>
                  <br>
                  <i class="fa fa-truck fa-3x"></i>&#8287 &#8287<i class="fa fa-times-circle-o fa-3x"></i><br>
                 <br><b><h5><?php echo $rejectedOrder;?></h5><br>
                </td>
              </tr>
              </table>
            </div>
            <!-- **************************** Consultancy Stats *************************************************** -->
            <div class="tableview">
               <table class="newuserstats" class="table" border="0" style="background-color: #004953; position:relative; top:-50px;">
               <tr> 
                 <td colspan="8">
                 <h2>Consultancy Process</h2>
                </td>
              </tr>
              <tr>
                <td colspan="2" rowspan="4">
                  <h3 style="color: #fff;">&#8287 &#8287 Checked  &#8287 &#8287 </h3>
                  <br>
                  <i class="fa fa-heartbeat fa-3x"></i>&#8287 &#8287<i class="fa fa-check-circle-o fa-3x"></i><br>
                 <br><h5><?php echo $checkedRequest;?></h5><br>
                </td>
                <td colspan="2" rowspan="4">
                 <h3 style="color: #fff;">&#8287 &#8287  &#8287 On Process </h3>
                  <br>
                  <i class="fa fa-heartbeat fa-3x"></i>&#8287 &#8287<i class="fa fa-clock-o fa-3x"></i><br>
                  <br><h5><?php echo $processRequest;?></h5><br>
                </td>
                <td colspan="2" rowspan="4">
                 <h3 style="color: #fff;"> &#8287 &#8287 Canceled &#8287 &#8287 &#8287</h3>
                  <br>
                  <i class="fa fa-heartbeat fa-3x"></i>&#8287 &#8287<i class="fa fa-thumbs-o-down fa-3x"></i><br>
                  <br><b><h5><?php echo $cancelledRequest;?></h5><br>
                </td>
                <td colspan="2" rowspan="4">
                 <h3 style="color: #fff;">Rejected  &#8287 &#8287  &#8287 &#8287</h3>
                  <br>
                  <i class="fa fa-heartbeat fa-3x"></i>&#8287 &#8287<i class="fa fa-times-circle-o fa-3x"></i><br>
                 <br><b><h5><?php echo $rejectedRequest;?></h5><br>
                </td>
              </tr>
              </table>
            </div>
  
		   <!-- <h2 style="color: black; margin-top: 10px;">Social Media Stats</h2>
		    <div class="tableview">
        		<table class="mediastats" class="table" border="0" style="background-color: #3b5998;">
		            <tr> 
		            	<td colspan="2" rowspan="5">
		                  <a href="https://www.facebook.com/"><h3 style="color: #fff;">Facebook</h3></a>
		                  <br>
		                  <i class="fa fa-facebook fa-3x"></i><br>
		                  <h3>Page Likes<h3><br><b><h5><i class="fa fa-thumbs-o-up"></i> 11,326</h5><br>
		                </td>
		            </tr>
              	</table>
        </div>
            <div class="tableview">
               <table class="mediastats" class="table" border="0" style="background-color: #00acee;">
	               <tr> 
		                <td colspan="2" rowspan="5">
		                  <a href="https://www.twitter.com/"><h3 style="color: #fff;">Twitter</h3></a>
		                  <br>
		                  <i class="fa fa-twitter fa-3x"></i><br>
		                  <h3>Followers<h3><br><b><h5><i class="fa fa-users"></i> 7,238</h5><br>
		                </td>
	              </tr>
              </table>
            </div>
            <div class="tableview">
               <table class="mediastats" class="table" border="0" style=" background-image: linear-gradient(to right, #8134AF , #DD2A7B);">
               <tr> 
                <td colspan="2" rowspan="5">
                  <a href="https://www.instagram.com/"><h3 style="color: #fff;">Instagram<h3></a>
                  <br><i class="fa fa-instagram fa-3x"></i><br>
                  <h3>Followers</h3>
                  <br><b><h5><i class="fa fa-heart"></i> 3,638</h5><br>
                </td>
              </tr>
              </table>
            </div>
        <div class="kamucalendar">
          <iframe src="https://calendar.google.com/calendar/embed?src=h0rvvlhv436fso337b45180ons%40group.calendar.google.com&ctz=Asia%2FColombo" style="border:0" width="1000" height="570" border="0" scrolling="no";></iframe>
        </div> -->

      </section>
    </section>
    <script>
          document.getElementById("reguser").innerHTML = <?php echo $rowcount;?>;
    </script>

  </body>


</html>

