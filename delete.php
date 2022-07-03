<?php  




    $link =mysqli_connect("localhost", "root", "");
   mysqli_select_db($link ,"login2");
   $result = mysqli_query($link,"insert into project (ProjectTitle,type,manager,frontend,Backend,ClientName,Description) values ('$ProjectTitle','$type','$Manager','$Frontend','$Backend','$ClientName','$Description')")
                or die("failed to query database" . mysqli_error($link));



                 header ("Content-type: text/html");
                header ("Location: /Php_Course/displayproject1.php");