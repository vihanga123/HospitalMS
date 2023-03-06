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
              <form name="PatientInfo2" method="POST" action="PatientInfo2.php">
              <hr>
              <label for="patient"><b>Select a User</b></label>
              <select name="patient" id="patient" class="sel1">
              <?php
                session_start();
                $server="localhost";
                $username="root";
                $password="";
                $dbname = "arogya";
                $_SESSION["patient"]=$patientid;

                $conn=mysqli_connect($server,$username,$password,$dbname);
                $query = "select * from user_reg";
                //$query="select * from doctors";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($result)){
                ?>
                <option value="<?php echo $row['UserID'];?>"><?php echo $row['Username'];?>
                <?php }
              
                 ?>
                  </select>
               
                
                <br>
              <button type="submit" name="submit" id="submit" class="btn">Get details</button>
              </div>
          
           
<?php