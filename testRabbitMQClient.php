<?php
session_start();

require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

function login($user,$pass){


	$client = new rabbitMQClient("testRabbitMQ.ini","testServer");
	if (isset($argv[1]))
	{
 	  $msg = $argv[1];
	}
	else
	{
  	  $msg = "test message";
	}

	$request = array();
	$request['type'] = "login";
	$request['name'] = $user;
	$request['password'] = $pass;
	$request['message'] = $msg;
	$response = $client->send_request($request);
	return $response;
	echo "\n\n";

	echo $argv[0]." END".PHP_EOL;
}

function register($user,$pass,$email){
    $client = new rabbitMQClient("testRabbitMQ.ini","testServer");
    if (isset($argv[1]))
    {
      $msg = $argv[1];
    }
    else
    {
      $msg = "test message";
    }
    $request = array();
    $request['type'] = "register";
    $request['name'] = $user;
    $request['password'] = $pass;
    $request['email'] = $email;
    $request['message'] = $msg;
    $response = $client->send_request($request);
   
    return $response;
    echo "\n\n";
    echo $argv[0]." END".PHP_EOL;
}

function location($zipcode){
	$client = new rabbitMQClient("testRabbitMQ.ini", "apiserver");
	if (isset($argv[1]))
	{
		$msg = $argv[1];
	}
	else
	{
		$msg = "test message";
	}

	$request = array();
	$request['type'] = "zipcode";
	$request['zipcode'] = $zipcode;
	$response = $client->send_request($request);

	return $response;
        echo "\n\n";
        echo $argv[0]." END".PHP_EOL;
	
}

/*	
function friendlist($name, $email){
	$client = new rabbitMQClient("testRabbitMQ.ini", "testServer");
	if (isset($argv[1]))
    	{
      		$msg = $argv[1];
    	}
    	else
    	{
      		$msg = "test message";
    	}
    	$request = array();
    	$request['type'] = "friendlist";
    	$request['name'] = $name;
	$request['email'] = $email;
    	$response = $client->send_request($request);
   
    	return $response;
    	echo "\n\n";
    	echo $argv[0]." END".PHP_EOL;
}
*/

?>

