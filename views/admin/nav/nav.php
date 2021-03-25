<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../assets/css/nutritionist/nav.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    </head>

    <body>
        <div class="navbar">
            <div class="logo">
                <img src="../assets/images/logo.png" alt="logo" width="125px">
            </div>
            <div class="nav-right">
                    <div class="dropdown">
                        <button class="dropbtn"><img  src="../assets/images/admin/adminlogo.png" alt="admin" width="30px"></button>
                        <div class="dropdown-content">
                            <a href="dash_include/edit_restaurant_details.php">My Profile</a>
                            <a href="../admin/logout.php">Logout</a>
                        </div>
                    </div>
            </div>
        </div>

        <div class="sidebar">
            <ul>
                <li><i class="fa fa-home fa-2x"></i>&#8287 &#8287 <a href="admin">Home</a></li>
                <li>
                    <button class="fa fa-desktop fa-2x dropdown-btn">User Management
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <ul class="user-show">
                        <li><a href="user-add">add</a></li>
                        <li><a href="user-view">view</a></li>
                    </ul>
                </li>
                <li><i class="fa fa-cogs fa-2x"></i>&#8287 &#8287<a href="manage-posts">Post Management</a></li>
                <li><i class="fa fa-book fa-2x"></i>&#8287 &#8287<a href="income">Income</a></li>
                <li><i class="fa fa-envelope fa-2x"></i>&#8287 &#8287<a href="admin-inbox">Inbox</a></li>
                <li><i class="fa fa-bar-chart-o fa-2x"></i>&#8287 &#8287<a href="admin-report">Reports</a></li>
                <li><i class="fa fa-map-marker fa-2x"></i>&#8287 &#8287<a href="map">Google Maps</a></li>
            </ul>
        </div>
    </body>

    <div class="sidenav">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
  <button class="dropdown-btn">Dropdown
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a href="#contact">Search</a>
</div>

<script>
        $('.user-btn').click(function(){
            $('nav ul .user-show').toggleClass("show");
            $('nav ul .first').toggleClass("rotate");
        });

        $('.meal-btn').click(function(){
            $('nav ul .meal-show').toggleClass("show1");
            $('nav ul .second').toggleClass("rotate");
        });

        $('.post-btn').click(function(){
            $('nav ul .post-show').toggleClass("show2");
            $('nav ul .third').toggleClass("rotate");
        });

</script>

</html>
