<html>
    <head>
        <link rel="stylesheet" href="default.css">
        <title>User Details</title>
    </head>
    <body>
        <div class="topnav">
            <a href="http://localhost/hnd_feb-mar/webdoc/">Home</a>
            <h1>User Details</h1>
          </div>
            <div class="container">
              <hr>
              <?php
                session_start();
                $server="localhost";
                $username="root";
                $password="";
                $dbname = "arogya";
                if($_SERVER["REQUEST_METHOD"]=="POST") {
                $patientid = $_POST['patient'];
                $_SESSION["patient"]=$patientid;
                $conn=mysqli_connect($server,$username,$password,$dbname);
                $query = "select * from user_reg where UserID = '$patientid'";
                //$query="select * from doctors";
                $result=mysqli_query($conn,$query); 
                echo "<table border='1'>
                <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Username</th>
                <th>Password</th>
                </tr>";
                
                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['First_Name'] . "</td>";
                echo "<td>" . $row['Last_Name'] . "</td>";
                echo "<td>" . $row['Age'] . "</td>";
                echo "<td>" . $row['Username'] . "</td>";
                echo "<td>" . $row['Password'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
                
                }
                 ?>
