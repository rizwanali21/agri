<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agricommunity</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <?php
    require_once 'header.php';
    //session_start();
    if(! isset($_SESSION['username']) || ! $_SESSION['username']=="admin")header("Location:login/login.php");
require_once 'header.php';
?><br><button style="margin-left: 40%;"><a href="article.php"><span style="color:white">Post an Article</span></a></button><br><br>
        <h2>Registered Users</h2><br>
        <table id="customers">
            <tr>
              <th>Id</th>
              <th>Username</th>
              <th>Email</th>
            </tr>
            
    

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

$sql = "SELECT Id, userName, mail FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($res = $result->fetch_assoc()) {
    //echo "id: " . $row["cus_id"]. " - Name: " . $row["cus_fName"]. " " . $row["cus_lName"]. "<br>";
    
    echo "<tr>";
            echo "<td>".$res['Id']."</td>";
            echo "<td>".$res['userName']."</td>";
            echo "<td>".$res['mail']."</td>";  
  }

} else {
  echo "0 results";
}
$conn->close();
?>
            
          </table>
          <br>
<br>
          <h2>Articles Uploaded</h2><br>
        <table id="customers">
            <tr>
              <th>Id</th>
              <th>Title</th>
              <th>Author</th>
            </tr>
            
            

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

$sql = "SELECT article.Id, article.Title, author.Name
FROM article
INNER JOIN author ON article.author_id=author.id;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($res = $result->fetch_assoc()) {
    //echo "id: " . $row["cus_id"]. " - Name: " . $row["cus_fName"]. " " . $row["cus_lName"]. "<br>";
    
    echo "<tr>";
            echo "<td>".$res['Id']."</td>";
            echo "<td>".$res['Title']."</td>";
            echo "<td>".$res['Name']."</td>";  
  }

} else {
  echo "0 results";
}
$conn->close();
?>
            
          </table>



          <br>
<br>
          <h2>Authors</h2><br>
        <table id="customers">
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Mail</th>
            </tr>
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

$sql = "SELECT id, Name, mail
FROM author";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($res = $result->fetch_assoc()) {
    
    echo "<tr>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['Name']."</td>";
            echo "<td>".$res['mail']."</td>";  
  }

} else {
  echo "0 results";
}
$conn->close();
?>
</table><br><br><br>
<form action="TestPhp.php" method="post">
<table id="customers">
            <tr>
              <td><label for="dlt">Choose author/article/user to delete:</label>
              <select name="dlt" id="dlt" required>
              <option value="article">Article</option>
              <option value="author">Author</option>
              <option value="user">User</option>
              </select>
              </td>
            </tr>
  <tr><td><input type="text" id="fname" name="id" placeholder="Enter id to delete" required></td></tr>
  <tr><td><button type="submit" value="Submit" name="delt">Delete</button></tr></td></table>
</form> 



</body>
</html>