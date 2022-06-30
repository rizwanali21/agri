<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agricommunity</title>
    <link rel="stylesheet" href="responsive.css">

    

</head>
<body>
<?php
    require_once 'header.php';
    ?>
        <div class="main-content">
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

$sql = "SELECT article.Id, article.Title, article.DoP, article.image, article.data, author.Name
FROM article 
INNER JOIN author ON article.author_id=author.id Where article.Gener='Crop'";
$result = $conn->query($sql);

if ($result !== false && $result->num_rows > 0) {
  while($res = $result->fetch_assoc()) {
    echo "<article>";
    echo "<h1>".$res['Title']."</h1>";
            echo "<p><strong>Author:</strong>".$res['Name'].", <strong>Published:</strong>".$res['DoP']."</p>";
            echo "<div class='image-wrapper'>";
            echo "<img src='images/".$res['image']."' >"; 
            echo"<span>Image source: The XYZ</span>
        </div>";
            echo "<p><pre>".$res['data']."</pre></p>";  
            echo "<form action='/form/submit' method='POST'>
            <textarea class='comment' rows='1' placeholder='Type your comment here.'></textarea>
            <br>
            <input type='submit' name='submit' value='Send'>
          </form>  
    </article><hr>";
  }

} else {
  echo "0 results";
}
$conn->close();
?>
</div>
<?php
    require_once 'footer.php';
    ?>
</body>
</html>