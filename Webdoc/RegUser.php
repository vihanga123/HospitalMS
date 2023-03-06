<?php
$server="localhost";
$username="root";
$password="";
$dbname = "arogya";

$conn=mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])){
    // get the post records
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];
 
    $query="insert into user_reg(UserID,First_Name,Last_Name,Age,Username,Password) values('','$fname','$lname','$age','$uname','$psw')";
    $run = mysqli_query($conn,$query) or die(mysqli_error($conn));
    if ($run){
        echo " Data inserted successfully";
    }
    else{
        echo "Failed to insert";
    }

    }
?>