<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Food</h1>

        <br> <br>

        <?php 
            if(isset($_SESSION['upload']))  //  Checking whether the Session is set or not
            {
                echo $_SESSION['upload'];   //  Display Session  Message if SET
                unset($_SESSION['upload']);   //  Remove Session Message 
            }


        ?>

        <form action="" method="POST" enctype="multipart/form-data">
        <table class="tbl-30">
        <tr>
         <td>Title: </td>
            <td>
                <input type="text" name="title" placeholder="Title of the Food">
            </td>
        </tr>

        <tr>
         <td>Description: </td>
            <td>
                <textarea name="description" cols="30" rows="5" placeholder="Description of the Food"></textarea>
            </td>
        </tr>

        <tr>
         <td>Price: </td>
            <td>
                <input type="number" name="price">
            </td>
        </tr>

        <tr>
         <td>Select Image: </td>
            <td>
                <input type="file" name="image">
            </td>
        </tr>

        <tr>
         <td>Category: </td>
            <td>
                <select name="category">

                <?php 
                // Create PHP code to display categories from Database
                // 1. Create SQL to get all active catagories from database
                $sql = "SELECT * FROM tbl_category WHERE active='Yes'";

                // Execute the Query
                $res = mysqli_query($conn, $sql);

                // Count Rows to check whether we have categories or not
                $count = mysqli_num_rows($res);

                // If count is greater than zero, we have categories else we don't have categories
                if($count>0)
                {
                    // We have categories
                    while($row=mysqli_fetch_assoc($res))
                    {
                        // Get the details of categories
                        $id = $row['id'];
                        $title = $row['title'];
                        ?>

                        <option value="<?php echo $id; ?>"><?php echo $title; ?></option>
                        
                        <?php
                    }
                }
                else
                {
                    // We don't have categories
                    ?>
                    <option value="0">No Category Found</option>

                    <?php
                }

                // 2. Display on Dropdown
                
                ?>
                    
                </select>
            </td>
        </tr>

        <tr>
         <td>Featured: </td>
            <td>
                <input type="radio" name="featured" value="Yes">Yes
                <input type="radio" name="featured" value="No">No
            </td>
        </tr>

        <tr>
        <td>Active: </td>
            <td>
                <input type="radio" name="active" value="Yes">Yes
                <input type="radio" name="active" value="No">No
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Add Food" class="btn-secondary">
            </td>
        </tr>


        
        </table>
        </form>



        <?php 
        // Check whether the button is clicked or not
        if(isset($_POST['submit']))
        {
            // Add the Food in Database
            // echo "Clicked";

            // 1. Get the data from Form
            $title = $_POST['title'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $category = $_POST['category'];

            // Check whether radio Button for Featured and Active are checked or not
            if(isset($_POST['featured']))
            {
                // Get the value from Form
                $featured = $_POST['featured'];
            }
            else
            {
                // Set the default value
                $featured = "No";
            }


            if(isset($_POST['active']))
            {
                $active = $_POST['active'];
            }
            else
            {
                $active = "No"; // Set the default value
            }

            
            // 2. Upload the image if Selected
            // Check Whether the select image is clicked or not and upload the image only if the image is selected
            if(isset($_FILES['image']['name']))
            {
                // Get the details of the selected image
                $image_name = $_FILES['image']['name'];

                // Check whether the image is Selected or not and upload image only if selected
                if($image_name != "")
                {
                    // Image is selected
                    // A. Rename the image
                    // Get the extension of our image (jpg, png, gif, etc) e.g. "smriti-choudhury.jpg" smriti-choudhury jpg
                    $ext = end(explode('.', $image_name));

                    // Create new name for the image
                    $image_name = "Food-Name-".rand(0000, 9999).".".$ext;  // New Image name may be e.g. "Food-Name-657.jpg"

                    // B. Upload the image
                    // Get the src path and destination path

                    // Souce path is the Current location of the image
                    $src = $_FILES['image']['tmp_name'];

                    // Destination path for the image to be uploaded
                    $dst = "../images/food/".$image_name;

                    // Finally Upload the food image
                    $upload = move_uploaded_file($src, $dst);

                    // Check whether image uploaded or not
                    if($upload==FALSE)
                    {
                        // Failed to upload image
                        // Redirect to add Food page with error message
                        $_SESSION['upload'] = "<div class='error'>Failed to upload Image</div>";
                        header("location:".SITEURL. 'admin/add-food.php');
                        // Stop the process
                        die();

                    }


                }

            }
            else
            {
                // Don't upload the image and set  the image_name value as blank
                $image_name = "";
            }

            // 3. Insert into Database
            // Create a SQL query to save or Add Food
            // For numerical value we do not need to pass value inside quotes '' But for string value it is compulsory to add quotes''
            // price, category_id are a numerical value.
            $sql2 = "INSERT INTO tbl_food SET  
                title = '$title',
                description = '$description',
                price = $price,
                image_name = '$image_name',
                category_id = $category,
                featured = '$featured',
                active = '$active'
            ";

            // Execute the query
            $res2 = mysqli_query($conn, $sql2);

             // Check whether data inserted or not
             // 4. Redirect with message to Manage Food Page

             if($res2==TRUE)
             {
                //  Data inserted successfully
                $_SESSION['add'] = "<div class='success'>Food Added Successfully.</div>";
                // Redirect to Manage Food page
                header("location:".SITEURL. 'admin/manage-food.php');

             }
             else
             {
                //  Failed to insert data
                $_SESSION['add'] = "<div class='error'>Failed to Add Food.</div>";
                // Redirect to Add Category page
                header("location:".SITEURL. 'admin/manage-food.php');
             }
             




            
        }
        
        ?>


    </div>
</div>
<?php include('partials/footer.php'); ?>