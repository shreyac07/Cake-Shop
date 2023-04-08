<?php
    // Include Constants file
    include('../config/constants.php');

    //echo "delete ";
    // Check whether the id and image_name is set or not
    if(isset($_GET['id']) && isset($_GET['image_name'])) //either use && or AND
    {
        //process to delete
       // echo" process to delete";

       //1.get id and image name
       $id = $_GET['id'];
       $image_name = $_GET['image_name'];

       //2.Remove the physical image file is available
       if($image_name != "")
       {
           // Image is available. So remove it.
           $path = "../images/food/".$image_name;
           // Remove the image
           $remove = unlink($path);
           // If failed to remove image then add an error message and stop the process
           if($remove==FALSE)
           {
               // Set the SESSION message
               $_SESSION['upload'] = "<div class='error'>Failed to Remove Food Image.</div>";
               //  Redirect to Manage food page 
               header("location:".SITEURL. 'admin/manage-food.php');
               // Stop the process
               die();
           }
       }

       //3. Delete data from database
       // SQL query to delete data from database
       $sql = "DELETE FROM tbl_food WHERE id=$id";

       // Execute the query
       $res = mysqli_query($conn, $sql);

       //  Check whether the data is delete from  database or not
       //4.Set session meesage and redirect
       if($res==TRUE)
        {
            // Set success meesage and redirect
            $_SESSION['delete'] = "<div class='success'>Food Deleted Successfully.</div>";
            // Redirect to Manage Category
            header("location:".SITEURL. 'admin/manage-food.php');


        }
        else
        {
            // Set fail message and redirect
               $_SESSION['delete'] = "<div class='error'>Failed to Delete Food.</div>";
               // Redirect to Manage Category
               header("location:".SITEURL. 'admin/manage-food.php');
        }

       
    }
    else
    {
        //redirect to manage food page
        //echo " redirect";
        $_SESSION['unauthorize'] = "<div class='error'>Unauthorized accsee.</div>";
         // Redirect to Manage Category
        header("location:".SITEURL. 'admin/manage-food.php');
    }

?>