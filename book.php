<?php include('partials/navbar.php'); ?>
<!-----------------------------Content------------------------------>
       <section class="banner">
           <h2>BOOK YOUR TABLE NOW</h2>
           <div class="card-container">

           <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
            ?>

               <div class="card-img">
                <!-- image here -->
               </div>

               <div class="card-content">
                   <h3>Reservation</h3>
                   <form action="" method="POST" >
                       <div class="form-row">
                        <input type="date" name="date" class="form-control select-date">
                        
                        <input type="time" name="time" min="10:00" max="21:30" placeholder="Time">
                        </div>

                        <div class="form-row">
                            <input type="text" name="cust_name" placeholder="Full Name">
                            <input type="text" name="phone_num" placeholder="Phone Number">
                        </div>

                        <div class="form-row">
                            <input type="number" name = "num_person" placeholder="How Many Persons?" min="1">
                            <input type="submit" name="submit" value="BOOK TABLE">
                        </div>

                           </form>

                        <?php

                            if(isset($_POST['submit']))
                            {
                                $cust_name = $_POST['cust_name'];
                                $phone_num = $_POST['phone_num'];
                                $date = $_POST['date'];
                                $time = $_POST['time'];
                                $num_person = $_POST['num_person'];

                                $sql = "INSERT INTO reservation SET
                                cust_name = '$cust_name',
                                phone_num = $phone_num,  
                                date = '$date',
                                time = '$time',  
                                num_person = $num_person                       
                            ";

                                $res = mysqli_query($conn,$sql) or die(mysqli_error());


                                if($res == true)
                                {
                                    $_SESSION['add'] = "<div class='success'>Reservation Added Successfully</div>";
                                    header('location:'.SITEURL.'reservation.php');
                                }
                                else
                                {
                                    $_SESSION['add'] = "<div class='error'>Failed Added.</div>";
                                    header('location:'.SITEURL.'reservation.php');
                                }
                            }

                        ?>

                           
                        </div>
               </div>
         </section>
   </body>
</html>