<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>Kamu Nutritionist</title>
    <link rel="stylesheet" href="../public/css/nutritionist/nutritionist.css">
    <link rel="stylesheet" href="../public/css/nutritionist/food.css">
</head>

<body>
<?php include('nav.php'); ?>
    <div class="content">
        <div class="food-view">
                <h2 style="align-content: center;text-transform: capitalize;">My Posts</h2><br>
                <a href="food_form.php"><button class="button buttonc">Add Post </button></a><br><br>
                <table id="food">
                    <tr>
                        <th>Title</th>
                        <th>Post</th>
                        <th colspan="2">Actions</th>
                    </tr>
                    <tr>
                        <td>How to prepare diet plan</td>
                        <td>Do you crave a diet that caters to your unique needs....</td>
                        <td> <a href="post_form.php"> <button class="button1">
                            Update</button></a></td>
                        <td> <a href=""> <button class="button1">
                            Delete</button></a></td>
                    </tr>
                </table>
            </div>
    </div>
</body>
</html>