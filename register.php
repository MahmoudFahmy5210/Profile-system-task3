<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>IEEE Task3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/register.css" />
    </head>

    <body>
        <div class="container"></div>
        <div class="logo">
            <img src="images/1-Logo2x.png">
        </div>
        <div class="registerbox">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="inputBox">
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="inputBox">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="inputBox">
                    <input type="text" name="fullname" placeholder="Full Name">
                </div>
                <div class="inputBox">
                    <input type="text" name="address" placeholder="Address">
                </div>
                <div class="inputBox">
                    <input type="number" name="age" placeholder="Age" maxlength="2" min="0" max="99">
                </div>
                <div class="inputBox">
                    <input type="text" name="univer" placeholder="University">
                </div>
                <div class="inputBox">
                    <input type="text" name="faculty" placeholder="Faculty">
                </div>
                <p class="error">
                   <?php
                   echo $usernameerr."<br>";
                   echo $emailerr."<br>";
                   echo $passerr."<br>";
                   echo $fullnameerr."<br>";
                   echo $aderr."<br>";
                   echo $agerr."<br>";
                   echo $facultyerr."<br>";
                   echo $univererr."<br>";
                   ?>
                </p>
                <input type="submit" name="submit" value="Register">
            </form>
        </div>
    </body>

</html>