<?php include('../config/constants.php');?>

<html>
    <head>
    <style>
        html,
        body {
        height: 100%;
        }
        a{
        text-decoration: none;
        color: #ff4757;
        }
        body {
            /* background-color: #d7e3fc; */
            /* background-image: url("https://images.unsplash.com/photo-1614088439978-9be39d87d81a?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxOHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"); */
        background-image:  url(../images/cake.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center;
        background-attachment:fixed;
        }
        .btn-info{
            background-color: yellow;
            padding: 1%;
            color: black;
            text-decoration: none;
            font-weight: bold;
            
        }
        .btn-info:hover{
            background-color: orange;
        }
        .btn-primary{
    background-color: #1e90ff;
    padding: 1%;
    color: white;
    text-decoration: none;
    font-weight: bold;
    width: 60px;
    height: 30px;
    border-radius:8px;
    transition:background-color 0.15s;
}
    
.btn-primary:hover{
    background-color: #3742fa;
}

    </style>

        <title>Login- Food order system</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        <div class="login">
        <h1 class="text-center">Login</h1>
            <br/><br/>
                <?php
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];//display session message for login
                        unset($_SESSION['login']);//revoming session messege
                    }
                    if(isset($_SESSION['no-login-message']))
                    {
                        echo $_SESSION['no-login-message'];//display session message for no login
                        unset($_SESSION['no-login-message']);//revoming session messege
                    }
                ?>
            <br/><br/>
            <!-- login form starts  -->
            <form action="" method="POST" class="text-center">
                <strong>Username:</strong><br/><br>
                <input type = "text" name ="username" placeholder="Enter username" class="use"><br/><br/>
                <strong>Password:</strong><br/><br>
                <input type = "password" name ="password" placeholder="Enter password"  class="use"><br/><br/>
                <input type = "submit" name ="submit" value="login" class="btn-primary">

                <a href="<?php echo SITEURL; ?>"><button type="button" name="button" class=" btn-info">Back</button></a>
                <br/><br/>
            </form>
            <!-- login form ends  -->
            <h4 style ="font-weight:200"><b style ="color:#ff4757"> Baker’s Delight </b>,Designed By <a href="#">Shreya Choudhury</a></h4>

         </div>
    </body>
</html>

<?php
 //check weather the submit botton is click or not
 if(isset($_POST['submit']))
    {
        //process the login
        //1.get the data from the form
        $username=$_POST['username'];
       // $username=mysqli_real_escape_string($conn, $_POST['username']);

        $password=md5($_POST['password']);
       // $password=mysqli_real_escape_string($conn, $raw_password); 

        //2.check weather the user and password exist or not
        $sql="SELECT * FROM tbl_admin  WHERE username='$username' AND password='$password'";

        //3.execute the query
        $res = mysqli_query($conn,$sql); 
        //4.count rows check weather user exits  or not
        $count = mysqli_num_rows($res);
        if($count==1)
        {
            //user  available and login success
            $_SESSION['login']="<div class ='success'>Login Successfully</div>"; 
            $_SESSION['user']=$username;//to check whether user logged in or not and logout will unset it

            //redirect page to home page/dashboard
            header("location:".SITEURL.'admin/');
        }
        else
        {
            //user not available and login failed 
            $_SESSION['login']="<div class ='error text-center'>Login failed.<br/>Username and Password did not match.</div>"; 
            //redirect page to home page/dashboard
            header("location:".SITEURL.'admin/login.php');
        }
    }

?>