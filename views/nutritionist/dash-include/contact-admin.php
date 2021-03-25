<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>Kamu Nutritionist</title>
    <link rel="stylesheet" href="../public/css/nutritionist/nutritionist.css">
    <link rel="stylesheet" href="../public/css/nutritionist/foodform.css"> 
    <link rel="stylesheet" href="../public/css/nutritionist/forms.css">
</head>

<body>
<?php include('nav.php'); ?>
    <div class="content">
        <div class="food-form form-container">
                <h2 style="text-transform: capitalize;">Contact Administrator</h2><br>
                <form class="form" action="" method="post">
                    <div class="form-group">
                        <label>Name</label>
                            <input class="form-control" type="text" name="foodName" size="50"
                                value="" autocomplete="off" placeholder="Enter Your Name Here" required><br>
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
</body>
</html>