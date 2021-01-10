<div class="navbar">
    <div class="logo">
        <img src="../public/images/seller/logo.png" alt="logo" width="125px">
    </div>
    <div class="nav-right">
        <h3>Hi User</h3>
            <div class="dropdown">
                <button class="dropbtn"><img  src="../public/images/user/user_icon.png" alt="user" width="50px"></button>
                <div class="dropdown-content">
                    <a href="dash_include/edit_restaurant_details.php">My Profile</a>
                    <a href="../logout.php">Log Out</a>
                </div>
            </div>
    </div>
</div>
<div class="sidebar">
    <ul>
        <li> <a href="dash.php">DASHBOARD</a></li>
        <li><a href="dash_include/contact_administration.php">Contact Nutritionist</a></li>
        <li> post detail
        <ul style="display:none;">
                <li><a href="dash_include/add_post.php">Add post</a></li>
                <li><a href="dash_include/view_post.php">view post</a></li>            
            </ul>
        </li>
        <li>Order Details
            <ul style="display: block;">
                <li><a href="dash_include/view_order.php">Orders</a></li>
                <li><a href="dash_include/order_history.php">My cart</a></li>
            </ul>
        </li>
        <li><a href="dash_include/contact_admin.php">Contact Administrator</a></li>
    </ul>
</div>
