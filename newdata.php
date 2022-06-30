<?php
//fetch.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agricommunity";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$output = '';

if(isset($_POST["query"]))
{
 $search = $_POST["query"];
 $query = "
  SELECT * FROM article where Id LIKE '%".$search."%'
 ";


if($result = $conn->query($query))
          {
              
 $output .= '
  <div>
   <table id="customers">
    <tr>
     
    <th>Id</th>
    <th>Title</th>
    <th>DoP</th>
	  
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["Id"].'</td>
    <td>'.$row["Title"].'</td>
    <td>'.$row["DoP"].'</td>
    
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}
}
?>