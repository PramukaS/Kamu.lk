<!DOCTYPE html>
<html>

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/seller/dash.css">

    <title>View Food Items</title>
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

        #fooditems td,
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

        .button {
            border-radius: 10%;
            width: 50px;
            padding-top: 12px;
            border-collapse: collapse;
            padding-bottom: 12px;
            text-align: center;
            background-color: black;
            color: white;

        }

        .button1 {
            padding-top: 12px;
            border-collapse: collapse;
            padding-bottom: 12px;
            text-align: center;
            background-color: black;
            color: white;

        }
        .button2 {
            border-radius: 10%;
            width: 125px;
            padding-top: 12px;
            border-collapse: collapse;
            padding-bottom: 12px;
            text-align: center;
            background-color: black;
            color: white;

        }
    </style>
</head>

<body>
    <div class="seller-dashboard">
        <?php include('dash-include/view_food_item_nav.php'); ?>
        <div class="content">
            <div class="container">
                <a href="view-order" class="card" id="card1" style="display: block;">
                    <i class="fas fa-sort-amount-up-alt"></i>
                    <div class="container">
                        <h4><b>Orders</br><?php echo $count['count(*)'] ?></b></h4>
                    </div>
                </a>
                <a href="view-food-item" class="card" id="card2" style="display: block;">
                    <i class="fas fa-cloud-meatball"></i>
                    <div class=" container">
                        <h4><b>Food Items</br></b></h4>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="content">
        <div table>

            <table id="fooditems">
                <tr>
                    <th>Item ID</th>
                    <th>Item Name</th>
                    <!-- <th>Restaurant ID</th> -->
                    <th >Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <!-- <th>Image</th> -->
                </tr>
                <?php foreach ($data as $item) { ?>
                    <tr>
                      <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['item_name'] ?></td>
                        <td width= 500px><?php echo $item['description'] ?></td>
                        <td><?php echo "Rs. ", $item['price'] ?></td>

                        <td><img width="50px" height="50px" src="<?php echo "../" . $item['image'] ?>" /></td>
                        <td> <a href="edit-food-item?id=<?= $item['id'] ?>"><button type="button" class="button">Edit</button></a></td>
                    </tr>
                <?php }

                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan="2"><a href="add-food-item"><button type="button" class="button2">Add Food Items</button></a></td>
                </tr>

            </table>
        </div>
    </div>
</body>

</html>