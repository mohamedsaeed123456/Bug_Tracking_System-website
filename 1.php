<!DOCTYPE html>
<html>
<head>
  <style> table { border-collapse: collapse; width: 100%; color: #588c7e; font-family: monospace; font-size: 25px; text-align: left; } th { background-color: #588c7e; color: white; } tr:nth-child(even) {background-color: #f2f2f2} </style> 

</head>

<body>
  <table>
       <tr>
         <th>ProjectTitle</th>
         <th>type</th>
         <th>manager</th>
         <th>frontend</th>
         <th>Backend</th>
         <th>ClentName</th>
         <th>Description</th>
       </tr>
      <?php
      $conn = mysqli_connect("localhost", "root", "",'login2' );
       if ($conn-> connect_error) {
      die("Connection failed:" . $conn-> connect_error); 
      } 
     $sql = "SELECT * FROM project";
    $result = $conn->query($sql);
   if ($result-> num_rows > 0) {  while($row = $result->fetch_assoc()) {
    echo "<tr><td>". $row["ProjectTitle"] ."</td><td>" . $row["type"] . "</td><td>" . $row["manager"]. "</td></tr> " .$row["frontend"]. "</td></tr>" .  $row["Backend"]. "</td></tr>" . $row["ClientName"]. "</td></tr>" . $row["Description"]. "</td></tr>";
    } 
    echo "</table>";
     }
    else { echo "0 results"; }
   $conn->close(); 
    ?>
    </table>
   </body>
   </html>


