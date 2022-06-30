<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Website</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="header">
        <div class="navebar">
        <?php session_start();
        if(isset($_SESSION['username']))echo "<h2 style='color:white'>Current User: ".$_SESSION['username']."</h2>"; ?>
            <img src="images/logo.png" class="logo">
            <nav>
                <ul id="menuList">
                <li><a href="responsive.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="crop.php">Crops</a></li>
                    <li><a href="fertilizer.php">Fertilizers</a></li>
                    <li><a href="disease.php">Diseases</a></li>
                    <li><a href="login/login.php">Login</a></li>
                </ul>
            </nav>
            <img src="images/menu.png" class="menu-icon" onclick="togglemenu()">
        </div>







    </div>
</body>
</html>