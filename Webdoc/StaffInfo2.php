<html>
    <head>
        <link rel="stylesheet" href="default.css">
        <title>Staff Details</title>
    </head>
    <body>
        <div class="topnav">
            <a href="http://localhost/hnd_feb-mar/webdoc/">Home</a>
            <h1>Staff Details</h1>
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
                $staffid = $_POST['staff'];
                $_SESSION["staff"]=$staffid;
                $conn=mysqli_connect($server,$username,$password,$dbname);
                $query = "select * from staff where StaffNO = '$staffid'";
                //$query="select * from doctors";
                $result=mysqli_query($conn,$query); 
                echo "<table border='1'>
                <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Staff ID</th>
                <th>Password</th>
                </tr>";
                
                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['First_Name'] . "</td>";
                echo "<td>" . $row['Last_Name'] . "</td>";
                echo "<td>" . $row['Age'] . "</td>";
                echo "<td>" . $row['StaffID'] . "</td>";
                echo "<td>" . $row['Password'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
                
                }
                 ?>
