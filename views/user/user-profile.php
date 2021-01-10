<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/user/form.css">
    <link rel="stylesheet" href="../public/css/user/dash.css">
    <link rel="stylesheet" href="../public/css/user/myprofile.css">
    <title>User Dashboardr</title>
</head>
<body>
    <div class="user-dashboard">
        <?php include('dash_include/nav.php'); ?>

<div class="content">
            <div class="food-form form-container">
                <h2 style="text-transform: capitalize;text-align:center;">My Profile</h2><br>
                <form class="form" action="" method="post">
                    <div class="form-group">
                        <img  src="../public/images/user/user_icon.png" width="100px" style="float:right;" alt="user" width="50px"><br><br><br><br><br>
                    </div>
                    <div class="form-group">
                        <label>Username</label><a onclick="myFunction()" href="javascript:void(0);" style="float:right;" value="1">Edit</a> 
                            <input id = "username" class="form-control" type="text" name="username" size="50"
                                value="" autocomplete="off" placeholder="Shifna" disabled><br>

                                <div id="myDIV"style="display:none;">
                                        <label>New Username</label>
                                        <input id = "hidden" class="form-control" type="text" name="username" size="50"
                                                value="" placeholder="Enter your New Username" required><br>
                                        <input class="button" type="submit" name='submit2' value="Submit" size="25">
                                </div>

                        <label>Password</label><a onclick="myFunction1()" href="javascript:void(0);" style="float:right;">Edit</a> 
                            <input class="form-control" type="password" name="password" size="3"
                                    value="" placeholder="***" disabled><br>

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


                        <label>Name</label><a onclick="myFunction1()" href="javascript:void(0);" style="float:right;">Edit</a> 
                            <input class="form-control" type="text" step=0.1 name="name" size="50"
                                    value="" placeholder="Shifna shafeek" disabled><br>
                        <label>Age</label><a onclick="myFunction1()" href="javascript:void(0);" style="float:right;">Edit</a> 
                            <input class="form-control" type="number" name="cno" size="10"
                                    value="" placeholder="0773456467"disabled><br>
                        <label>Address</label><a onclick="myFunction1()" href="javascript:void(0);" style="float:right;">Edit</a> 
                            <input class="form-control" type="text" name="medical" value=""  ><br>
                        <label>Email</label><a onclick="myFunction1()" href="javascript:void(0);" style="float:right;">Edit</a> 
                            <input class="form-control" type="email" name="medical" value=""  ><br>
                        <label>Height</label><a onclick="myFunction1()" href="javascript:void(0);" style="float:right;">Edit</a> 
                            <input class="form-control" type="text" name="medical" value=""  ><br>
                        <label>Weight</label><a onclick="myFunction1()" href="javascript:void(0);" style="float:right;">Edit</a> 
                            <input class="form-control" type="text" name="medical" value=""  ><br>
                                                                 
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>
</html>
