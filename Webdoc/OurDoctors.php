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
              <form name="OurDoctors" method="POST" action="OurDoctors2.php">
              <hr>
              <label for="doctor"><b>Select a Doctor</b></label>
              <select name="doctor" id="doctor" class="sel1">
              <?php
                session_start();
                $server="localhost";
                $username="root";
                $password="";
                $dbname = "arogya";
                $_SESSION["doctor"]=$doctorid;

                $conn=mysqli_connect($server,$username,$password,$dbname);
                $query = "select * from doctors";
                //$query="select * from doctors";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($result)){
                ?>
                <option value="<?php echo $row['DoctorID'];?>"><?php echo $row['FullName'];?>
                    </option>
                <?php }
              
                 ?>
                  </select>
               
                
                <br>
              <button type="submit" name="submit" id="submit" class="btn">Get details</button>
              </div>
          
           
<?php