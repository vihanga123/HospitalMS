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
    $staffid = $_POST['staffid'];
    $psw = $_POST['psw'];
 
    $query="insert into staff(StaffNO,First_Name,Last_Name,Age,StaffID,Password) values('','$fname','$lname','$age','$staffid','$psw')";
    $run = mysqli_query($conn,$query) or die(mysqli_error($conn));
    if ($run){
        echo " Data inserted successfully";
    }
    else{
        echo "Failed to insert";
    }
    //if(!($dbconnect)){
    //    echo "Failed to connect";
    //}
    //else{
    //    echo "Connection Successfull";
    //}
    }
?>