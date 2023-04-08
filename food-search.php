
<?php include('partials-front/menu.php');?>


    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            <?php 

            //get the search keyword
            $search =$_POST['search'] ;
            //$search =mysqli_real_escape_string($conn, $_POST['search']) ;
            
            
            
            ?>
            
            <h2 class="pen" >Cake on Your Search <a href="#" class="text-pink">"<?php echo $search; ?>"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Cake Menu</h2>
            <?php
            

            //creat sql query on based of search food
            //$search='burger';drop database name;
            //SELECT * FROM tbl_food WHERE title LIKE '%burger'%'  OR description LIKE '%burger%'"
            $sql = "SELECT * FROM tbl_food WHERE title LIKE '%$search%' OR description LIKE '%$search%'";

            // Execute the Query
            $res = mysqli_query($conn, $sql);

            // Count Rows 
            $count = mysqli_num_rows($res); 

             // Check whether foods are available or not
             if($count>0)
             {
                 // Foods available
                 while($row=mysqli_fetch_assoc($res))
                 {
                     // Get the values
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    ?>

                        <div class="food-menu-box">
                            <div class="food-menu-img">
                                <?php
                                // Check whether image is available or not
                                 if($image_name=="")
                                 {
                                      //  Image not Available
                                    echo "<div class='error'>Image not Available.</div>";
                                 }
                                 else
                                 {
                                    // Image  Available
                                    ?>

                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chocolate Cake" class="img-responsive img-curve">

                                    <?php
                                 }



                                ?>
                                
                            </div>

                            <div class="food-menu-desc">
                                <h3><?php echo $title; ?></h3>
                                <p class="food-price">₹<?php echo $price;?></p>
                                <p class="food-detail">
                                <?php echo $description; ?>
                                   
                                </p>
                                <br>

                                <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>

                    <?php
                 }
             }
             else
             {
                  //  Foods not available
                echo "<div class='error'>Cake Not Found.</div>";
             }


            ?>

           

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('partials-front/footer.php');?>