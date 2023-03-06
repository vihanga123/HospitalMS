<html>
    <head>
        <link rel="stylesheet" href="default.css">
        <title>Our Doctors</title>
    </head>
    <body>
        <div class="topnav">
            <a href="http://localhost/hnd_feb-mar/webdoc/">Home</a>
            <h1>Our Doctors</h1>
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
                $doctorid = $_POST['doctor'];
                $_SESSION["doctor"]=$doctorid;
                $conn=mysqli_connect($server,$username,$password,$dbname);
                $query = "select * from doctors where DoctorID = '$doctorid'";
                //$query="select * from doctors";
                $result=mysqli_query($conn,$query); 
                echo "<table border='1'>
                <tr>
                <th>Full Name</th>
                <th>Address</th>
                <th>Age</th>
                <th>Gender</th>
                </tr>";
                
                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['FullName'] . "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['Age'] . "</td>";
                echo "<td>" . $row['Gender'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
                
                }
                 ?>
