<?php include('partials-front/menu.php');?>

<?php
    // Check whether id is passed  or not
    if(isset($_GET['food_id']))
    {
        //get the food id and details of the selected food
        $food_id = $_GET['food_id'];
        //get the details for all food
        $sql = "SELECT * FROM tbl_food WHERE id=$food_id";
        // Execute the Query
        $res = mysqli_query($conn, $sql);
        //count the rows
        $count = mysqli_num_rows($res);
        // Check whether foods are available or not
        if($count==1)
        {
            // Foods available
            //get the data
            $row=mysqli_fetch_assoc($res);
            $title = $row['title'];
            $price = $row['price'];  
            $image_name = $row['image_name'];
        }
        else
        {
            //  Foods not available
            header("location:".SITEURL); 
        }

    }
    else
    {
        //redirect to the home page
       header("location:".SITEURL); 
    }




?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-black">Fill this form to confirm your order.</h2>

            <form action="" method = "POST" class="order">
                <fieldset>
                    <legend>Selected Cake</legend>

                    <div class="food-menu-img">
                        <?php
                             // Check whether image is available or not
                            if($image_name=="")
                            {
                                //  Image not Available
                                echo "<div class='error'>Image not Available.</div>";
                            }
                            else
                            {
                                // Image  Available
                                ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chocolate Cake" class="img-responsive img-curve">
                                <?php
                            }

                        ?>
                       
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo $title; ?></h3>
                        <input type="hidden" name="food" value= "<?php echo $title; ?>">

                        <p class="food-price">₹<?php echo $price; ?></p>
                        <input type="hidden" name="price" value= "<?php echo $price; ?>">


                        <div class="order-label-qty">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Shreya Choudhury" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. abc@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

            <?php
            //check whether submit button is clicked or not
            if(isset($_POST['submit']))
            {
                //get all the details from the from
                $food = $_POST['food'];
                $price = $_POST['price'];
                $qty = $_POST['qty'];

                $total = $price * $qty; //total= price x qty

                //$order_date = date("Y-m-d h:i:sa"); //order date and time
                date_default_timezone_set('Asia/Kolkata');
                $order_date = date('Y-m-d H:i:s');


                $status = "ordered"; // ordered ,on delivery, delivered , canceled

                $customer_name = $_POST['full-name'];
                $customer_contact = $_POST['contact'];
                $customer_email = $_POST['email'];
                $customer_address = $_POST['address'];

                //save the order  in database
                //creat sql
                $sql2 = "INSERT INTO tbl_order SET
                    food = '$food',
                    price = $price,
                    qty = $qty,
                    total = $total,
                    order_date = '$order_date',
                    status = '$status',
                    customer_name ='$customer_name',
                    customer_contact = '$customer_contact',
                    customer_email = '$customer_email',
                    customer_address = '$customer_address'


                ";
                // Execute the Query
                 $res2 = mysqli_query($conn, $sql2);
                
                //check whether the query executed successfully or not
                if($res2==true)
                {
                    //query executed and order saved
                    $_SESSION['order'] = "<div class='success text-center'>Order Placed Successfully.</div>";
                    header("location:".SITEURL);
                }
                else
                {
                    //failed to save order
                    $_SESSION['order'] = "<div class='error text-center'>Failed to order Cake.</div>";
                    header("location:".SITEURL);

                }


            }

            ?>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <?php include('partials-front/footer.php');?>