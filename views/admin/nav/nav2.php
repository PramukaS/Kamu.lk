<!DOCTYPE html>

<html>
    <head>
    <link rel="stylesheet" href="../assets/css/admin/nav2.css">
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
                            <a href="../admin/logout">Logout</a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="sidenav">
        <a href="admin"><i class="fa fa-home fa-2x"></i>&#8287 &#8287 Dashboard</a><hr>
            <button class="dropdown-btn">&#8287 <i class="fa fa-desktop fa-2x"></i>&#8287 User Management
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="user-view"> &#8287 &#8287 &#8287 &#8287 &#8287 View User</a>
                <a href="user-add"> &#8287 &#8287 &#8287 &#8287 &#8287 Add User</a>
            </div>
            <a href="manage-posts"><i class="fa fa-cogs fa-2x"></i> &#8287 Post Management</a><hr>
            <a href="inbox-view"><i class="fa fa-envelope fa-2x"></i>&#8287 &#8287 Inbox</a><hr>
            <button class="dropdown-btn">&#8287 &#8287<i class="fa fa-book fa-2x"></i>  &#8287 Income
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="recievable-view">&#8287 &#8287 &#8287 &#8287 &#8287 Recievable</a>
                <a href="payable-view">&#8287 &#8287 &#8287 &#8287 &#8287 Payable</a>
                <a href="income-add">&#8287 &#8287 &#8287 &#8287 &#8287 Add Transaction</a>
            </div>
            <a href="admin-report"><i class="fa fa-bar-chart-o fa-2x"></i> &#8287 Reports</a><hr>
            <a href="map">&#8287 &#8287<i class="fa fa-map-marker fa-2x"></i> &#8287 &#8287   Google Maps</a><hr>
        </div>


    </body>
    <script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
            } else {
            dropdownContent.style.display = "block";
            }
        });
        }

    </script>

    </html>

