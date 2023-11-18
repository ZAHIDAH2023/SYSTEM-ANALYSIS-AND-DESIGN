<?php include('partials/navbar.php'); ?>
<!-----------------------------Content------------------------------>
<div class="main-content">
    <div class="wrapper">
        <h1>Reservation Details</h1>

        <br /><br />


                <br /><br /><br />

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                ?>
                <table class="tbl-full">
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Total Person</th>

                    </tr>
                    <?php  
                        //Create SQL query to get all items
                        $sql = "SELECT * FROM reservation";

                        //Execute query
                        $res = mysqli_query($conn, $sql);

                        if($res == TRUE)
                        {
                            //Have items in Database
                            //get fitems from database and display
                            $count = mysqli_num_rows($res);
                            $sn = 1;
                            if($count>0)
                            {
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    // get the values from individual column
                                    $id = $row['id'];
                                    $cust_name = $row['cust_name'];
                                    $phone_num = $row['phone_num'];
                                    $date = $row['date'];
                                    $time = $row['time'];
                                    $num_person = $row['num_person'];
    
    
                                    ?>
                                        <tr>
                                            <td><?php echo $sn++; ?>.</td>
                                            <td><?php echo $cust_name; ?></td>
                                            <td><?php echo $phone_num; ?></td>
                                            <td><?php echo $date; ?></td>
                                            <td><?php echo $time; ?></td>
                                            <td><?php echo $num_person; ?></td>
                                        </tr>
            
                                    <?php
                                }
                            }
                            else
                            {
                                // Food not added in database
                                echo "<tr><td colspan='5' class='error'>Reservation not Added Yet.<td></tr>";
                            }
                        }
                           
                    
                    ?>
                    
                </table>
    </div>
</div>
