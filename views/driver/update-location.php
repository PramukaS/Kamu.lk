<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/driver/dash.css">

    <title>Update Location</title>
    <style>
      <style>
        
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 75%;
            }

        #fooditems {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 75%;
        }

        #fooditems tr td c{
            margin-left:10%;
            float:left;
        }
        #fooditems tr td v{
            margin-left:5%;
            float:left;
        }
        #fooditems th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #fooditems tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #fooditems tr:hover {
            background-color: #ddd;
        }

        #fooditems th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: black;
            color: white;
        }
        .button{
            padding-top: 12px;
            padding-left: 30%px;
            border-collapse: collapse;
            width:250px;
            font-family:courier;
            padding-bottom: 12px;
            text-align: center;
            background-color: black;
            color: white;

        }
    </style>
    </style>
</head>
<body>
    <div class="driver-dashboard">
        <?php include('dash-include/update_location_nav.php'); ?>
        <div class="content">
            <div class="container">
                <a href="accept-orders" class="card" id="card1" style="display: block;">
                    <i class="fas fa-inbox"></i>
                    <div class="container">
                        <h4><b>Accept Orders</br>3</b ></h4>
                    </div>
                </a>
                <a href="delivery-history" class="card" id="card2" style="display: block;">
                    <i class="fas fa-list-alt"></i>
                    <div class=" container">
                        <h4><b>Delivery History</br></b></h4>
                    </div>
                 </a>
                <a href="earnings" class="card" id="card3" style="display: block;">
                    <i class="fas fa-money-check-alt"></i>
                    <div class="container">
                        <h4><b>Earnings</br>350.00</b></h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
    <div class="content">  
                <div table>

                <table id="fooditems">
                    <tr>
                        <td><c><div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20colombo&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href=""></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></c></td>
                        <td><b><label>Enter Location URL:</label></b>
                        <input type="text" id="fname" name="fname"><br><br>
                        <c><a href="#"><button type="button" class="button"><b>Update My location</b></button></a><c></td>
                    </tr>
                
                </table>
                </div>
                </div>
                    </div>    
</body>
</html>
