<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>Kamu Nutritionist</title>
    <link rel="stylesheet" href="../public/css/nutritionist.css">

</head>

<body>
<?php include('nav.php'); ?>
    <div class="content">
        <div class="grid">
            <div class="mini-reports bg-blue">
                <div class="l">
                    <span>10</span>
                    <span><a href="inbox.php">Inbox</a></span>
                </div>
                <div class="r">
                    <i class="fa fa-envelope c-blue"></i>
                </div>
            </div>
            <div class="mini-reports bg-green">
                <div class="l">
                    <span>1</span>
                    <span><a href="post_view.php">Posts</a></span>
                </div>
                <div class="r">
                    <i class="fa fa-map c-green"></i>
                </div>
            </div>
            <div class="mini-reports bg-orange">
                <div class="l">
                    <span>10</span>
                    <span><a href="mealplan_view.php">Clients</a></span>
                </div>
                <div class="r">
                    <i class="fa fa-users c-orange"></i>
                </div>
            </div>
            <div class="mini-reports bg-red">
                <div class="l">
                    <span>100</span>
                    <span><a href="food_view.php">Foods</a></span>
                </div>
                <div class="r">
                    <i class="fa fa-tree c-red"></i>
                </div>
            </div>
        </div>

        <div class="grid">
            <div class="painel">
                <div class="painel-header">
                    <h4 class="painel-title">Today clients</h4>
                </div>
                <div class="painel-body">
                        <table class="zebra">
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <td>Chuck Norris</td>
                                <td>chucknorris@info.com</td>
                                <td>
                                    <a href="#" class="btn btn-red"><i class="fa fa-trash"></i></a>
                                    <a href="#" class="btn btn-green"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>john@gmail.com</td>
                                <td>
                                    <a href="#" class="btn btn-red"><i class="fa fa-trash"></i></a>
                                    <a href="#" class="btn btn-green"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Frank Underwood</td>
                                <td>frank@info.com</td>
                                <td>
                                    <a href="#" class="btn btn-red"><i class="fa fa-trash"></i></a>
                                    <a href="#" class="btn btn-green"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Michael J</td>
                                <td>mj@gmail.com</td>
                                <td>
                                    <a href="#" class="btn btn-red"><i class="fa fa-trash"></i></a>
                                    <a href="#" class="btn btn-green"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Frank Underwood</td>
                                <td>frank@info.com</td>
                                <td>
                                    <a href="#" class="btn btn-red"><i class="fa fa-trash"></i></a>
                                    <a href="#" class="btn btn-green"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>