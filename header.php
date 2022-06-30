<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agricommunity</title>
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
                <?php if(isset($_SESSION['username']) && $_SESSION['username']=='admin')echo "<li><a href='admin.php'>Admin Panel</a></li>";
                        
                    ?>
                <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="crop.php">Crops</a></li>
                    <li><a href="fertilizer.php">Fertilizers</a></li>
                    <li><a href="disease.php">Diseases</a></li>
                    <?php if(! isset($_SESSION['username']))echo "<li><a href='login/login.php'>Login</a></li>";
                        else echo "<li><a href='logout.php'>Logout</a></li>"
                    ?>
                    
                </ul>
            </nav>
            <img src="images/menu.png" class="menu-icon" onclick="togglemenu()">
        </div>







    </div>
</body>
</html>