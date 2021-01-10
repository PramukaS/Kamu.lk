<div class="navbar">
    <div class="logo">
        <img src="../public/images/seller/logo.png" alt="logo" width="125px">
    </div>
    <div class="nav-right">
        <h3>Hi User</h3>
            <div class="dropdown">
                <button class="dropbtn"><img  src="../public/images/user/user_icon.png" alt="user" width="50px"></button>
                <div class="dropdown-content">
                    <a href="user-profile">My Profile</a>
                    <a href="../logout.php">Log Out</a>
                </div>
            </div>
    </div>
</div>
<div class="sidebar">
    <ul>
        <li> <a href="user-dash">DASHBOARD</a></li>
        <li><a href="contact-nutritionist">Contact Nutritionist</a></li>
        <li><a href="add-post">Post Details</a></li> 
        <ul style="display:none;">
                <li><a href="add-post">Add post</a></li>
                <li><a href="dash_include/view_post.php">view post</a></li>            
            </ul>
        </li>
        <li>Order Details
            <ul style="display: none;">
                <li><a href="dash_include/view_order.php">View Order details</a></li>
                <li><a href="dash_include/order_history.php">Order History</a></li>
            </ul>
        </li>
        <li><a href="contact-administration">Contact Administrator</a></li>
    </ul>
</div>
