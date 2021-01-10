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
            

        </style>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
             <link rel="stylesheet" href="../assets/css/seller/dash.css">

            <title>View_Order</title>
        <style>
             .button1 {
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
            
            .button2 {
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
        </style>

</head>
<body>
    <div class="seller-dashboard">
        <?php include('dash-include/view_order_nav.php'); ?>
        <div class="content">
            <div class="container">
                <a href="view-order" class="card" id="card1" style="display: block;">
                 <i class="fas fa-sort-amount-up-alt"></i>
                    <div class="container">
                        <h4><b>Orders</br>3</b ></h4>
                    </div>
                </a>
                <a href="view-food-item" class="card" id="card2" style="display: block;">
                    <i class="fas fa-cloud-meatball"></i>
                    <div class=" container">
                        <h4><b>Food Items</br></b></h4>
                    </div>
                 </a>
                <a href="order-history" class="card" id="card3" style="display: block;">
                    <i class="fas fa-history"></i>
                    <div class="container">
                        <h4><b>Order Histroy</br></b></h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="content">
        <table>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Contact Number</th>
                <th>Food</th>
                <th>Quantity</th>
                <th>Delivery Type</th>
                <th>Price(Food+Delivery)</th>
                <th>Payment Type</th>
                <th>Assign a Driver</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Mr.Nishantha</td>
                <td>077-1234567</td>
                <td>Egg fried rice</td>
                <td>1</td>
                <td>Take away</td>
                <td>350.00+0=350.00</td>
                <td>Cash</td>
                <td><button type="button" class="button">-</button></td>
                <td><button type="button" class="button1">Accept</button><button type="button" class="button2">Reject</button> </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Mrs.Perera</td>
                <td>077-7654321</td>
                <td>BURGER</td>
                <td>2</td>
                <td>Dine-in</td>
                <td>300.00+0=300.00</td>
                <td>Card-Payment</td>
                <td><button type="button" class="button">-</button></td>
                <td><button type="button" class="button1">Accept</button><button type="button" class="button2">Reject</button> </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Mr.Kuruwita</td>
                <td>077-9637539</td>
                <td>Chicken fried rice</td>
                <td>1</td>
                <td>Deliver</td>
                <td>350.00+50.00=400.00</td>
                <td>Cash on Delivery</td>
                <td><button type="button" class="button">ASSIGN</button></td>
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
                <td></td>
                <td><button type="button" class="button">Update</button></td>
            </tr>

            </table>
    </div> 
 
</body>
</html>