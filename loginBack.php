<?php
session_start();
include 'ConnDB.php';
$error="";
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query=" SELECT * FROM users WHERE username='$username' AND password='$password' ";
    $result= mysqli_query($connDb, $query)or die(mysqli_error($connDb));
    $check= mysqli_fetch_array($result);
    if(isset($check)== true)
    {
        $_SESSION['admin']=$username;
        header('location: profileBack.php');
        // header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    }
    else
    {
        $error="If you havn't email , please sign up ";
    }
}
require 'login.php';
?>