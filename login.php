<?php
session_start();
if (!isset($_SESSION["user"])){
header( "Refresh:1; url=login.html", true, 303);
}


include("testRabbitMQClient.php");
$user = $_POST['name'];
$pass = $_POST['password'];

$response = login($user, $pass);
if($response == true)
  { 
    echo "Welcome";
    header("Refresh:1; url=index.html", true, 303);
    

  }
  else
  {
    echo "Not Allowed";
    header("Refresh:1; url=login.html", true, 303);
   
  }



?>

