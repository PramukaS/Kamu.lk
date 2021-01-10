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
    <link rel="stylesheet" href="../public/css/user/mealform.css">
    <title>User Dashboardr</title>
</head>
<body>
    <div class="user-dashboard">
        <?php include('dash_include/nav.php'); ?>

<div class="content">
            <div class="row">
                <div class="col-2">
                    <div class="meal-form form-container">
                        <h2 style="text-transform: capitalize;">Personal Information</h2><br>
                        <form class="form" action="" method="post">
                            <div class="form-group">
                            	<!--mealplan id-->
                                <label>Name</label>
                                    <input class="form-control" type="text" name="Name" 
                                        value="" placeholder="Sajana Nakandala"required><br>
                                <label>Age</label>
                                    <input class="form-control" type="number" name="calories" size="50"
                                            value="" placeholder="21"required><br>
                                 <label>Gender</label> <br>
                <table width="250" border="0px">
                  <tr>
                    <td width="15px" height="15px"><input type="radio" id="male" name="gender" value="male"></td>
                    <td><label for="male"> Male </label></td>
                  </tr>
                  <tr>
                    <td width="15px" height="15px"><input type="radio" id="female" name="gender" value="female"></td>
                    <td><label for="female"> Female</label></td>
                  </tr>
                  <tr>
                    <td width="15px" height="15px"><input type="radio" id="other" name="gender" value="other"></td>
                    <td><label for="other"> Other </label></td>
                  </tr>
                </table><br>
                                <label>Height(m)</label>                                        
                                    <input class="form-control" type="number"  name="height" size="50"
                                                value="" placeholder="1.828" required><br>
                                <label>Weight(kg)</label>                                        
                                    <input class="form-control" type="number" name="weight" size="50"
                                                value="" placeholder="73" required><br>
                                <label>Occupation</label>
                                    <input class="form-control" type="text" name="occupation" size="50"
                                        value="" placeholder="Your Occupation"required><br>
                               <label>Reason for seeking Nutrition food</label><br>
                  
                    <textarea class="form-control" name="reason" placeholder="Your reason" rows="4" required></textarea><br>                                
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-2">
                    <div class="meal-form form-container">
                        <h2 style="text-transform: capitalize;">Health Details</h2><br>
                        <form class="form" action="" method="post">
                            <div class="form-group">
                            	
                                <label>Physical Exercise level</label>
                                    <input class="form-control" type="text"  name="excercise" 
                                            value="" placeholder="Active/Inactive" required><br>
                                <label>Any medication taken</label><br>
                    
                      <textarea name="medication" rows="3" required></textarea><br> 
                      <label>Health issues</label><br>
                    

                      <textarea name="health" placeholder="Ex: Gastritis ,vesing" rows="3" required></textarea><br>       
                      <label>Any alergy food or medicine</label><br>
                      <textarea name="alergy" rows="5" placeholder="Alergy food or medicine" required></textarea><br>         <label>Note</label><br>
                  
                    <textarea name="message" placeholder="Message" rows="4" required></textarea><br>                   
                            </div>
                            <input class="button" type="submit" name='submit2' value="Send" size="25">
                            <input class="button" type="reset" value="reset" size="25">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
