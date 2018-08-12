<?php
	include('session.php');
	if(isset($_POST['num'])){
		$search = $_POST['name'];
		$query=mysqli_query($conn,"select * from car where (car_name like '%$name%'  OR model like '%$name%') ");
		echo mysqli_num_rows($query);
	}
?>