<?php
   $email = stripcslashes($_POST['email']);
   $password = stripcslashes($_POST['pass']);


  $link =mysqli_connect("localhost", "root", "");
   mysqli_select_db($link ,"login2");
   $result = mysqli_query($link,"select * from signup where email ='$email' and pass = '$password'")
                or die("failed to query database" . mysqli_error($link));
   $row = mysqli_fetch_array($result);
   if($row['email'] == $email && $row['pass'] == $password){
       echo "login success!!! Welcome " .$row['name'];

        header ("Content-type: text/html");
        header ("Location: /Php_Course/dash.html");


   }   
    else
      echo "Failed to login!"; 
  

   




    
?>
