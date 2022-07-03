<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bug Tracking System</title>
  <h1 style=color:White;">Bug Tracking System</h1>
<body style="background:#17a2b8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=100">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


 <style>
table
{

border-style:solid;

border-width:2px;

border-color:Green;
}
border-collapse:{ border-collapse: collapse; width: 100%; color:#831FAE ; font-family: monospace; font-size: 100px; text-align: left; } th { background-color: #831FAE; color: white; }  {background-color: white} th{padding:10px 54px;}td{color:Black}
.edit{
  padding: 0;
  border: none;
  background: none;
}
.delete{
  padding: 0;
  border: none;
  background: none;
}

</style>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark primary-color"style=background:#2e3b40 !important";>
  <a class="navbar-brand" href="#">Bug Tracker</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/Php_Course/dash.html">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Php_Course/About2.html">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Php_Course/dash.html">DASHBOARD</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">ADMINSTRATION</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a style="background:#0e982e;"class="dropdown-item" href="/Php_Course/Admin.html">ADD NEW PROJECT</a>
          <a style="background:#0e982e;" class="dropdown-item" href="/Php_Course/Admin1.html">ADD NEW BUG</a>
          <a style="background:#0e982e;" class="dropdown-item" href="/Php_Course/Admin2.html">ADD USER</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">REPORTS</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a style="background:#0e982e;" class="dropdown-item" href="/Php_Course/displayproject1.php">PROJECT REPORTS</a>
          <a style="background:#0e982e;" class="dropdown-item" href="/Php_Course/displayproject2.php">BUG REPORTS</a>
          <a style="background:#0e982e;" class="dropdown-item" href="/Php_Course/displayproject3.php">USER REPORTS</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="/Php_Course/bootstrap.html">LOG OUT</a>
      </li>


    </ul>
  </div>
</nav>
  </header>
  <img src="22.png"style="width:1300px;height:200px;   padding: 1px 400px;  margin: 10px 0 10px 0;   border-radius: 5%;">

   <h2 style="color:White;">&emsp;&emsp;&emsp;Project Reports</h2>
   <h3 style="color:Green;">&emsp;&emsp;&emsp;Data Save Successfully</h3>
     

<body bgcolor="#EEFDEF">

<?php

$con = mysqli_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }




 

mysqli_select_db($con,"login2");

 

$result = mysqli_query($con,"SELECT * FROM project3");

 

echo "<table border='1'>

<tr>

<th>User.No</th>

<th>Name</th>

<th>User Level</th>

<th>UserName</th>

<th>Password</th>

<th>Confirm Password</th>

<th>Mobile</th>

<th>Email</th>

<th>Date Of Birth</th>

<th>Address Line 1</th>

<th>Address Line 2</th>

<th>City</th>

<th>State</th>

<th>Country</th>

</tr>";

 

while($row = mysqli_fetch_array($result))

  {


  echo "<tr>";

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['Name'] . "</td>";

  echo "<td>" . $row['UserLevel'] . "</td>";

  echo "<td>" . $row['UserName'] . "</td>";

  echo "<td>" . $row['Password'] . "</td>";

  echo "<td>" . $row['ConfirmPassword'] . "</td>";

  echo "<td>" . $row['Mobile'] . "</td>";

  echo "<td>" . $row['Email'] . "</td>";

  echo "<td>" . $row['DateOfBirth'] . "</td>";

  echo "<td>" . $row['AddressLine1'] . "</td>";

  echo "<td>" . $row['AddressLine2'] . "</td>";

  echo "<td>" . $row['City'] . "</td>";

  echo "<td>" . $row['State'] . "</td>";

  echo "<td>" . $row['Country'] . "</td>";


  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($con);

?>

</body>

</html>