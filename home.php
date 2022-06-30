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
?>

    <div class="row">
        <div class="col-1">
            <h2>Agri.</br> Community</h2>
            <h3>Maximize Profit Opportunities</h3>
            <p>(Compatible/Generic)</p>
            <h4>All A.C.T Soybean Farmers</h4>
            
            <div class="col-1-1">
                
                <img src="images/9.jpg" style="width: 100%;height: 150px;">"
            </div>
            
        </div>
        <div class="col-2">
            <img src="images/tractor.png" class="controller">
            <div class="color-box"></div>
            <div class="add-btn">
                <!--<img src="images/add.png">
                <p style="margin-left: 70px;"><small>Add to cart</small></p>-->
            </div>
        </div>
    </div>

    <div class="main2">
        <div class="main2-1">
            <h1>
                BEYOND THE BEANS
            </h1>
            <p>
                Beyond the beans brings you the lastest news and information about</br>
                your soy checkoff. DIscover how your investment is generating more</br>
                value for the soybeans you grow. access all stories from the magazine</br>
                below.
            </p>
            <center>
                <button type="button">Read More <img src="images/arrow.png"></button>
            </center>
        </div>
        
        <div class="main2-2">
            <img src="images/7.jpg" style="width: 100%;height: 600px;">
        </div>
    </div>

    <div class="slider" style="max-width:100%; margin-top: 50px; ">
        <img class="mySlides" src="images/1.jpg" style="width:50%; height:300px">
        <img class="mySlides" src="images/2.jpg" style="width:50%; height:300px">
        <img class="mySlides" src="images/3.jpg" style="width:50%; height:300px">
        <img class="mySlides" src="images/4.jpg" style="width:50%; height:300px">
    </div>

    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) { myIndex = 1 }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2500);
        }
    </script>
    <!--Script for menulist-->
    <script>
        var menuList = document.getElementById("menuList");

        menuList.style.maxHeight = "0px";

        function togglemenu() {
            if (menuList.style.maxHeight == "0px") {
                menuList.style.maxHeight = "150px";
            }
            else {
                menuList.style.maxHeight = "0px";
            }
        }

    </script>

    </div>

    

    <div class="main3">
        <div class="main3-1">
            <a href=""><span title="Don't CLick "Albert Chiango Cahmpenzi"><img src="images/8.jpg" style="width: 100%;height: 600px;"></span></a>
        </div>
        
        <div class="main3-2">
            <h1>
                MEET THE BOARD
            </h1>
            <p>
                ACT 2 farmer directors work on behalf of all A,C soybean formers</br>
                to achieve maximum value for their soy their say checkoff investment. These</br>
                Volunteers invest and leverage checkoff fund in program and </br>
                partnership. See a list of all current farmer directors as well as ACT </br>
                staff and checkoff supprt teams. by clicking below:
                
            </p>
            <center>
                <button type="button">Know Us<img src="images/arrow.png"></button>
            </center>
        </div>
    </div>



    <?php
require_once 'footer.php';
?>

</body>

</html>