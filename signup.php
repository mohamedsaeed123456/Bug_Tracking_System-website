<?php
   $name = stripcslashes($_POST['name']);
   $email = stripcslashes($_POST['email']);
   $password = stripcslashes($_POST['pass']);
   



    $link =mysqli_connect("localhost", "root", "");
   mysqli_select_db($link ,"login2");
   $result = mysqli_query($link,"insert into signup (name,email,pass) values ('$name','$email','$password')")
                or die("failed to query database" . mysqli_error($link));

                header ("Content-type: text/html");
                header ("Location: /Php_Course/login.html");

               

?>