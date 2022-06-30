<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agricommunity</title>
    <link rel="stylesheet" href="responsive.css">
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>

<?php
    require_once 'header.php';
    ?>
        <div class="main-content">

        <input type="text" id="search_text"  placeholder="Search for ids..">
        <h2>Articles Uploaded</h2>
        <div id="result"></div>
       
<br>
          <br>
        <table id="customers">

            
            


</body>
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
	
  $.ajax({
	  
   url:"newdata.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
	   
    $('#result').html(data);
   }
  });
  
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

</html>