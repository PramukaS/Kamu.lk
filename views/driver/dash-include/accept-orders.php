



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
            background-color: blue;
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
    <link rel="stylesheet" href="../css/dash.css">
    <title>Order Inbox/Accept Orders</title>
</head>
<body>
    <div class="driver-dashboard">
        <?php include('nav/accept_orders_nav.php'); ?>
        <div class="content">
            <div class="container">
                <a href="accept_orders.php" class="card" id="card1" style="display: block;">
                    <i class="fas fa-inbox"></i>
                    <div class="container">
                        <h4><b>Accept Orders</br>3</b ></h4>
                    </div>
                </a>
                <a href="delivery_history.php" class="card" id="card2" style="display: block;">
                    <i class="fas fa-list-alt"></i>
                    <div class=" container">
                        <h4><b>Delivery History</br></b></h4>
                    </div>
                 </a>
                <a href="earnings.php" class="card" id="card3" style="display: block;">
                    <i class="fas fa-money-check-alt"></i>
                    <div class="container">
                        <h4><b>Earnings</br>350.00</b></h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="content">  
                
    <table>
            <tr>
                <th>Restaurant Name</th>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Customer Contact</th>
                <th>Customer Location</th>
                <th>Restaurant Location</th>
                <th>Payment Type</th>
                <th>Price(Food+Delivery)</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>Mathara bath kade</td>
                <td>12</td>
                <td>Mr.Nishantha</td>
                <td>077-1234567</td>
                <td><i><u>Map URL</i></u></td>
                <td><i><u>Map URL</i></u></td>
                <td>Cash-On Delivery</td>
                <td>350.00</td>
                <td><button type="button" class="button1">Accept</button><button type="button" class="button2">Reject</button> </td>
            </tr>
            <tr>
                <td>Nelum Hotel</td>
                <td>145</td>
                <td>Mr.Kasun</td>
                <td>077-1593537</td>
                <td><i><u>Map URL</i></u></td>
                <td><i><u>Map URL</i></u></td>
                <td>Card-Payment</td>
                <td>1450.00</td>
                <td><button type="button" class="button1">Accept</button><button type="button" class="button2">Reject</button> </td>
            </tr>
            <tr>
                <td>Wasana Restaurant</td>
                <td>15</td>
                <td>Mr.Kumara</td>
                <td>071-1512347</td>
                <td><i><u>Map URL</i></u></td>
                <td><i><u>Map URL</i></u></td>
                <td>Card-Payment</td>
                <td>750.00</td>
                <td><button type="button" class="button1">Accept</button><button type="button" class="button2">Reject</button> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="delivery_history.php"><button type="button" class="button">Order History</button></a></td>
            </tr>

            </table>
    </div>    


    <?php include('foot.php'); ?>
</body>
</html>
