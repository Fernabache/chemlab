<?php
// Include the connect.php file
include ('connect.php');

// Connect to the database
// connection String
$mysqli = new mysqli("localhost", "root", "follower1990", "del");
/* check connection */
if (mysqli_connect_errno())
	{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
// get data and store in a json array
$from = 0;
$to = 100;
$query = "SELECT demul , ex FROM data ORDER BY ex LIMIT 1, 50";
$result = $mysqli->prepare($query);
$result->bind_param('ii', $from, $to);
$result->execute();
/* bind result variables */
$result->bind_result($ex, $demul);
/* fetch values */
while ($result->fetch())
	{
	$orders[] = array(
		'ex' => $ex,
		'demul' => $demul
		
	);
	}
echo json_encode($orders);
/* close statement */
$result->close();
/* close connection */
$mysqli->close();
?>
