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
        </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/seller/dash.css">

    <title>Edit restaurant Details</title>
    <style>

        #myDIV {
            width: 100%;
            padding: 40px 40px;
            text-align: left;
            background-color: rgb(226, 230, 231);
            margin:10px;
        }

        #myDIV1 {
            width: 100%;
            padding: 40px 40px;
            text-align: left;
            background-color: rgb(226, 230, 231);
            margin:10px;
        }

        #myDIV2 {
            width: 100%;
            padding: 40px 40px;
            text-align: left;
            background-color: rgb(226, 230, 231);
            margin:10px;
        }
        /* food form css      */
        .food-form .form {
            align-self: center;
            width:50%;
            height:60%;
            background:#ffffff;
            border-radius:8px;
            padding:25px 35px;
            display: inline-block;
            margin-left: 150px;
        }
        .food-form h2 {
            text-align: left;
            color:#000000;
            text-transform: capitalize;
        }

        .food-form label{
            font-weight: bold;
        }

        .food-form input {
            width:100%;
            padding:15px;
            background:none;
            outline:none;
            resize:none;
            border:0;
            font-family:'Montserrat',sans-serif;
            border-bottom:2px solid #000000;
            
        }

        .food-form .button {
            margin: 40%,20%,20%,40%;
            border-radius: 15px;
            background-color: rgb(0, 0, 0);
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            font-size: 20px;
            margin: 4px 2px;
        }

        .food-form .button:hover {
                background-color: rgb(255, 255, 255);
                color: rgb(0, 0, 0);
        }

        /* form */

                    .form-container {
            width: 100%;
            background-color: #f2f2f2;
            padding: 40px;
            min-height: 80%;
            box-shadow: -10px 7px gray;
            border: 1px solid black;
            }

            .form-control {
                display: block;
                width: 100%;
                padding: .375rem .75rem;
                font-size: 1rem;
                line-height: 1.5;
                color: #495057;
                background-color:#fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                border-radius: .25rem;
                transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            }

            .w80 {
                width: 80%;
            }


            .w60 {
                width: 60%;
            }

            .w40 {
                width: 40%;
            }

            .form-group {
                margin-bottom: 1rem;
            }

            #sub-form .row {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
                grid-gap: 15px;
                align-items: center;
                /* display: flex;
                justify-content: space-between;
                align-items: center; */
            }


            .issue-note-form #sub-form .row {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
                grid-gap: 15px;
                align-items: center;
                /* display: flex;
                justify-content: space-between;
                align-items: center; */
            }
            button {
            background-color: black; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            }
        </style>




</head>
<body>
<div class="seller-dashboard">
        <?php include('dash-include/edit_restaurant_details_nav.php'); ?>
        <div class="content">
            <div class="container">
                <a href="view-order" class="card" id="card1" style="display: block;">
                 <i class="fas fa-sort-amount-up-alt"></i>
                    <div class="container">
                        <h4><b>Orders</br><?php echo $count['count(*)'] ?></b ></h4>
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
            <div class="food-form form-container">
                <br/>
                <h2 style="text-align:center"> Edit_Restaurant_Details </h2><br>
                <form class="form" action="" method="post">
                    <div class="form-group">
                        <img  src="../assets/images/seller/seller_icon.png" width="100px" style="float:right;" alt="user" width="50px"><br><br><br><br><br>
                    </div>
                    <div class="form-group">

                          <label>Seller ID</label><a onclick="myFunction1()" href="javascript:void(0);" style="float:right;"></a> 
                            <input class="form-control" type="text" step=0.1 name="name" size="50"
                                    value="" placeholder="759" disabled><br>
                        <label>Store Name</label><a onclick="myFunction()" href="javascript:void(0);" style="float:right;" value="1">Edit</a> 
                            <input id = "username" class="form-control" type="text" name="username" size="50"
                                value="" autocomplete="off" placeholder="Mathara bath kade " disabled><br>

                                <div id="myDIV"style="display:none;">
                                        <label>New Username</label>
                                        <input id = "hidden" class="form-control" type="text" name="username" size="50"
                                                value="" placeholder="Enter your New Username" required><br>
                                        <input class="button" type="submit" name='submit2' value="Submit" size="25">
                                </div>

                        <label>Store Location</label><a onclick="myFunction1()" href="javascript:void(0);" style="float:right;">Edit</a> 
                            <input class="form-control" type="password" name="password" size="3"
                                    value="" placeholder="42,kohuwala" disabled><br>

                                    <div id="myDIV1"style="display:none;">
                                        <label>New Password</label>
                                            <input id = "hidden" class="form-control" type="password" name="password" size="50"
                                                value="" placeholder="Enter your New Pssword" required><br>
                                        <label>Re enter Password</label>
                                            <input id = "hidden" class="form-control" type="password" name="password" size="50"
                                                value="" placeholder="Re Enter New Pssword" required><br>
                                        <input class="button" type="submit" name='submit2' value="Submit" size="25">
                                    </div>

                                <div id="myDIV"style="display:none;">
                                        <label>New Username</label>
                                        <input id = "hidden" class="form-control" type="text" name="username" size="50"
                                                value="" placeholder="Enter your New Username" disabled><br>
                                </div>


                        <label>Seller Name</label><a onclick="myFunction1()" href="javascript:void(0);" style="float:right;">Edit</a> 
                            <input class="form-control" type="text" step=0.1 name="name" size="50"
                                    value="" placeholder="Pathmika Weerarathna" disabled><br>
                        <label>Contact Number</label><a onclick="myFunction1()" href="javascript:void(0);" style="float:right;">Edit</a> 
                            <input class="form-control" type="number" name="cno" size="10"
                                    value="" placeholder="0773456467"disabled><br>
                        <label>E-mail</label><a onclick="myFunction1()" href="javascript:void(0);" style="float:right;">Edit</a> 
                            <input class="form-control" type="number" name="cno" size="10"
                                    value="" placeholder="mathraba@gmail.com"disabled><br>
                                    
                        <label>Store Validation Documents</label><a onclick="myFunction1()" href="javascript:void(0);" style="float:right;">Edit</a> 
                            <input class="form-control" type="file" name="medical" value=""  ><br>  
                            
                        <button>Update Details</button>   
                    </div>
                </form>
            </div>
    </div>          
</body>
</html>