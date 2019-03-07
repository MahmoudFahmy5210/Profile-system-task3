<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>IEEE Task3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/profile.css" />
    </head>

    <body>
        <div class="container"></div>
        <div class="logo">
            <img src="images/profile.png">
        </div>
        <div class="profilebox">
            <form name="">
                <div class="inputBox">
                    <label>Fullname</label>
                    <input type="text" name="" value="<?php echo $rowfn["fullname"]; ?>" readonly>
                </div>
                <div class="inputBox">
                    <label>Username</label>
                    <input type="text" name="" value="<?php echo $USERA ; ?>" readonly>
                </div>
                <div class="inputBox">
                    <label>Email</label>
                    <input type="text" name="" value="<?php echo $rowemail["email"]; ?>" readonly>
                </div>
                <div class="inputBox">
                    <label>Address</label>
                    <input type="text" name="" value="<?php echo $rowaddress["address"]; ?>" readonly>
                </div>
                <div class="inputBox">
                    <label>Age</label>
                    <input type="text" name="" value="<?php echo $rowage["age"]; ?>"readonly>
                </div>
                <div class="inputBox">
                    <label>University</label>
                    <input type="text" name="" value="<?php echo $rowuniver["university"]; ?>" readonly>
                </div>
                <div class="inputBox">
                    <label>Faculty</label>
                    <input type="text" name="<?php echo $rowfac["faculty"]; ?>" readonly>
                </div>
            </form>
        </div>
    </body>

</html>