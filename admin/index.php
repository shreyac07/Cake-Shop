<?php include('partials/menu.php'); ?>



        <!-- Main content section starts -->
        <div class = " main-content">
            <div class = "wrapper">
                <h1>Dashboard</h1>
                </br> </br>
                <?php
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];//display session message for login
                        unset($_SESSION['login']);//revoming session messege
                    }
                ?>
                </br> </br>
                <div class= "col-4 text-center">
                    <?php

                        //sql query
                        $sql = "SELECT * FROM tbl_category";

                        // Execute the Query
                        $res = mysqli_query($conn, $sql);

                        // Count the Rows 
                        $count = mysqli_num_rows($res);

                     ?>
                    <h1><?php echo $count;?></h1>
                </br>
                    Categories
                </div>
                <div class= "col-4 text-center">
                    <?php

                    //sql query
                    $sql2 = "SELECT * FROM tbl_food";

                    // Execute the Query
                    $res2 = mysqli_query($conn, $sql2);

                    // Count the Rows 
                     $count2 = mysqli_num_rows($res2);

                    ?>

                    <h1><?php echo $count2 ;?></h1>
                </br>
                    Foods
                </div>
                <div class= "col-4 text-center">
                    <?php

                        //sql query
                        $sql3 = "SELECT * FROM tbl_order";

                        // Execute the Query
                        $res3 = mysqli_query($conn, $sql3);

                        // Count the Rows 
                        $count3 = mysqli_num_rows($res3);

                    ?>
                    <h1><?php echo $count3; ?></h1>
                </br>
                   Total Order 
                </div>
                <div class= "col-4 text-center">
                    <?php

                        $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";

                        // Execute the Query
                        $res4 = mysqli_query($conn, $sql4);

                        //get the value
                        $row4=mysqli_fetch_assoc($res4);

                        //get the total revenue
                        $total_revenue = $row4['Total'];

                    ?>

                    <h1>₹<?php echo $total_revenue ;?></h1>
                </br>
                    Revenue Generated
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
       
        <!-- Main content section ends -->

<?php include('partials/footer.php'); ?>

        