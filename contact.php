<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agricommunity</title>
    <link rel="stylesheet" href="responsive.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <?php
    require_once 'header.php';
    ?>
        <div class="main-content">
            <div class="container">
                <div style="text-align:center">
                  <h2>Contact Us</h2>
                  <p>Swing by for a cup of coffee, or leave us a message:</p>
                </div>
                <div class="row">
                  
                  <div class="column">
                    <img class ="mao" src="images/map.PNG" style="width:100%">
                  </div>
                  
                  <div class="column">
                    <form action="">
                      <label for="fname">First Name</label>
                      <input type="text" id="fname" name="firstname" placeholder="Your name.."required>
                      <label for="lname">Last Name</label>
                      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                      <label for="country">Country</label>
                      <select id="country" name="country" required>
                        <option value="attock">Attock</option>
                        <option value="islamabad">Islamabad</option>
                        <option value="lahore">Lahore</option>
                      </select>
                      <label for="subject">Subject</label>
                      <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px" required></textarea>
                      <input type="submit" value="submit" name="contact">
                    </form>
                  </div>
                </div>
              </div>

        </div>
        <div class="footer">
            <div class="f1">
                <img src="images/6.png" style="height: 140px;width: 16%;margin-top: 5px;">
                <div class="social-links">
                    <img src="images/fb.png" style="height: 40px;width: 40px;">
                    <img src="images/tw.png" style="height: 40px;width: 40px;">
                    <img src="images/ig.png" style="height: 40px;width: 40px;">
                </div>
                <h5>© Copyright AGRICULTURAL RESOURCES Designed by: USAMA & RIZWAN</h5>
            </div>
    
            <div class="f2">
                <h2>ABOUT ACT</h2></br>
    
                <h4>How We Facilitate Formers</h4></br>
                <h4>Directory</h4></br>
                <h4>Cropportunity</h4></br>
                <h4>Strategic Planic</h4></br>
                <h4>Annual Reports</h4></br>
                <h4>ACF Issues</h4></br>
                <h4>CF Required Documents</h4>
    
            </div>
            <div class="f3">
                <h2>TOPICS</h2></br>
    
                <h4>On Your Farm</h4></br>
                <h4>Animal AG</h4></br>
                <h4>Biodiesel</h4></br>
                <h4>Biotechnology</h4></br>
                <h4>Chosse AS Protien First</h4></br>
                <h4>Food</h4></br>
                <h4>High Oliec Soy</h4></br>
                <h4>New Uses</h4></br>
                <h4>Soybean Meal</h4></br>
                <h4>Sustainability</h4></br>
                <h4>Transportation</h4>
                
    
            </div>
            <div class="f4">
                <h2>MEDIA CENTER</h2></br>
    
                <h4>Press Release</h4></br>
                <h4>ACT in The NEWS</h4></br>
                <h4>Multimedia</h4></br>
                <h4>Brand Guidlines</h4></br>
                <h4>Communication Standards</h4></br>
                <h4>Logo Request</h4>
    
            </div>
            <div class="f5">
                <h2>RESEARCH</h2></br>
                <h2>EVENTS</h2></br>
                <h2>VENDOR SERVICES</h2></br>
                <h2>CONTACT US</h2></br>
                <h2>EXPENSE REPORT</h2>
    
                
    
            </div>
    
        </div>


        
</body>
</html>