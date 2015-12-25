<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Alegreya:400,400italic,700' rel='stylesheet' type='text/css'>

		<link href="css/simple-slider.css" rel="stylesheet" type="text/css" />

	<link href="css/spectrum.css" rel="stylesheet">


	<link href="css/custom.css" rel="stylesheet">


</head>



<?php

$query = new mysqli('localhost','user','pass','db_name');

//Output any connection error
if ($query->connect_error) {
	die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
$id=$_GET['id'];
$sql="SELECT data from generate where id=".$id;
$results = $query->query($sql)->fetch_object()->data;
?>
<script>
var ball_data='<?php echo $results;?>';


var balls=JSON.parse(ball_data);
console.log(balls);

</script>
<!DOCTYPE html>

<body>

	<div class="generated_canvas_wrapper">
	<canvas class="generated_canvas" id="myCanvas" width="1000" height="600" onmousemove="handleMouseMove(event)" onmouseout="handleMouseOut()" ></canvas>
	</div>
	<br/>
	


</body>


<script src="js/spectrum.js"></script>
	<script src="js/simple-slider.js"></script>

<script src="js/move_balls_generated.js" type="text/javascript"></script>

<script src="js/custom_for_generated.js" type="text/javascript"></script>
<script>
	init();
</script>


</html>