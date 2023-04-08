<?php include('partials/menu.php'); ?> 

<div class = " main-content">
        <div class = "wrapper">
            <h1>Add Admin</h1>
            </br>  </br>

            <?php
            if(isset($_SESSION['add']))//cheaking weather the session set or not
            {
                echo $_SESSION['add'];//display session message if set
                unset($_SESSION['add']);//revoming session messege
            }
            
            ?>
            <form action="" method="POST">
            <table class = "tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type = "text" name ="full_name" placeholder="Enter name"></td>
                </tr>
                <tr>
                    <td>User Name:</td>
                    <td><input type = "text" name ="username" placeholder="Enter username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type = "password" name ="password" placeholder="Enter password"></td>
                </tr>
                <tr>
                   
                    <td colspan="2"><input type = "submit" name ="submit" value="Add Admin" class="btn-secondary"></td>
                </tr>
                </table>




            </form>
        </div>
</div>

<?php include('partials/footer.php'); ?>

<?php 
        //process the value from and save the data base
        //check weather the submit botton is click or not
       
        if(isset($_POST['submit']))
        {
            // (button clicked) echo "Button clicked"; 
             // else  {(button not clicked ) echo "Button  not clicked" ; }

            // 1.get the data from form
            $full_name=$_POST['full_name'];
            $username=$_POST['username'];
            $password=md5($_POST['password']);  //password encryption with md5

        
        
            //2.SQL Query to save the database
            $sql="INSERT INTO tbl_admin SET
            --  column name='value from the form' 
            full_name ='$full_name',  
            username='$username',
            password='$password'
            ";       
            
        
            // 3.execute query and save the data in data base
            $res=mysqli_query($conn, $sql) or die (mysqli_error()); //  if exucute fail thendie for stop the proccess and mysqli_error() display the message
            //mysqli_query($conn, $sql) it execute the query and move on for another process
        
            //4. check weather the ( query is exucuted )data is inserter or not and display appropiate message
            if($res==TRUE)
            {
                //query executed successfully and admin added
                //echo" Data inserted";
                //creat a session variable to display message
                $_SESSION['add']="<div class ='success'>Admin Added Successfully</div>";
                //redirect page to manage admin
                header("location:".SITEURL.'admin/manage-admin.php');

                
            }
            else
            {
                //failed to add admin
                // echo" Fail to  insert data" ;
                //creat a session variable to display message
                $_SESSION['add']="<div class='error'>Failed to Add Admin</div>";
                //redirect page to add admin
                header("location:".SITEURL.'admin/add-admin.php');

            }

        }                                                           
?>
        
       
       
        
 
        