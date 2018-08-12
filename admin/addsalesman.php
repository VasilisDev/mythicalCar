<?php
	include('session.php');
	
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	

	$query="insert into salesman (salesmanid, salesman_name, salesman_address, contact) values (NULL, '$name', '$address', '$contact')";
	mysqli_query($conn,$query);
	
	?>
		<script>
			window.alert('Salesman added successfully!');
			window.history.back();
		</script>
	<?php
?>