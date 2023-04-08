<?php 

include ('../config/constants.php');

include ('login-check.php');


?> 


<html>
    <head>
        <title>Baker’s Delight - Admin</title>
        <link rel="stylesheet" href="../css/admin.css">
        
    </head>
    <body>
        <!-- Menu section starts -->
        <div class = " menu"><!-- "menu text-center"  (then we have to delet .menu from css) -->
            <div class = "wrapper">
             <ul>
                <li><a href = "index.php">Home</a></li>
                <li><a href = "manage-admin.php">Admin</a></li>
                <li><a href = "manage-category.php">Category</a></li>
                <li><a href = "manage-food.php">Food</a></li>
                <li><a href = "manage-order.php">Order</a></li>
                <li><a href = "logout.php">Logout</a></li>
                
            </ul>
            </div>
        </div>
        <!-- Menu section ends -->