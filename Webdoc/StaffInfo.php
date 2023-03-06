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
              <form name="StaffInfo2" method="POST" action="StaffInfo2.php">
              <hr>
              <label for="staff"><b>Select a Staff Member</b></label>
              <select name="staff" id="staff" class="sel1">
              <?php
                session_start();
                $server="localhost";
                $username="root";
                $password="";
                $dbname = "arogya";
                $_SESSION["staff"]=$staffid;

                $conn=mysqli_connect($server,$username,$password,$dbname);
                $query = "select * from staff";
                //$query="select * from doctors";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($result)){
                ?>
                <option value="<?php echo $row['StaffNO'];?>"><?php echo $row['StaffID'];?>
                <?php }
              
                 ?>
                  </select>
               
                
                <br>
              <button type="submit" name="submit" id="submit" class="btn">Get details</button>
              </div>
          
           
<?php