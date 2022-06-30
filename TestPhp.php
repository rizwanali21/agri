<?php
session_start();
$dbServerName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="agriCommunity";

$con=mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
if(!$con){
    die('Could not connect  : ' . mysqli_error());
}
else{
    echo 'Connected Successfully';
}

if(isset($_POST['login'])){
    $name=$_POST['uname'];
    $pwd=$_POST['psw'];
    if($name=='admin' && $pwd=='admin'){$_SESSION['username']=$name;header('location:admin.php');}
    else{
    $sql="SELECT *FROM `customer` WHERE `userName`='$name' and `password`='$pwd'";
    $result=mysqli_query($con,$sql);
    $total=mysqli_num_rows($result);
    //session_start();
    if($total == 1){
        $_SESSION['username']=$name;
        echo $_SESSION['username'];
        header('location:home.php');
    }
    else{
         
    echo '<script type="text/JavaScript"> 
             alert("   You Enter wrong Username or Password");        
        </script>';
        
    }}
    
}

if(isset($_POST['register'])){
  $sql = "INSERT INTO customer(mail,userName,password) VALUES ('".$_POST['email']."','".$_POST['user']."','".$_POST['psw']."')";

if ($con->query($sql) === TRUE) {
  echo "Sign up successful! Now login here";
  header("Location:login/login.php");
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
      
  }

  if(isset($_POST['delt'])){
    if($_POST['dlt']=='article'){
      $sql = "DELETE FROM article WHERE Id=".$_POST['id'];
      if ($con->query($sql) == TRUE) {
          echo "Deleted";
          header("Location:admin.php");
          //header("Location:login/login.php");
        } else {
          echo "Error: " . $sql . "<br>" . $con->error;
        }
  
  }
  
  if($_POST['dlt']=='user'){
      $sql = "DELETE FROM customer WHERE Id=".$_POST['id'];
      if ($con->query($sql) == TRUE) {
          echo "Deleted";
          header("Location:admin.php");
          //header("Location:login/login.php");
        } else {
          echo "Error: " . $sql . "<br>" . $con->error;
        }
  }
  
  if($_POST['dlt']=='author'){
      $sql = "DELETE FROM author WHERE id=".$_POST['id'];
  
      if ($con->query($sql) == TRUE) {
          echo "Deleted";
          header("Location:admin.php");
          //header("Location:login/login.php");
        } else {
          echo "Error: " . $sql . "<br>" . $con->error;
        }
  }
  
  }
  if(isset($_POST['post'])){
    $sql ="INSERT INTO article(Title, DoP, Gener, data, author_id, image) VALUES ('".$_POST['name']."','".date("Y-m-d")."','".$_POST['gener']."','".$_POST['data']."','".$_POST['author']."','".$_POST['filename']."')";
if ($con->query($sql) == TRUE) {
  echo "Sign up successful! Now login here";
  header("Location:admin.php");
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
  }

?>