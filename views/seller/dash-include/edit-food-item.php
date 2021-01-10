


<!DOCTYPE html>
<html>
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/dash.css">

    <title>Edit Food Items</title>


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
                background-color: #ac3632;
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
                background-color: #ac3632;
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
        <?php include('nav/edit_food_item_nav.php'); ?>
        <div class="content">
            <div class="container">
                <a href="view_order.php" class="card" id="card1" style="display: block;">
                 <i class="fas fa-sort-amount-up-alt"></i>
                    <div class="container">
                        <h4><b>Orders</br>3</b ></h4>
                    </div>
                </a>
                <a href="view_food_item.php" class="card" id="card2" style="display: block;">
                    <i class="fas fa-cloud-meatball"></i>
                    <div class=" container">
                        <h4><b>Food Items</br></b></h4>
                    </div>
                 </a>
                <a href="order_history.php" class="card" id="card3" style="display: block;">
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
                <th>Item ID</th>
                <th>Item Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Options</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Grilled Chicken Sandwich</td>
                <td>370 calories, 34 grams protein, 10 grams fat. They keep the fat low with a smokey honey mustard dressing and a healthy spring mix of greens.</td>
                <td>300.00</td>
                <td>5fb4c35dab756.jpg</td>
                <td><button type="button" class="button">Edit</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Fried Rice</td>
                <td>Shrimp fried rice, 1 cup Calories: 321 •Carbs: 42g •Fat: 12g •Protein: 11g</td>
                <td>450.00</td>
                <td>5fb4c41636095.jpg</td>
                <td><button type="button" class="button">Edit</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Pork Fried Rice</td>
                <td>Pork Fried Rice, 1 cup Calories: 335 •Carbs: 42g •Fat: 13g •Protein: 12g</td>
                <td>550.00</td>
                <td>5fb4c45656557.jpg</td>
                <td><button type="button" class="button">Edit</button></td>
            </tr>
            
            <tr>
                <td>4</td>
                <td>Halapa</td>
                <td>Calories 120</td>
                <td>60.00</td>
                <td>5fb4c45656589.jpg</td>
                <td><button type="button" class="button1">Edit</button></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td> <a href="view_food_item.php"><button type="button" class="button">Update</button></a></td>
            </tr>

            </table>
    </div> 

    <?php include('foot.php'); ?>   
</body>
</html>