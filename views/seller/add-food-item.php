<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/seller/dash.css">

    <title>Add Food Items</title>

    <style>
        .contaier {
            float: left;
            width: 550px;
            margin-left: 280px;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 6px;
        }

        input[type=text],
        select,
        textarea {
            width: 60%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: black;
            color: white;
            padding: 20px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: grey;
        }

        .col-25 {
            float: left;
            width: 50%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 150%;
            margin-top: 6px;
        }

        .col-715 {
            float: left;
            width: 90%;
            margin-top: 25px;
        }

        .col-716 {
            float: left;
            width: 80%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, 
            make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }


        .button {
            float: left;
            border-radius: 4px;
            border: none;
            width: 100px;
            margin-left: 80%;
            padding: 10px 20px 10px 20px;
            text-align: center;
            background-color: black;
            color: white;

        }

        .btn-success {
            width: 95px;
            float: left;
            text-align: center;
            background-color: black;
            color: white;
            padding: 10px 20px 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;

        }

        .btn-inverse {
            width: 90px;
            border: none;
            border-radius: 4px;
            padding: 10px 20px 10px 20px;
            text-align: center;
            background-color: black;
            color: white;

        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="seller-dashboard">
        <?php include('dash-include/add_food_item_nav.php'); ?>
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

    <div class="contaier">
        <h2 style="text-align:center;background-color:black;color:white;font-family:courier;">Add Your Food</h2>

        <form action="add-food-item" method='post' enctype="multipart/form-data">
            <div class="row">

                <div class="col-25">
                    <label>Food Name</label>
                </div>
                <div class="col-75">
                    <input type="text" autocomplete="off" name="foodName" class="form-control" placeholder="Enter Item Name">
                    <div><?= $_SESSION['menu_item']['item_name'] ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Description</label>
                </div>
                <div class="col-75">
                    <input type="text" autocomplete="off" name="description" class="form-control form-control-danger" placeholder="Description">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Price </label>
                </div>
                <div class="col-75">
                    <input type="text" name="price"  class="form-control" placeholder="LKR ">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Image</label>
                </div>
                <div class="col-75">
                    <input type="file" name="fileToUpload" id="lastName" class="form-control form-control-danger" placeholder="12n">
                </div>
            </div>

            
            <div class="row">
                <div class="col-715">
                    <input type="submit" name="submit" class="btn-success" value="Add">

                    <div class="col-716">
                        <a href="add-food-item" class="btn-inverse"><button type="reset" value="Reset" class="btn-inverse">Cancel</button></a><br>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-715">
                    <a href="view-food-item"><button type="button" class="button">View Items</button></a>
                </div>
            </div>
        </form>

    </div>
</body>

</html>