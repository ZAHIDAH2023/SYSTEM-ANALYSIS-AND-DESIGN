<?php include('partials/navbar.php'); ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        extract($_POST);
        echo "<script language='javascript' type='text/javascript'>
            alert('Your reservation has been successfully processed. Should any modifications be necessary, we will promptly get in touch with you.')
            </script>";
    }
    ?>
</body>
</html>