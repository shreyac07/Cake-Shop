<?php include('partials/menu.php'); ?> 
    <!-- Main content section starts -->
    <div class = " main-content">
            <div class = "wrapper">
                <h1>Change Password</h1>
                </br>  </br>

                <?php
                    if(isset($_GET['id']))
                    {
                    $id= $_GET['id'];
                    }

                ?>
                <form action="" method="POST">
                    <table class = "tbl-30">
                        <tr>
                            <td>Current Password:</td>
                            <td><input type = "password" name ="current_password"  placeholder="Current Password"  ></td>
                        </tr>
                        <tr>
                            <td>New Password:</td>
                            <td><input type = "password" name ="new_password"  placeholder="New Password" ></td>
                        </tr>
                        <tr>
                            <td>Confirm Password:</td>
                            <td><input type = "password" name ="confirm_password"  placeholder="Confirm Password"></td>
                        </tr>
                        <tr>
                            
                            <td colspan="2">
                            <input type = "hidden"name ="id" value="<?php echo $id; ?>">
                            <input type = "submit" name ="submit" value="Change Password" class="btn-secondary">
                            </td>
                        </tr>


                    </table>
                </form>

            </div>
    </div>
        <?php
            //check whether the submit button click or not
            if(isset($_POST['submit']))
            {
                    // echo"Button Clicked";
                    //1.get all the data from the form
                    $id=($_POST['id']);
                    $current_password=md5($_POST['current_password']);
                    $new_password=md5($_POST['new_password']);
                    $confirm_password=md5($_POST['confirm_password']);

                    //2.check whether the user id and current password exist or not
                    $sql="SELECT * FROM tbl_admin  WHERE id=$id AND password='$current_password'";

                    //execute the query
                    $res = mysqli_query($conn,$sql); 
                    
                    if($res==true)
                    {
                        //whether the data available or not
                        $count = mysqli_num_rows($res);
                    
                        if($count==1)
                        {
                            //user exists and password can be changde
                            //echo"User found ";

                            //check whether the new and confirm password match or not
                            if($new_password==$confirm_password)
                            {
                                //update password
                                //echo"password is matched ";
                                $sql2="UPDATE tbl_admin SET
                
                                password='$new_password' 
                                WHERE id=$id
                                    ";
                                    //execute the query
                                    $res2 = mysqli_query($conn, $sql2); 
                                    //check whether the query executed successfully or not
                                if($res2==true)
                                {
                                    //query executed and Password changed
                                    $_SESSION['change-pwd']="<div class ='success'>Password changed Successfully</div>";
                                    //redirect page to manage admin
                                    header("location:".SITEURL.'admin/manage-admin.php');
                        
                                }
                                
                                else
                                {
                                    //failed to change passwodr
                                    $_SESSION['change-pwd']="<div class ='error'>Failed to change passwodr</div>";
                                    //redirect page to manage admin
                                    header("location:".SITEURL.'admin/manage-admin.php');
                        
                                }

                            }
                            else
                            {
                                // the new and confirm password dose not match  set message and redirect 
                                $_SESSION['pwd-not-match']="<div class ='error'>Password dose not match </div>";
                                header("location:".SITEURL.'admin/manage-admin.php');
                            }
                                
                        }
                        else
                        {
                            // user dose not exists set message and redirect 
                            $_SESSION['user-not-found']="<div class ='error'>User Not Found</div>";
                            header("location:".SITEURL.'admin/manage-admin.php');
            
                        }
                    }
                    
            

                    //3.check whether the new and confirm password match or not

                    //4.change password if all above is true
                    
            }
        ?>
<?php include('partials/footer.php'); ?>