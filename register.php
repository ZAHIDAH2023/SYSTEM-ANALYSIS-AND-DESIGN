<?php include('partials/navbar.php'); ?>
<?php include('server.php') ?>
        <div class="center">
            <h1>Register </h1>
            <form method="POST" action="register.php">
            <div class="textbox">
                <?php include('errors.php'); ?>
                <label>Username: </label>
                <input type="text" name="username" value="<?php echo $username; ?>">
            </div>

            <div class="textbox">
                <label>Email: </label>
                <input type="email" name="email" value="<?php echo $email; ?>" >
            </div>
            <div class="textbox">
                <label>Password: </label>
                <input type="password" name="password_1" >
            </div>
            <div class="textbox">
                <label>Confirm Password: </label>
                <input type="password" name="password_2" >
            </div>

            <div><button type="submit" name="reg_user" >Register</button></div>
            
            </form>
        </div>
    </body>
</html>