<!DOCTYPE html>
<html>
<head> <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Website</title>
  <link rel="stylesheet" href="main.css">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>View Data Report</h2>

<table id="customers">
<tr>
    <th>Article</th>
    <th>Published Date</th>
    <th>Published By</th>
  </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel domain";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT cus_id, cus_fName, cus_lName FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["cus_id"]. " - Name: " . $row["cus_fName"]. " " . $row["cus_lName"]. "<br>";
    
      echo"<tr>
        <td>".$row["cus_id"]."</td>
        <td>".$row["cus_fName"]."</td>
        <td>".$row["cus_lName"]."</td>
      </tr>";
  }

} else {
  echo "0 results";
}
$conn->close();
?>
  
  <tr>
    <td>Crops</td>
    <td>Today</td>
    <td>Usama</td>
  </tr>
  <tr>
    <td>Disease</td>
    <td>Yesterday</td>
    <td>Rizwan</td>
  </tr>
  <tr>
    <td>Fertilizer</td>
    <td>19-april-2021</td>
    <td>Usama</td>
  </tr>
  <tr>
    <td>Wheat</td>
    <td>18-april-2021</td>
    <td>Rizwan</td>
  </tr>
  <tr>
    <td>Tomato</td>
    <td>15-april-2021</td>
    <td>Rizwan</td>
  </tr>
  <tr>
    <td>Crop diseases</td>
    <td>20-march-2021</td>
    <td>Usama</td>
  </tr>
  <tr>
    <td>Crops</td>
    <td>Today</td>
    <td>Usama</td>
  </tr>
  <tr>
    <td>Disease</td>
    <td>Yesterday</td>
    <td>Rizwan</td>
  </tr>
  <tr>
    <td>Fertilizer</td>
    <td>19-april-2021</td>
    <td>Usama</td>
  </tr>
  <tr>
    <td>Wheat</td>
    <td>18-april-2021</td>
    <td>Rizwan</td>
  </tr>
  <tr>
    <td>Tomato</td>
    <td>15-april-2021</td>
    <td>Rizwan</td>
  </tr>
  <tr>
    <td>Crop diseases</td>
    <td>20-march-2021</td>
    <td>Usama</td>
  </tr>
</table>

</body>
</html>
