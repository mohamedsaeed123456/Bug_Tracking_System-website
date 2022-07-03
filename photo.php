<?php 

if($_FILES['up'])
{
$ex=array("text/html", 
          "text/plain", 
          "magnus-internal/shellcgi", 
          "application/x-php", 
          "text/php", 
          "application/x-httpd-php" , 
          "application/php", 
          "magnus-internal/shellcgi", 
          "text/x-perl", 
          "application/x-perl", 
          "application/x-exe", 
          "application/exe", 
          "application/octet-stream", 
          "application/x-java" , 
          "application/java-byte-code", 
          "application/x-java-class", 
          "application/x-java-vm", 
          "application/x-java-bean", 
          "application/x-jinit-bean", 
          "application/x-jinit-applet", 
          "magnus-internal/shellcgi",
          "image/svg",
          "image/svg-xml", 
          "image/svg+xml",
          "text/xml-svg",
          "image/vnd.adobe.svg+xml",
          "image/svg-xml",
          "text/xml", 

          );
$type=$_files["up"]["type"]; 
if(in_array($type,$ex))
{ 
exit("This File Can not Uploaded"); 

}

$MaxSize=455454;
$size=$_FILES['up']['size'] ;

if($MaxSize < $size )
{
exit("This File Can not Upload for Exceeded the maximum"); 
}

 $filename=$_FILES['up']['name'] ;
 $dir="files";

$up=move_uploaded_file($_FILES['up']['tmp_name'],"$dir/$filename");
*/


if($up)
{
  echo "<span dir=rtl>\n";
  print "حجم الملف  ". $_FILES['up']['size']." <br>";
  print "نوع الملف ". $_FILES['up']['type']."  <br>";
  print "اسم الملف ". strtolower($_FILES['up']['name'])."  <br>";
  print "Done";
   echo "</span>";

}

}

?>