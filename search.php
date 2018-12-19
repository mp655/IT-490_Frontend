

<?php
session_start();
//require_once('path.inc');
//require_once('get_host_info.inc');
//require_once('rabbitMQLib.inc');
include ('testRabbitMQClient.php');


$zipcode = $_GET['zipcode'];
//$zipcode = "08820";
$response = location($zipcode);
$resp =rtrim($response);


//echo ($resp);

$data =  json_decode($resp,true);

//$d = json_encode(array('results' => json_decode($data)));

//print_r($d);

echo "<br>";

for ($x = 0; $x <= 100; $x++) {



foreach ($data[$x] as $key =>$value) {
	
	//echo "$key:$value<br>";
	
	
	
	
	
	?>
	
	
	<?php
	
		
if($key == 'title'){
		
	echo "<tr class='noborder'><th>$value</th><th></th><th></th> </tr>"; ?>
		
<!--<div align='center'>&nbsp;<i class='fa fa-plus'></i>&nbsp;Add to watchlist</div>-->
	
		<?php
		$GLOBALS['values'] = $value;
		
		//echo "<br>";
		
		
	}
		

	
	if($key == 'showtimes'){
		$show = array();	
		foreach ($data[$x]['showtimes'] as $key =>$value) {
				//echo "$value";
				$show[] = $value;
				
				
			}	
					
			
		
		
		//echo "showtimes: ";echo implode(', ', $show);
		for($a=0;$a < count($show);$a++){
			//if($show[$a]['theatre']['name'] == $show[$a-1]['theatre']['name']){
				//echo "Theatre Name: ";echo $show[$a]['theatre']['name'];
				
				
		//	}else{echo "Theatre Names: ";echo $theatre_name =  $show[$a]['theatre']['name'];}
			//echo "Theatre Name: ";echo $show[$a]['theatre']['name'];
			
			echo '&nbsp';echo '&nbsp';echo '&nbsp';echo '&nbsp';
			$arr = array();
		$showtimes = $show[$a]['dateTime'];
		 $booking = $show[$a]['ticketURI'];
			
			
	
		

		 
		//echo "<br>";
		echo "<td></td>";
	
		?>
	
		
		<?php  if($show[$a]['theatre']['name'] == $show[$a-1]['theatre']['name']){
				//echo "Theatre Name: ";echo $show[$a]['theatre']['name'];
				echo "<td></td>";
			
				
				
				
			}else{ $theatre_name =  $show[$a]['theatre']['name'];?>
			
    <?php echo "<td>$theatre_name</td>"; }
	
$shows=date('g:i A',strtotime($showtimes));
	$GLOBALS['s'] = $shows;

	$m= $GLOBALS['values'];
	

	echo "<td> $shows<form method='POST' action=''><input type ='hidden' name='date' value='$date'><input type ='hidden' name='user' value='$user'><input type ='hidden' name='theatre' value='$theatre_name'><input type ='hidden' name='booking' value='$booking'><input type ='hidden' name='showtime' value='$shows'><input type ='hidden' name='moviename' value='$m'><input type ='text' name='email' placeholder='Invite friend using email'><button type='submit' name='watchlist'><i class='fa fa-plus' style='margin-left:10px;'> </i>&nbsp;Add to watch list</button><button type='submit' name='invite'><i class='fa fa-user' style='margin-left:10px;'> </i>&nbsp;Invite</button></form> </td>";
	
	
  
?>
  </tr>
		
		
		<?php
	
	}
//echo "<br>";

}		

	
}

}




?>




