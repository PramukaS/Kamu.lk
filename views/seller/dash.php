<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/seller/dash.css">

    <title>Seller Dashboardr</title>
</head>
<body>
    <div class="seller-dashboard">
        <?php include('dash-include/nav.php'); ?>
        <div class="content">
            <div class="container">
                <a href="dash-include/view-order" class="card" id="card1" style="display: block;">
                 <i class="fas fa-sort-amount-up-alt"></i>
                    <div class="container">
                        <h4><b> Orders</br>3</b ></h4>
                    </div>
                </a>
                <a href="dash-include/view-food-item" class="card" id="card2" style="display: block;">
                    <i class="fas fa-cloud-meatball"></i>
                    <div class=" container">
                        <h4><b>Food Items</br>12</b></h4>
                    </div>
                 </a>
                <a href="dash-include/order-history" class="card" id="card3" style="display: block;">
                    <i class="fas fa-history"></i>
                    <div class="container">
                        <h4><b>Order Histroy</br>22</b></h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
 </body>
</html>
