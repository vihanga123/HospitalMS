<?php
session_start();
$server="localhost";
$username="root";
$password="";
$dbname = "arogya";



if($_SERVER["REQUEST_METHOD"]=="POST") {
    // get the post records
    $doctor = $_POST['doctor'];
    $_SESSION["doctor"]=$doctor;
    $date = $_POST['date'];
    $_SESSION["date"]=$date;
    $specialty= $_SESSION["specialty"];
    $doctorid= $_SESSION["doctor"];
    $uname =$_SESSION["uname"];
    $psw =$_SESSION["psw"];



    $conn=mysqli_connect($server,$username,$password,$dbname);
    $query="select USERID from user_reg where Username= '$uname' and Password= '$psw'";
    //$query="insert into appointment(AppointmentID,UserID,DoctorID,SpecialityID,Date) values('','$fname','$lname','$age','$uname','$psw')";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){
      $uid= $row['USERID'];
  }
  $query="insert into appointment(AppointmentID,UserID,DoctorID,SpecialityID,Date) values('','$uid','$doctorid','$specialty','$date')";
  $run = mysqli_query($conn,$query) or die(mysqli_error($conn));
  if ($run){
      echo " Successfully Booked";
  }
  else{
      echo "Failed to book";
  }
}

    /*$run = mysqli_query($conn,$query) or die(mysqli_error($conn));
    if ($run){
        echo $uid;
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
*/