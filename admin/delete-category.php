<?php 
    // Include Constants file
    include('../config/constants.php');

    // echo "Delete Page";
    // Check whether the id and image_name is set or not
    if(isset($_GET['id']) AND isset($_GET['image_name']))
    {
        // Get the value and delete
        // echo "Get the value and delete";
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        // Remove the physical image file is available
        if($image_name != "")
        {
            // Image is available. So remove it.
            $path = "../images/category/".$image_name;
            // Remove the image
            $remove = unlink($path);

            // If failed to remove image then add an error message and stop the process
            if($remove==FALSE)
            {
                // Set the SESSION message
                $_SESSION['remove'] = "<div class='error'>Failed to Remove Category Image.</div>";
                //  Redirect to Manage Category page 
                header("location:".SITEURL. 'admin/manage-category.php');
                // Stop the process
                die();
            }
        }

        // Delete data from database
        // SQL query to delete data from database
        $sql = "DELETE FROM tbl_category WHERE id=$id";

        // Execute the query
        $res = mysqli_query($conn, $sql);
        
        //  Check whether the data is delete from  database or not
        if($res==TRUE)
        {
            // Set success meesage and redirect
            $_SESSION['delete'] = "<div class='success'>Category Deleted Successfully.</div>";
            // Redirect to Manage Category
            header("location:".SITEURL. 'admin/manage-category.php');


        }
        else
        {
            // Set fail message and redirect
               $_SESSION['delete'] = "<div class='error'>Failed to Delete Category.</div>";
               // Redirect to Manage Category
               header("location:".SITEURL. 'admin/manage-category.php');
        }

        // Redirect to Manage Category page with message

    }
    else
    {
        // Redirect to Manage Category page 
        header("location:".SITEURL. 'admin/manage-category.php');
    }
?>