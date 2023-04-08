<?php

    //include constant.php file here
    include('../config/constants.php'); 

    //1.get the id of the admin to be deleted
    echo $id=$_GET['id'];

    //2.creat sql query to delete admin
    $sql="DELETE FROM tbl_admin WHERE id=$id";

    //execute the query
    $res = mysqli_query($conn,$sql); 

    //check whether the query executed successfully or not
    if($res==TRUE)
    {
        //query executed successfully and admin deleted
        //echo" Admin deleted";
        //creat session variable to display the message
        $_SESSION['delete']="<div class='success'>Admin deleted Successfully</div>";
        //redirect page to manage admin
        header("location:".SITEURL.'admin/manage-admin.php');


    }
    else
    {
        //failed to delete admin
        // echo"  Failed to delete the admin";
        //creat a session variable to display message
        $_SESSION['delete']="<div class= 'error'>Failed to delet Admin.Try again later.</div>";
        //redirect page to delete admin
        header("location:".SITEURL.'admin/manage-admin.php');

    }
        //3.redirect the manage and admin page with message (success/error)


?>