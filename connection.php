<?php

session_start();
header('location:index.php');
$server= 'localhost';
$user= 'root';
$password ='';
$db= 'coronadb';

$con=mysqli_connect($server, $user, $password, $db);


if(isset($_POST['btn'])) {
$name=$_POST['n1'];
$email=$_POST['e1'];
$mobile=$_POST['m1'];
$symptom=$_POST['coronasym'];
$msg=$_POST['msg'];

$check= "";

foreach($symptom as $check1) {
	$check .= $check1.",";
}





  	$insert="INSERT INTO `coronacase`(`username`, `email`, `mobile`, `symp`, `message`) VALUES ('$name','$email',$mobile,'$check','$msg')";
  	$query=mysqli_query($con, $insert);


if($query) {
	?>
	<script>
		alert('Details send successfully');
	</script>

	<?php
}
else {
	?>
	<script>
		alert('Error while sending details');
	</script>
	<?php


     } 


}


?>