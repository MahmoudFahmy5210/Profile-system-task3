<?php
session_start();
include 'ConnDB.php';
$USERA=$_SESSION['admin'];
$conn_email= mysqli_query($connDb, "SELECT email FROM users WHERE username ='$USERA'") or die("Error: " . mysqli_error($connDb));
$rowemail=mysqli_fetch_assoc($conn_email);
$conn_ad= mysqli_query($connDb, "SELECT address FROM users WHERE username ='$USERA'") or die("Error: " . mysqli_error($connDb));
$rowaddress=mysqli_fetch_assoc($conn_ad);
$conn_age= mysqli_query($connDb, "SELECT age FROM users WHERE username ='$USERA'") or die("Error: " . mysqli_error($connDb));
$rowage=mysqli_fetch_assoc($conn_age);
$conn_fac= mysqli_query($connDb, "SELECT faculty FROM users WHERE username ='$USERA'") or die("Error: " . mysqli_error($connDb));
$rowfac=mysqli_fetch_assoc($conn_fac);
$conn_univer= mysqli_query($connDb, "SELECT university FROM users WHERE username ='$USERA'") or die("Error: " . mysqli_error($connDb));
$rowuniver=mysqli_fetch_assoc($conn_univer);
$conn_fn= mysqli_query($connDb, "SELECT fullname FROM users WHERE username ='$USERA'") or die("Error: " . mysqli_error($connDb));
$rowfn=mysqli_fetch_assoc($conn_fn);
//<?php echo($conn_ad);

require 'profile.php';
?>