<?php  

     $Name = stripcslashes($_POST['name']);
     $UserLevel = stripcslashes($_POST['level']);
     $UserName = stripcslashes($_POST['user']);
     $Password = stripcslashes($_POST['pass']);
     $ConfirmPassword = stripcslashes($_POST['confirm']);
     $Mobile = stripcslashes($_POST['mobile']);
     $Email = stripcslashes($_POST['email']);
     $DateOfBirth = stripcslashes($_POST['date']);
     $AdddressLine1 = stripcslashes($_POST['line1']);
     $AdddressLine2 = stripcslashes($_POST['line2']);
     $City = stripcslashes($_POST['city']);
     $State = stripcslashes($_POST['state']);
     $Country = stripcslashes($_POST['country']);
    




    $link =mysqli_connect("localhost", "root", "");
   mysqli_select_db($link ,"login2");
   $result = mysqli_query($link,"insert into project3 (Name,UserLevel,UserName,Password,ConfirmPassword,Mobile,Email,DateOfBirth,AddressLine1,AddressLine2,City,State,Country) values ('$Name','$UserLevel','$UserName','$Password','$ConfirmPassword','$Mobile','$Email','$DateOfBirth','$AddressLine1','$AdddressLine2','$City','$State','$Country')")
                or die("failed to query database" . mysqli_error($link));



                 header ("Content-type: text/html");
                header ("Location: /Php_Course/displayproject3.php");