<!DOCTYPE html>
<html>
<head><title><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Website</title>
    <link rel="stylesheet" href="main.css"></title>
<style>
textarea {
  resize: none;
}
</style>
</head>
<body>


<form action="TestPhp.php" method="post">
<table id="customers">
<tH>Post your article from here</th>
<tr><td><input type="text" id="fname" name="name" placeholder="Enter Title here" required style="width:80%;"></td></tr>
            <tr>
              <td><label for="gener">Choose between crop/disease/Fertilizer:</label>
              <select name="gener" id="gener" required>
              <option value="Crop">Crop</option>
              <option value="Disease">Disease</option>
              <option value="Fertilizer">Fertilizer</option>
              </select></td></tr>
              <tr><td><label for="author">Enter the Author Id:</label><select name="author" id="author" required>
              <?php
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

$sql = "SELECT id
FROM author";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($res = $result->fetch_assoc()) {
    echo "<option value=".$res['id'].">".$res['id']."</option>";
            
  }

} else {
  echo "0 results";
}
$conn->close();
?></select>
              </td>
              
            </tr>
            <tr>
                <td><input type="file" id="myFile" name="filename"></td>
            </tr>
            
            <tr><td><textarea id="data" name="data" rows="25" cols="185" placeholder="Write Article here" required>
  
  </textarea></td></tr>
  <tr><td><button type="submit" value="Submit" name="post">Post</button></tr></td></table>
</form> 





</body>
</html>
