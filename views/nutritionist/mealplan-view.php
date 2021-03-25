<?php
    session_start();
    if(!isset($_SESSION['loggedin'])) {
        header('Location: ../auth/login');
        die();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>Kamu Nutritionist</title>
    <link rel="stylesheet" href="../assets/css/nutritionist/style.css">
    <link rel="stylesheet" href="../assets/css/nutritionist/food.css">
</head>

<body>
<?php include('nav.php'); ?>
    <div class="content">
    <div class="card">
                <div class="food-view">
                    <h2 style="text-align: left;">Sent Meal Plans </h2><br>
                    <table id="food">
                        <tr>
                            <th>Client Name</th>
                            <th>Meal plan description</th>
                            <th colspan="2">Action</th>
                        </tr>
                        <tr>
                            <td>Sajana Nakandala</td>
                            <td>Sajana's meal plan</td>
                            <td><a href="mealplan_form.php"> <button class="button1">View</button></a></td>
                            <td> <a href=""> <button class="button1">Delete</button></a></td>
                        </tr>
                        <tr>
                            <td>Nisal Liyanage</td>
                            <td>Nisal's meal plan</td>
                            <td><a href="mealplan_form.php"> <button class="button1">View</button></a></td>
                            <td> <a href=""> <button class="button1">Delete</button></a></td>
                        </tr>
                        <tr>
                            <td>Devin De Silva</td>
                            <td>devin's meal plan</td>
                            <td><a href="mealplan_form.php"> <button class="button1">View</button></a></td>
                            <td> <a href=""> <button class="button1">Delete</button></a></td>
                        </tr>
                    </table>
                </div>
            </div> 
    </div>
</body>
</html>