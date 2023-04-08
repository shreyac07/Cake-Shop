<?php
//Access Control - Authorization
//to check whether user logged in or not
if(!isset($_SESSION['user']))//if user session is not set
{
    //if user is not log in redirect to login page with message
    $_SESSION['no-login-message']="<div class ='error text-center'>Please login to access Admin Panel.</div>"; 
    header("location:".SITEURL.'admin/login.php');
}
    

?>