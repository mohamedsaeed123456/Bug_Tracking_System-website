<?php  

     $Title = stripcslashes($_POST['title']);
     $SelectProject = stripcslashes($_POST['select']);
     $SelectType = stripcslashes($_POST['type']);
     $AssignedTo = stripcslashes($_POST['assign']);
     $BugStatus = stripcslashes($_POST['bug']);
     $StartDate = stripcslashes($_POST['start']);
     $DueDate = stripcslashes($_POST['due']);
     $TotalTime = stripcslashes($_POST['total']);
     $Description = stripcslashes($_POST['desc']);




    $link =mysqli_connect("localhost", "root", "");
   mysqli_select_db($link ,"login2");
   $result = mysqli_query($link,"insert into project2 (Title,SelectProject,SelectType,assignedto,bugstatus,startdate,duedate,totaltime,Description) values ('$Title','$SelectProject','$SelectType','$AssignedTo','$BugStatus','$StartDate','$DueDate','$TotalTime','$Description')")
                or die("failed to query database" . mysqli_error($link));



                 header ("Content-type: text/html");
                header ("Location: /Php_Course/displayproject2.php");