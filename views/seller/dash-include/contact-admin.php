


<!DOCTYPE html>
<html>
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/dash.css">


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



</style>

    <title>Contact Admin</title>
</head>
<body>
<div class="seller-dashboard">
        <?php include('nav/contact_admin_nav.php'); ?>
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
            <div class="food-form form-container">
                <h2 style="text-transform: capitalize;text-align:center;">Contact Administrator</h2><br>
                <form class="form" action="" method="post">
                    <div class="form-group">
                        <label>Name</label>
                            <input class="form-control" type="text" name="foodName" size="50"
                                value="" autocomplete="off" placeholder="Enter Your Name Here" required><br>
                         <label>Seller ID</label>
                            <input class="form-control" type="text" name="foodName" size="50"
                                value="" autocomplete="off" placeholder="Enter Your Seller Here" required><br>       
                        <label>Email</label>
                            <input class="form-control" type="email" name="calories" size="50"
                                    value="" placeholder="Enter Your Email" required><br>
                        <label>Subject</label>
                            <input class="form-control" type="text"  name="protein" size="50"
                                    value="" placeholder="Enter Your Subject" required><br>
                        <label>Message</label>
                        <textarea class="form-control" name="message" placeholder="Message" 
                            style="display: block; border: 2px solid #ccc; width: 95%; padding: 6px; margin: 5px auto;border-radius: 5px;" required></textarea><br>                        
                    </div>
                    <input class="button" type="submit" name='submit2' value="submit" size="25">
                    <input class="button" type="reset" value="reset" size="25">
                </form>
            </div>

        </div>  

    <?php include('foot.php'); ?>   
</body>
</html>