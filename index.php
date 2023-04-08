<?php include('partials-front/menu.php'); ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Cakes.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <?php

        if(isset($_SESSION['order']))  //  Checking whether the Session is set or not
        {
            echo $_SESSION['order'];   //  Display Session  Message if SET
            unset($_SESSION['order']);   //  Remove Session Message 
        }
    ?>

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 style="color: #ff6b81" class="text-center">Explore Cakes</h2>

            <?php
                // Create SQL query to display categories from database
                $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 3";

                 // Execute the Query
                 $res = mysqli_query($conn, $sql);

                 // Count Rows to check whether the category is available or not
                 $count = mysqli_num_rows($res); 
                 
                 if($count>0)
                 {
                    //  Categories available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        // Get the values like id, title, image_name
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
            ?>
                <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                    <div class="box-3 float-container">
                    <?php 
                    // Check whether image is available or not
                      if($image_name=="")
                      {
                        //   Display Message
                        echo "<div class='error'>Image not Available.</div>";
                      }
                    
                    else
                    {
                        // Image available
                    ?>
                         <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Cake" class="img-responsive img-curve">
                    <?php
                    }
                    
                    ?>
                       

                        <h3 class="float-text text-white"><?php echo $title; ?></h3>
                    </div>
                </a>

            <?php
                    }
                    
                 }
                 else
                 {
                    //  Categories not available
                    echo "<div class='error'>Category not Added.</div>";
                 }


            ?>

          


            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Cake Menu</h2>

            <?php

                //  Getting foods from database that are active and featured
                // Sql query
                $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 6";

                // Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                // Count Rows 
                $count2 = mysqli_num_rows($res2); 

                //  check whether food is available or not
                if($count2>0)
                {
                    // Food available
                    while($row=mysqli_fetch_assoc($res2))
                    {
                        // Get all the values
                        $id = $row['id'];
                        $title = $row['title'];
                        $price = $row['price'];
                        $description = $row['description'];
                        $image_name = $row['image_name'];
            ?>

            <div class="food-menu-box">
                <div class="food-menu-img">
                        <?php
                        // Check Whether image available or not
                        if($image_name=="")
                        {
                            // Image not available
                            echo "<div class='error'>Image not Available.</div>";
                        }
                        else
                        {
                            // Image  available
                        ?>

                            <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>"  alt="Chocolate Cake" class="img-responsive img-curve">
                        <?php

                        }
                        ?>
                   
                </div>

                <div class="food-menu-desc">
                    <h3><?php echo $title; ?></h3>
                    <p class="food-price">₹<?php echo $price; ?></p>
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
                    // Food not available
                    echo "<div class='error'>Cake not Available.</div>";
                }


            ?>

            


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="<?php echo SITEURL; ?>foods.php">See All Cakes</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>