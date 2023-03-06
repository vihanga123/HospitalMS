<?php
session_start();
if(!isset($_SESSION['staffid'])){
   header("Location:LoginStaff.html");
}
?>
<html>
    <head>
        <link rel="stylesheet" href="default.css">
        <title>Staff Settings</title>
    </head>
    <body>
        <div class="topnav">
            <a href="http://localhost/hnd_feb-mar/webdoc/">Home</a>
            <h1>Select an Option</h1>
          </div>
            <div class="container">
              <hr>
    
              <button onclick="location.href = 'http://localhost/hnd_feb-mar/webdoc/PatientInfo.php';" class="opbtn" id=CheckPatient>Check Patient details</button>
              <button onclick="location.href = 'http://localhost/hnd_feb-mar/webdoc/RegStaff.html';" class="opbtn" id=AddStaff>Add a Staff member</button>
              <button onclick="location.href = 'http://localhost/hnd_feb-mar/webdoc/StaffInfo.php';" class="opbtn" id=StaffCheck>Check Staff details</button>
              <button onclick="location.href = '#';" class="opbtn" id=ScheduleOT>Schedule Operating theatre</button>
              <button onclick="location.href = '#';" class="opbtn" id=AssignFacility>Facility Assign/Check availability</button>
            </div>
          
    


    </body>
</html>