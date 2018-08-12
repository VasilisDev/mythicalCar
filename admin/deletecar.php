<?php
	include('session.php');
	$pid=$_GET['id'];
	
	$a=mysqli_query($conn,"select * from car where carid='$pid'");
	$b=mysqli_fetch_array($a);
	
	mysqli_query($conn,"delete from car where carid='$pid'");
	
	header('location:car.php');

?>