<?php
	
	include('session.php');
	$id=$_GET['id'];
	
	$p=mysqli_query($conn,"select * from car where carid='$id'");
	$prow=mysqli_fetch_array($p);
	
	$name=$_POST['name'];
	$model=$_POST['model'];
	$category=$_POST['category'];
	$salesman=$_POST['salesman'];
	$price=$_POST['price'];
	
	$fileInfo = PATHINFO($_FILES["image"]["name"]);
	
	if (empty($_FILES["image"]["name"])){
		$location=$prow['photo'];
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFilename);
			$location = "upload/" . $newFilename;
		}
		else{
			$location=$prow['photo'];
			?>
				<script>
					window.alert('Photo not updated. Please upload JPG or PNG photo only!');
				</script>
			<?php
		}
	}
	
	mysqli_query($conn,"update car set car_name='$name', salesmanid='$salesman', categoryid='$category', car_price='$price', photo='$location',model='$model'  where carid='$id'");
	
	?>
		<script>
			window.alert('Car updated successfully!');
			window.history.back();
		</script>
	<?php

?>