<?php
	include('session.php');
	
	$id=$_GET['id'];
	
	
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	
	mysqli_query($conn,"update salesman set salesman_name='$name', salesman_address='$address', contact='$contact' where salesmanid='$id'");
	
	?>
		<script>
			window.alert('Salesman updated successfully!');
			window.history.back();
		</script>
	<?php

?>