<?php
	include('session.php');
	
	$name=$_POST['name'];
	$category=$_POST['category'];
	$price=$_POST['price'];
	$supplier=$_POST['salesman'];
	$model=$_POST['model'];
	
	$fileInfo = PATHINFO($_FILES["image"]["name"]);
	
	if (empty($_FILES["image"]["name"])){
		$location="";
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFilename);
			$location = "upload/" . $newFilename;
		}
		else{
			$location="";
			?>
				<script>
					window.alert('Photo not added. Please upload JPG or PNG photo only!');
				</script>
			<?php
		}
	}
	
	mysqli_query($conn,"insert into car (car_name,categoryid,car_price,photo, salesmanid,model) values ('$name','$category','$price','$location', '$supplier','$model')");
	$pid=mysqli_insert_id($conn);
	
	
	?>
		<script>
			window.alert('Product added successfully!');
			window.history.back();
		</script>
	<?php
?>