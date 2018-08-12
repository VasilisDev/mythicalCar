<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php $id=$_GET['id']; ?>
<body>
<?php include('navbar.php'); ?>
<div class="container">
	<div style="height: 80px;"></div>
	<div>
	<?php
		$inc=4;
		$query=mysqli_query($conn,"select * from car where carid='$id'");
		while($row=mysqli_fetch_array($query)){
			
			$inc = ($inc == 4) ? 1 : $inc+1; 
			if($inc == 1) echo "<div class='row'>";  
			
			?>
			<div class="col-lg-3">
				<div>
					<img src="../<?php if (empty($row['photo'])){echo "upload/noimage.jpg";}else{echo $row['photo'];} ?>" style="width: 230px; height:230px; padding:auto; margin:auto;" class="thumbnail">
					<div style="height: 10px;"></div>
					<div style="height:20px; width:230px; margin-left:17px;">Brand:<strong> <?php echo $row['car_name']; ?></strong></div>
					<div style="height:20px; width:230px; margin-left:17px;">Model:<strong> <?php echo $row['model']; ?></strong></div>
					<div style="height: 10px;"></div>
					<div style="margin-left:17px; margin-right:17px;">
			 <span class="pull-right">Cost: <strong><?php echo number_format($row['car_price'],2); ?> €</strong></span>
					</div>
				</div>
			<?php
		if($inc == 4) echo "</div><div style='height: 30px;'></div>";
		}
		if($inc == 1) echo "<div class='col-lg-3></div><div class='col-lg-3'></div><div class='col-lg-3'></div></div>"; 
		if($inc == 2) echo "<div class='col-lg-3'></div><div class='col-lg-3'></div></div>"; 
		if($inc == 3) echo "<div class='col-lg-3'></div></div>"; 
	?>
	</div>
</div>
<?php include('script.php'); ?>
</body>
</html>