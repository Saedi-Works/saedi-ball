<?php 
$query = new mysqli('localhost','root','toor','generate');

//Output any connection error
if ($query->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
$data=$_GET['ball_data'];
//$data=json_decode($data);
//$id=$_GET['id'];
//$data='ssss';

//echo $data;
$sql="Insert into generate (data) VALUES('".$data."')";
$insert=$query->query($sql);
echo $query->insert_id;





//echo "sss";
?>
