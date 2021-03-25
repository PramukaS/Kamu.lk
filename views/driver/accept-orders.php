<!DOCTYPE html>
<html>
<head>

        <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 75%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
        .button {
            background-color: black;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            }
            .button1 {
            background-color: rgb(88, 251, 7);
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            }
            
            .button2 {
            background-color: rgb(121, 125, 119);
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            }
            

        </style>




    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/driver/dash.css">
    <title>Order Inbox/Accept Orders</title>
</head>
<body>
    <div class="driver-dashboard">
        <?php include('dash-include/accept_orders_nav.php'); ?>
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
                
    <table id="dfs">
                <tr>
                    <th>Order Id</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Address</th>
                    <th>Telephone</th>
                </tr>
                <?php foreach ($data as $item) { ?>
                    <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['customer_name'] ?></td>
                        <td><?php echo $item['ddate'] ?></td>
                        <td><?php echo $item['address'] ?></td>
                        <td><?php echo $item['tele'] ?></td>
                        
                    </tr>
                <?php }

                ?>
                <tr>
                    <td></td>
                    <td></td>
                    
                    <td><a href="add-food-item"><button type="button" class="button">Add Food Items</button></a></td>
                </tr>

            </table>
    </div>    
</body>
</html>
