<?php include('partials/navbar.php'); ?>
<?php include('server.php') ?>
        <div class="center">
        <h1>Login </h1>
        <form method="POST" action="login.php">
        <div class="textbox">
            <?php include('errors.php'); ?>
            <label>Username </label>
            <input type="text" name="username">
        </div>

        <div class="textbox">
            <label>Password: </label>
            <input type="password" name="password" >
        </div>
        <button type="submit" name="login_user" >Login</button>
        <div class="Sign_up">Don't have an account? <a href="register.php">Sign up</a></div>

        </div> 
        </form>
        </div>
    </body>
</html>