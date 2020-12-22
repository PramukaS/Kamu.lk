<div class="navbar">
    <div class="logo">
        <img src="../public/images/seller/logo.png" alt="logo" width="125px">
    </div>
    <div class="nav-right">
        <h3>Hi Seller</h3>
            <div class="dropdown">
                <button class="dropbtn"><img  src="../public/images/seller/seller_icon.png" alt="user" width="50px"></button>
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
        <li><a href="dash_include/edit_restaurant_details.php">Edit Restaurant Details</a></li>
        <li> Food Menu
        <ul style="display: none;">
                <li><a href="dash_include/add_food_item.php">Add Food Items</a></li>
                <li><a href="dash_include/edit_food_item.php">Edit Food Items</a></li>            
                <li><a href="dash_include/view_food_item.php">View Food Items</a></li>
            </ul>
        </li>
        <li>Order Details
            <ul style="display: none;">
                <li><a href="dash_include/view_order.php">View Order details</a></li>
                <li><a href="dash_include/order_history.php">Order History</a></li>
            </ul>
        </li>
        <li><a href="dash_include/contact_admin.php">Contact Administrator</a></li>
    </ul>
</div>
