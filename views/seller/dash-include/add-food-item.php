<!DOCTYPE html>
<html>

<?php
include_once '../../connect.php';


if(isset($_POST['submit']))           //if upload btn is pressed
{
	if(empty($_POST['d_name'])||empty($_POST['about'])||$_POST['price']==''||$_POST['res_name']=='')
		{	
	$error = 	'<div class="alert alert-danger alert-dismissible fade show">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>All fields Must be Fillup!</strong>
	</div>';
																
        }
        
	else
		{

                $fname = $_FILES['file']['name'];
                $temp = $_FILES['file']['tmp_name'];
                $fsize = $_FILES['file']['size'];
                $extension = explode('.',$fname);
                $extension = strtolower(end($extension));  
                $fnew = uniqid().'.'.$extension;
                $store = "Res_img/fooditem/".basename($fnew);   
                                // the path to store the upload image
                if($extension == 'jpg'||$extension == 'png'||$extension == 'gif' )
                        {        
                        if($fsize>=1000000)
                            {
                                $error = 	'<div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Max Image Size is 1024kb!</strong> Try different Image.
                                </div>';

                            }
                
                        else
                            {
                            $sql = "INSERT INTO fooditem(Res_id,FName,Description,price,img) VALUE('".$_POST['res_name']."','".$_POST['d_name']."','".$_POST['about']."','".$_POST['price']."','".$fnew."')";  // store the submited data ino the database :images
                            mysqli_query($con, $sql); 
                            move_uploaded_file($temp, $store);

                            if($mysqli_query=True){
                                echo "<script>alert('Successfully added!');
                                window.location.href='add_food_item.php';</script>";
                            }
                    
                            $success = 	'<div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Congrats!</strong> New Dish Added Successfully.
                            </div>';
                        
            
                            }
                        }
                        elseif($extension == '')
                            {
                            $error = '<div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>select image</strong>
                        </div>';
                            }
                            else
                            {
                            
                            $error = 	'<div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>invalid extension!</strong>png, jpg, Gif are accepted.
                            </div>';
						
					}               
	    }
}

?>


<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/dash.css">

    <title>Add Food Items</title>

    <style>     

        .contaier {
        float:left;
        width: 550px;
         margin-left: 280px;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 6px;
        }

        input[type=text], select, textarea {
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
            background-color: #ac3632;
            color: white;
            padding: 20px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            }

            input[type=submit]:hover {
            background-color: #45a049;
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
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
            }


        .button{
            float:left;
            padding-top: 20px;
            border-collapse: collapse;
            width:100px;
            margin-left: 80%;
            padding-bottom: 12px;
            text-align: center;
            background-color: #ac3632;
            color: white;

        }
        .btn-success{
            width:95px;
            float:left;
            padding-top: 20px;
            border-collapse: collapse;
            padding-bottom: 20px;
            text-align: center;
            background-color: #ac3632;
            color: white;

        }.btn-inverse{
            width:90px;
            padding-top: 20px;
            border-collapse: collapse;
            padding-bottom: 12px;
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
                <?php include('nav/add_food_item_nav.php'); ?>
                <div class="content">
                    <div class="container">
                        <a href="view_order.php" class="card" id="card1" style="display: block;">
                            <i class="fas fa-sort-amount-up-alt"></i>
                            <div class="container">
                                <h4><b>Orders</br>3</b></h4>
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
            
                            
 
                            <div class="contaier">
                            <h2 style="text-align:center;background-color:#ac3632;color:white;font-family:courier;">Add Your Food</h2>
                            
                            <form action="add_food_item.php" method='post'  enctype="multipart/form-data"> 
                                <div class="row">

                                 <div class="col-25">
                                <label >Food Name</label>
                                </div>                                   
                                <div class="col-75">
                                <input type="text" autocomplete="off" name="d_name" class="form-control" placeholder="Enter Item Name">
                                </div> 
                                 </div>
                                        <div class="row">
                                        <div class="col-25">
                                        <label >Description</label>
                                        </div>
                                        <div class="col-75">
                                        <input type="text" autocomplete="off" name="about" class="form-control form-control-danger" placeholder="Description">
                                        </div>
                                        </div>
                                        
                                        <div class="row">
                                        <div class="col-25">
                                        <label >Price </label>
                                        </div>
                                        <div class="col-75">
                                        <input type="text" name="price" class="form-control" placeholder="LKR ">
                                        </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-25">
                                        <label >Image</label>
                                        </div>
                                        <div class="col-75">
                                        <input type="file" name="file"  id="lastName" class="form-control form-control-danger" placeholder="12n">
                                        </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-25">
                                        <label >Your Restaurant</label>
                                        </div>
                                        <div class="col-75">
                                        <select name="res_name" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                        <option>--Select Restaurant--</option>                                                        
                                        <?php
                                        require_once('../../connect.php');
                                        $query = $con->query("SELECT * FROM seller");

                                        while ($result = $query->fetch_assoc()) {
                                        echo "<option value='" . $result['res_id'] . "'>" . $result['storename'] . "</option>";
                                        //$result['id'] <= id from the resturant table
                                        //$result['resturant_name'] <= resturant name from the resturant table
                                        }

                                        $con->close();
                                        ?> 

                                        </select><br>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-715">
                                        <input type="submit" name="submit" class="btn-success" value="Add"> 
                                        
                                        <div class="col-716">
                                        <a href="add_food_item.php" class="btn-inverse"><button type="reset" value="Reset"  class="btn-inverse">Cancel</button></a><br> 
                                        </div>
                                        </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-715">
                                        <a href="view_food_item.php"><button type="button" class="button">View Items</button></a>
                                        </div>
                                        </div>
                                    </form>
                            
                                    </div>
                    

    <?php include('foot.php'); ?>
</body>

</html>