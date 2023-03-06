<?php
session_start();
$server="localhost";
$username="root";
$password="";
$dbname = "arogya";

$conn=mysqli_connect($server,$username,$password,$dbname);

if($_SERVER["REQUEST_METHOD"]=="POST") {
    // get the post records
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];
    $_SESSION["uname"]=$uname;
    $_SESSION["psw"]=$psw;

 
    $query="select USERID from user_reg where Username= '$uname' and BINARY Password= '$psw'";
    $run = mysqli_query($conn,$query);
    $count=mysqli_fetch_array($run,MYSQLI_ASSOC);
    $data = mysqli_num_rows($run);
    if ($data==1){

        header("location: BookAppointment.html");
    }
    else{
        echo "Invalid Login";
    }
    //if(!($dbconnect)){
    //    echo "Failed to connect";
    //}
    //else{
    //    echo "Connection Successfull";
    //}
    }
?>