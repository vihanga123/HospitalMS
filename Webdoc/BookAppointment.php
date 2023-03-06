<html>
    <head>
        <link rel="stylesheet" href="default.css">
        <title>Book an Appointment</title>
    </head>
    <body>
        <div class="topnav">
            <a href="http://localhost/hnd_feb-mar/webdoc/">Home</a>
            <h1>Book an Appointment</h1>
          </div>
            <div class="container">
              <form name="AddAppointment" method="POST" action="AddAppointment.php">
              <hr>
              <label for="doctor"><b>Select a Doctor</b></label>
              <select name="doctor" id="doctor" class="sel1">
              <?php
                session_start();
                $server="localhost";
                $username="root";
                $password="";
                $dbname = "arogya";
                if($_SERVER["REQUEST_METHOD"]=="POST") {

                $specialty = $_POST['specialty'];
                $_SESSION["specialty"]=$specialty;


                $conn=mysqli_connect($server,$username,$password,$dbname);
                $query = "select doctors.FullName, doctors.DoctorID from doctors inner JOIN doctors_specialty on doctors.DoctorID = doctors_specialty.DoctorID where doctors_specialty.Speciality_ID = '$specialty'";
                //$query="select * from doctors";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($result)){
                ?>
                <option value="<?php echo $row['DoctorID'];?>"><?php echo $row['FullName'];?>
                    </option>
                <?php }
                }
                else
                {
                  echo "Invalid Login";
                }
                 ?>
                <br>

              <label for="date"><b>Date</b></label>
              <input type="date" name="date" id="date" required>
              <br>
          
                

                  </select>
          
                <br>
              <button type="submit" name="submit" id="submit" class="btn">Set Appointment</button>
              </div>
           
<?php
/*
session_start();
$server="localhost";
$username="root";
$password="";
$dbname = "arogya";

$conn=mysqli_connect($server,$username,$password,$dbname);
$query = "select doctors.FullName from doctors inner JOIN doctors_specialty on doctors.DoctorID = doctors_specialty.DoctorID where doctors_specialty.Speciality_ID = '2'";
if($_SERVER["REQUEST_METHOD"]=="POST") {
    // get the post records
    $specialty = $_POST['specialty'];
    $_SESSION["specialty"]=$specialty;
    //$doctor = $_POST['doctor'];
    //$uname = $_POST['uname'];
    //$psw = $_POST['psw'];
    echo $_SESSION["uname"];
    echo $_SESSION["psw"];
    echo $_SESSION["specialty"];
 /*
    $query="select user_reg.Username, user_reg.Password from user_reg INNER JOIN appointment ON user_reg.userID = appointment.userID where Username= '$uname' and Password= '$psw'";
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
    */
    
?>