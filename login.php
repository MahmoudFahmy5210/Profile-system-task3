<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>IEEE Task3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/login.css" />
    </head>

    <body>
        <div class="container"></div>
        <div class="logo">
            <img src="images/1-Logo2x.png">
        </div>
        <div class="loginbox">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="inputBox">
                    <label>Username/Email</label>
                    <input type="text" name="username" required>
                </div>
                <div class="inputBox">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>

                <label class="checklabel">Remember me
                    <input class="checkbox" type="checkbox" name="">
                    <span class="checkmark"></span>
                </label>
                <p class="error">
                    <?php
                    echo ($error);
                    ?>
                </p>
                <input type="submit" name="submit" value="LogIn">
            </form>
            <div class="account">
                <a class="register-link" href="registerBack.php">Don`t have account? Register here</a>
            </div>
        </div>
    </body>

</html>