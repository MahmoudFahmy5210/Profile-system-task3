<?php
session_start();
include 'ConnDB.php';
$usernameerr=$emailerr=$passerr=$fullnameerr=$aderr=$agerr=$facultyerr=$univererr="";
if(isset($_POST['submit']))
{

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$address=$_POST['address'];
$age=$_POST['age'];
$university=$_POST['univer'];
$faculty=$_POST['faculty'];
$acceptun= $acceptfn=$accepte=$acceptp=$acceptad=$acceptage=$acceptuniver=$acceptfac=false;

//كده احنا خدنا ال اليوزر كتبه
//_______________________________________check Username __________________________

    if (!preg_match("/^[a-z\d_]{5,20}$/i" , $username )){
        $usernameerr="Used Letters followed by numbers , you can use _ character";
    }
    else{
        $query1= mysqli_query($connDb, "SELECT * FROM users WHERE username LIKE'$username'")or die(mysqli_error($connDb));
        if(mysqli_num_rows($query1) == true) {
            $usernameerr = "This username is found , please choose another username";
            $acceptun = false;
        }
        else{
            $acceptun=true;
        }
    }
//__________________________________________check email ______________________________
    if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,10}$/",$email))
    {
        $emailerr="*example@gmail.com";
    }
    else {
        $query1= mysqli_query($connDb, "SELECT * FROM users WHERE email LIKE'$email'")or die(mysqli_error($connDb));
        if(mysqli_num_rows($query1) == true) {
            $emailerr = "This email is found , please choose another email";
            $accepte = false;
        }
        else{
            $accepte=true;
        }

    }
//____________________________________________check password____________________ _________________

    if(!preg_match("/^[a-zA-Z0-9]\w{7,15}$/",$password))
    {
        $passworderr="*Weak password , use letters,numbers and underscore range between 7 and 15 characher ";
        $acceptp=false;
    }
    else
    {
        $acceptp=true;
    }

//___________________________________________check fullname____________________________________
    if(!preg_match("/^[a-zA-Z ]*$/", $fullname))
    {
        $fullٍSnameerr="*Name may contain letters and whitespace only ";
    }
    else
    {
        $acceptfn=true;
    }
//______________________________________________address______________________________
     if(preg_match("/^[A-Za-z0-9]+/",$address))
{
$acceptad=true;
}
else
{
$aderr="*Invalid address use letter only";
}
//_____________________________________________age________________________________________
if(preg_match("/^[0-9]+$/",$age))
{
$acceptage=true;
//  echo'error_6';
}
else
{
$agerr="*Invalid Age use number only max 100 and min 5 only";
//echo'error6';
}

//_____________________________________________University________________________________________
if(preg_match("/^[a-zA-Z ]*$/",$university))
{
$acceptuniver=true;
//echo'error_7';
}
else
{
$univererr="*Invalid , you can use letter and whitespace ";
//echo'error7';
}

//_____________________________________________Faculty________________________________________
if(preg_match("/^[a-zA-Z ]*$/",$faculty))
{
$acceptfac=true;
//echo'error_8';
}
else
{
$facultyerr="*Invalid , you can use letter and whitespace";
//echo'error8';
}
$accepteness=array($acceptp,$accepte,$acceptun,$acceptfn,$acceptage,$acceptuniver,$acceptfac,$acceptad);
$error=false;
foreach ($accepteness as $val){
    if(!$val==true){
        $error=true;
        break;
    }
}
if ( $error==false)
    {
// echo"all accept";
$_SESSION['admin']=$username;
$GoToDB="INSERT INTO users(fullname,username,email,password,address,age,university,faculty)VALUES('$fullname','$username','$email','$password','$address','$age','$university','$faculty')";
mysqli_query($connDb, $GoToDB)or die(mysqli_error($connDb));
header("Location: profileBack.php");
    }
}
require'register.php';
?>