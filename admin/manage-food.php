<?php include('partials/menu.php'); ?>

 <!-- Main content section starts -->
 <div class = " main-content">
        <div class = "wrapper">
            <h1>Manage Food</h1>
            </br>  </br>

        <!-- button to add admin -->
        <a href="<?php echo SITEURL; ?>admin/add-food.php" class="btn-primary">Add Food</a>

        </br> </br>  </br>  


            <?php

                if(isset($_SESSION['add']))  //  Checking whether the Session is set or not
                {
                    echo $_SESSION['add'];   //  Display Session  Message if SET
                    unset($_SESSION['add']);   //  Remove Session Message 
                }
                if(isset($_SESSION['delete']))  //  Checking whether the Session is set or not
                {
                    echo $_SESSION['delete'];   //  Display Session  Message if SET
                    unset($_SESSION['delete']);   //  Remove Session Message 
                }
                if(isset($_SESSION['upload']))  //  Checking whether the Session is set or not
                {
                    echo $_SESSION['upload'];   //  Display Session  Message if SET
                    unset($_SESSION['upload']);   //  Remove Session Message 
                }
                if(isset($_SESSION['unauthorize']))  //  Checking whether the Session is set or not
                {
                    echo $_SESSION['unauthorize'];   //  Display Session  Message if SET
                    unset($_SESSION['unauthorize']);   //  Remove Session Message 
                }
                if(isset($_SESSION['remove-failed']))  //  Checking whether the Session is set or not
                {
                    echo $_SESSION['remove-failed'];   //  Display Session  Message if SET
                    unset($_SESSION['remove-failed']);   //  Remove Session Message 
                }
                if(isset($_SESSION['update']))  //  Checking whether the Session is set or not
                {
                    echo $_SESSION['update'];   //  Display Session  Message if SET
                    unset($_SESSION['update']);   //  Remove Session Message 
                }
    

             ?>
             
            <table class = "tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Featurd</th>
                    <th>Active</th>
                    <th>Actions</th>

                </tr>

                <?php
                // Query to get all Categories from Database
                $sql = "SELECT * FROM tbl_food";

                // Execute the Query
                $res = mysqli_query($conn, $sql);

                // Count Rows whether we have food have or not
                $count = mysqli_num_rows($res);

                // Create serial number variable and assign value as 1
                $sn=1;

                // Check whether we have food in database or not
                if($count>0)
                {
                    // We havefood in database
                    // Get the data and display
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id = $row['id'];
                        $title = $row['title'];
                        $price= $row['price'];
                        $image_name = $row['image_name'];
                        $featured = $row['featured'];
                        $active = $row['active'];
                        ?>

                            <tr>
                                <td><?php echo $sn++; ?>.</td>
                                <td><?php echo $title; ?></td>
                                <td>₹<?php echo $price; ?></td>
                                <td>
                                <?php 
                                     //  Check whether image name is available or not
                                     if($image_name!="")
                                     {
                                         // Display the image
                                         ?>
                                         <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" width="100px">
                                         <?php
                                     }
                                     else
                                     {
                                         // Display the message
                                         echo "<div class='error'>Image not Added.</div>";
                                     }
                                    
                                ?>
                                </td>
                                <td><?php echo $featured; ?></td>
                                <td><?php echo $active; ?></td>
                                <td>
                                <a href="<?php echo SITEURL; ?>admin/update-food.php?id=<?php echo $id; ?>" class="btn-secondary">Update Food</a>
                                <a href="<?php echo SITEURL; ?>admin/delete-food.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete Food</a>
                                </td>
                            </tr>

                        <?php
                    }
                }
                else
                {
                    // We don't have food in data base
                    
                    echo "<tr><td colspan='7'class='error'>No Food Added.</td></tr>";
                    
                    
                }            




                ?>
               
                
            </table>   
            
        </div>
        </div>
       
        <!-- Main content section ends -->

<?php include('partials/footer.php'); ?>