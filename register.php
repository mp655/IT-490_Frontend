<?php
session_start();

include ('testRabbitMQClient.php');
$user = $_POST['name'];
$pass = $_POST['password'];
$email = $_POST['email'];
$response = register($user,$pass,$email);
if($response == true)
  {
    echo "Registered";
    header( "Refresh:1; url=login.html", true, 303);
    $date = new DateTime();
    $date = $date->format("y:m:d h:i:s");	
    $txt = "$user: is successfull login:";
    $myfile = file_put_contents('log.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
  }
  else
  {
  echo "Was not able to register";
  header( "Refresh:1; url=register.php", true, 303);
  $date = new DateTime();
  $date = $date->format("y:m:d h:i:s");	
  $txt = "$user: is successfull login:";
  $myfile = file_put_contents('log.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
  }
?>
