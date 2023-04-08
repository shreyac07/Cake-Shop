<?php include('partials/menu.php'); ?>

 <!-- Main content section starts -->
 <div class = " main-content">
        <div class = "wrapper">
            <h1>Manage Order</h1>
            
        </br> </br>  </br>
        <?php
            if(isset($_SESSION['update']))  //  Checking whether the Session is set or not
            {
                echo $_SESSION['update'];   //  Display Session  Message if SET
                unset($_SESSION['update']);   //  Remove Session Message 
            }

        
        ?>


        </br> </br>
            <table class = "tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>&nbsp Food Name</th>
                    <th>Total Price </th>
                    <th>Total Qty.</th>
                    <th>Total Amount</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Customer Name</th>
                    <th>Customer Contact</th>
                    <th>Customer Email</th>
                    <th>Customer Address</th>
                    <th>Actions</th>

                </tr>
                <?php
                //get all the order from database
                $sql = "SELECT * FROM tbl_order ORDER BY id DESC";//desplay latest order at first
                 // Execute the Query
                 $res = mysqli_query($conn, $sql);
                 //count the rows
                 $count = mysqli_num_rows($res);

                 $sn=1; //creat serial no. 

                 if($count>0)
                 {
                     //order available
                     while($row=mysqli_fetch_assoc($res))
                     {
                         //get all the order
                         $id = $row['id'];
                         $food = $row['food'];
                         $price = $row['price'];
                         $qty = $row['qty'];
                         $total = $row['total'];
                         $order_date = $row['order_date'];
                         $status = $row['status'];
                         $customer_name = $row['customer_name'];
                         $customer_contact = $row['customer_contact'];
                         $customer_email = $row['customer_email'];
                         $customer_address = $row['customer_address'];

                         ?>

                            <tr>
                                <td><?php echo $sn++; ?>.</td>
                                <td><?php echo $food; ?></td>
                                <td>₹<?php echo $price; ?></td>
                                <td><?php echo $qty; ?></td>
                                <td>₹<?php echo $total; ?></td>
                                <td><?php echo $order_date; ?></td>

                                <td>
                                    <?php
                                    if($status=="Ordered")//orered,on delivrry,delivered,cancelled
                                    {
                                        echo "<lable>$status</lable>";
                                    }
                                    elseif($status=="On Delivery")
                                    {
                                        echo "<lable style= 'color:orange;'>$status</lable>";
                                    }
                                    elseif($status=="Delivered")
                                    {
                                        echo "<lable style= 'color:green;'>$status</lable>";
                                    }
                                    elseif($status=="Cancelled")
                                    {
                                        echo "<lable style= 'color:red;'>$status</lable>";
                                    }
                                    ?>
                                </td>

                                <td><?php echo $customer_name; ?></td>
                                <td><?php echo $customer_contact; ?></td>
                                <td><?php echo $customer_email; ?></td>
                                <td><?php echo $customer_address; ?></td>
                                <td>
                                <!-- <a href="<?php echo SITEURL; ?>admin/update-order.php?id=<?php echo $id; ?>" class="btn-secondary">Update Order</a> -->
                                <a href="<?php echo SITEURL; ?>admin/update-order.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-secondary">Update Order</button></a>
                            
                                </td>
                            </tr>


                        <?php


                     }
                 }
                 else
                 {
                     //order not available
                     echo "<tr><td colspan ='12' class='error'>Order not Available.</td></tr>";
                 }

                ?>
                
               
            </table>
            
        </div>
        </div>
       
        <!-- Main content section ends -->

<?php include('partials/footer.php'); ?>