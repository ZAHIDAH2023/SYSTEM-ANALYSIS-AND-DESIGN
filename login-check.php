<?php

    //Authorization - Access Control
    //Check whether the user is logged in or not
    if(!isset($_SESSION['user']))//If user is not set
    {
        //User in not logged in
        //Redirect to login page with message
        $_SESSION['no-login-message'] = "<div class='error text-center'>PLease Login to Access Admin Panel.</div>";
        //Redirect to login page
        header('location:'.SITEURL.'index.php');
    }
?>