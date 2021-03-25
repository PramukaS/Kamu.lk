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
                <h2 style="text-transform: capitalize;">Add Food Details</h2><br>
                <form class="form" action="food_form.php?id=<?php echo $id; ?>" method="post">
                    <div class="form-group">
                        <label>Food Name</label>
                            <input class="form-control" type="text" name="foodName" size="50"
                                value="" autocomplete="off" placeholder="Enter Food Name Here" required><br>
                        <label>Calories (kcal)</label>
                            <input class="form-control" type="number" step=1 name="calories" size="50"
                                    value="" placeholder="Enter Calories in 100g" required><br>
                        <label>Protein (g)</label>
                            <input class="form-control" type="number" step=0.1 name="protein" size="50"
                                    value="" placeholder="Enter Protein in 100g" required><br>
                        <label>Fat (g)</label>
                            <input class="form-control" type="number" step=0.1 name="fat" size="50"
                                    value="" placeholder="Enter Fat in 100g" required><br>                               
                    </div>
                    <input class="button" type="submit" name='submit2' value="submit" size="25">
                    <input class="button" type="reset" value="reset" size="25">
                </form>
            </div>
    </div>
</body>
</html>