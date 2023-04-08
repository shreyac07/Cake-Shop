<?php include('partials/menu.php'); ?>

<div class="main-content">
 <div class="wrapper">
    <h1>Manage Category</h1>

    <br> <br> 


    <?php 

            if(isset($_SESSION['add']))  //  Checking whether the Session is set or not
            {
                echo $_SESSION['add'];   //  Display Session  Message if SET
                unset($_SESSION['add']);   //  Remove Session Message 
            }

            if(isset($_SESSION['remove']))  //  Checking whether the Session is set or not
            {
                echo $_SESSION['remove'];   //  Display Session  Message if SET
                unset($_SESSION['remove']);   //  Remove Session Message 
            }

            if(isset($_SESSION['delete']))  //  Checking whether the Session is set or not
            {
                echo $_SESSION['delete'];   //  Display Session  Message if SET
                unset($_SESSION['delete']);   //  Remove Session Message 
            }

            if(isset($_SESSION['no-category-found']))  //  Checking whether the Session is set or not
            {
                echo $_SESSION['no-category-found'];   //  Display Session  Message if SET
                unset($_SESSION['no-category-found']);   //  Remove Session Message 
            }

            if(isset($_SESSION['update']))  //  Checking whether the Session is set or not
            {
                echo $_SESSION['update'];   //  Display Session  Message if SET
                unset($_SESSION['update']);   //  Remove Session Message 
            }

            if(isset($_SESSION['upload']))  //  Checking whether the Session is set or not
            {
                echo $_SESSION['upload'];   //  Display Session  Message if SET
                unset($_SESSION['upload']);   //  Remove Session Message 
            }

            if(isset($_SESSION['failed-remove']))  //  Checking whether the Session is set or not
            {
                echo $_SESSION['failed-remove'];   //  Display Session  Message if SET
                unset($_SESSION['failed-remove']);   //  Remove Session Message 
            }


        ?>

        <br> <br> 

        <!-- Button to add Admin -->
        <a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-primary">Add Category</a>
        <br> <br> <br>

        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Title</th>
                <th>Image</th>
                <th>Featured</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>

            <?php 
                // Query to get all Categories from Database
                $sql = "SELECT * FROM tbl_category";

                // Execute the Query
                $res = mysqli_query($conn, $sql);

                // Count Rows
                $count = mysqli_num_rows($res);

                // Create serial number variable and assign value as 1
                $sn=1;

                // Check whether we have data in database or not
                if($count>0)
                {
                    // We have data in database
                    // Get the data and display
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        $featured = $row['featured'];
                        $active = $row['active'];

                        ?>

                    <tr>
                        <td><?php echo $sn++; ?>.</td>
                        <td><?php echo $title; ?></td>

                        <td>

                            <?php 
                                //  Check whether image name is available or not
                                if($image_name!="")
                                {
                                    // Display the image
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" width="100px">
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
                            <a href="<?php echo SITEURL; ?>admin/update-category.php?id=<?php echo $id; ?>" class="btn-secondary">Update Category</a>
                            <a href="<?php echo SITEURL; ?>admin/delete-category.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete Category</a>
                        </td>
                    </tr>

                        <?php


                    }
                }
                else
                {
                    // We don't have data
                    // We will display the message inside table
                    ?>

                    <tr>
                        <td colspan="6"><div class="error">No Category Added.</div></td>
                    </tr>


                    <?php
                }

            
            ?>

         

         
        </table>

 </div>
 
</div>
  
<?php include('partials/footer.php'); ?>