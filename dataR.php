<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voice_commands";

// Connect to DB
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$retrive="SELECT * FROM commands";

 
 $result = mysqli_query($conn,$retrive); 
 
 echo "<br>"; 
 echo "<table border='2'>"; 
 echo "<tr>"; 
 echo 
"<th colspan='2'>History</th></tr>"; 
 
if ($result->num_rows> 0) 
 { 
    $sl=1;
 while($row = $result->fetch_assoc()) 
 { 
    
 echo "<tr><td>".$sl."</td>"; 
 echo "<td>". $row["command_text"]."</td></tr>";

 $sl=$sl+1; 
  } 
 } 
 else
  echo "Table is Empty"; 
 echo "</table>"; 
$conn->close(); 
?>