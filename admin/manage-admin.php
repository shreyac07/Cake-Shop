<?php include('partials/menu.php'); ?> 



        <!-- Main content section starts -->
    <div class = " main-content">
        <div class = "wrapper">
            <h1>Manage Admin</h1>
            </br>  
            <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];//display session message for add
                    unset($_SESSION['add']);//revoming session messege
                }
                if(isset($_SESSION['delete']))
                {
                    echo $_SESSION['delete'];//display session message for delete
                    unset($_SESSION['delete']);//revoming session messege
                }
                if(isset($_SESSION['update']))
                {
                    echo $_SESSION['update'];//display session message for update
                    unset($_SESSION['update']);//revoming session messege
                }
                if(isset($_SESSION['user-not-found']))
                {
                    echo $_SESSION['user-not-found'];//display session message for password
                    unset($_SESSION['user-not-found']);//revoming session messege
                }
                if(isset($_SESSION['pwd-not-match']))
                {
                    echo $_SESSION['pwd-not-match'];//display session message for password
                    unset($_SESSION['pwd-not-match']);//revoming session messege
                }
                if(isset($_SESSION['change-pwd']))
                {
                    echo $_SESSION['change-pwd'];//display session message for password
                    unset($_SESSION['change-pwd']);//revoming session messege
                }
            ?>
            </br></br></br>

        <!-- button to add admin -->
        <a href="add-admin.php" class="btn-primary">Add Admin</a>

        </br> </br>  </br>  
            <table class = "tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>

                </tr>
                <?php
                    //query to get all the admin
                    $sql="SELECT * FROM tbl_admin";
                    //execute the query
                    $res=mysqli_query($conn,$sql);
                    
                    //check weather the query is exucute or noy
                    if($res==TRUE)
                    {
                        //count rows to check weather we have data in the detabase or not 
                        $rows=mysqli_num_rows($res);//function to get all the rows in database
                        $sn=1;//creat a variable to assign the value

                        //check the number of rows
                        if($rows>0)
                        {
                            //we have data in database
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                //using while loop to get all the data from the database and while loop will run as long as we have data in data base
                                //get indivisual data
                                $id=$rows['id'];
                                $full_name=$rows['full_name'];
                                $username=$rows['username'];
                                //display the value in our table
                                ?>
                                <tr>
                                    <td><?php echo $sn++; ?>.</td>
                                    <td><?php echo $full_name; ?></td>
                                    <td><?php echo $username; ?></td>
                                    <td>
                                    <a href="<?php echo SITEURL;?>admin/update-password.php?id=<?php echo $id;?>" class="btn-primary">Change Password</a>   
                                    <a href="<?php echo SITEURL;?>admin/update-admin.php?id=<?php echo $id;?>" class="btn-secondary">Update Admin</a>
                                    <a href="<?php echo SITEURL;?>admin/delete-admin.php?id=<?php echo $id;?>" class="btn-danger">Delete Admin</a>
                                    </td>                 <!-- ? get variable -->
                                </tr>



                                <?php
                            }
                        }
                            else
                            {
                                //we don't have data in database
                            }

                    }
                
                ?>
              
            </table>
            
        </div>
    </div>
       
        <!-- Main content section ends -->

<?php include('partials/footer.php'); ?>

        