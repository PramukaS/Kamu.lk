<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Reports</title>
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
        <!-- <div class="row">
          <div class="col-lg-9 main-chart">
           
            <div class="border-head">
              <h3>USER VISITS</h3>
            </div>
            <div class="custom-bar-chart">
              <ul class="y-axis">
                <li><span>10.000</span></li>
                <li><span>8.000</span></li>
                <li><span>6.000</span></li>
                <li><span>4.000</span></li>
                <li><span>2.000</span></li>
                <li><span>0</span></li>
              </ul>
              <div class="bar">
                <div class="title">JAN</div>
                <div class="value tooltips" style= "height:35%" data-original-title="3.500" data-toggle="tooltip" data-placement="top">35%</div>
              </div>
              <div class="bar ">
                <div class="title">FEB</div>
                <div class="value tooltips" style= "height:60%" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
              </div>
              <div class="bar ">
                <div class="title">MAR</div>
                <div class="value tooltips" style= "height:20%" data-original-title="2.000" data-toggle="tooltip" data-placement="top">20%</div>
              </div>
              <div class="bar ">
                <div class="title">APR</div>
                <div class="value tooltips" style= "height:85%" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
              </div>
              <div class="bar">
                <div class="title">MAY</div>
                <div class="value tooltips" style= "height:72%" data-original-title="7.200" data-toggle="tooltip" data-placement="top">72%</div>
              </div>
              <div class="bar ">
                <div class="title">JUN</div>
                <div class="value tooltips" style= "height:85%" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
              </div>
              <div class="bar">
                <div class="title">JUL</div>
                <div class="value tooltips" style= "height:65%" data-original-title="6.500" data-toggle="tooltip" data-placement="top">65%</div>
              </div>
            </div>
          </div>
        </div> -->
            <div class="tableview">
               <table class="sitestats" class="table" border="0" style="background-color: #032959;">
               <tr> 
                <td colspan="2" rowspan="5">
                  <h3>Users</h><br>
                  <br>
                  <i class="fa fa-user fa-3x"></i><br>
                  <h3>Total System Users<h3><br><b><h5><i class="fa fa-user"></i> 16,238</h5><br>
                </td>
              </tr>
              </table>
            </div>
            <div class="tableview">
               <table class="sitestats" class="table" border="0" style="background-color: #032959;">
               <tr> 
                <td colspan="2" rowspan="5">
                  <h3>Revenue</h><br>
                  <br>
                  <i class="fa fa-money fa-3x"></i><br>
                  <h3>Total Delivery Revenue <h3><br><b><h5><i class="fa fa-money"></i> 16,238</h5><br>
                </td>
              </tr>
              </table>
            </div>
            <div class="tableview">
               <table class="sitestats" class="table" border="0" style="background-color: #454C4E;">
               <tr> 
                <td colspan="2" rowspan="5">
                  <h3>Orders<h3>
                  <br><i class="fa fa-shopping-cart fa-3x"></i><br><br>
                  <p>Total Order Recieved</p>
                  <br><b><h5><i class="fa fa-trophy"></i> 7,638</h5><br>
                </td>
              </tr>
              </table>
            </div>
            <div class="tableview">
               <table class="sitestats" class="table" border="0" style="background-color: #454C4E;">
               <tr> 
                <td colspan="2" rowspan="5">
                  <h3>Diet Plans<h3>
                  <br><i class="fa fa-heartbeat fa-3x"></i><br><br>
                  <p>Total Diet Requests Recieved</p>
                  <br><b><h5><i class="fa fa-trophy"></i> 7,638</h5><br>
                </td>
              </tr>
              </table>
            </div>
            <div class="tableview">
             <table class="userstats" class="table" border="0" style="background-color: #337ab7;">
             <tr> 
              <td colspan="2" rowspan="5">
                <br><i class="fa fa-user fa-3x"></i><br>
                <h3>Registered User<h3><br><b><i class="fa fa-database" aria-hidden="true"></i>&#8287 &#8287 <?php echo $reguserCount;?></b>
              </td>
            </tr>
          </table>
        </div>
        <div class="tableview">
             <table class="userstats" class="table" border="0" style="background-color: #5cb85c">
             <tr> 
              <td colspan="2" rowspan="5">
                <br><i class="fa fa-shopping-bag fa-3x"></i><br>
                <h3>Sellers<h3><br><b><i class="fa fa-database" aria-hidden="true"></i>&#8287 &#8287 <?php echo $sellerCount;?> </b>
              </td>
            </tr>
          </table>
        </div>
        <div class="tableview">
             <table class="userstats" class="table" border="0" style="background-color: #FFC300 ">
             <tr> 
              <td colspan="2" rowspan="5">
                <br><i class="fa fa-truck fa-3x"></i><br>
                <h3>Delivery Person<h3><br><b><i class="fa fa-database" aria-hidden="true"></i>&#8287 &#8287 <?php echo $driverCount;?></b>
              </td>
            </tr>
          </table>
        </div>
        <div class="tableview">
             <table class="userstats" class="table" border="0" style="background-color: #FF5733"> 
             <tr> 
              <td colspan="2" rowspan="5">
                <br><i class="fa fa-heart fa-3x"></i><br>
                <h3>Nutritionist<h3><br><b><i class="fa fa-database" aria-hidden="true"></i>&#8287 &#8287 <?php echo $nutritionistCount;?></b>
              </td>
            </tr>
          </table>
        </div>
            
          </div>
      </section>
    </section>

</body>

</html>

