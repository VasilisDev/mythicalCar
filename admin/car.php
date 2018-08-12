<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Cars
				<span class="pull-right">
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addproduct"><i class="fa fa-plus-circle"></i> Add Car</button>
				</span>
			</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="prodTable">
                <thead>
                    <tr>
                        <th>Brand Name</th>
						<th>model</th>
						<th>Category</th>
						<th>Salesman</th>
                        <th>Price</th>
						<th>Photo</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					$pq=mysqli_query($conn,"select * from car left join category on category.categoryid=car.categoryid left join salesman on salesman.salesmanid=car.salesmanid");
					while($pqrow=mysqli_fetch_array($pq)){
						$pid=$pqrow['carid'];
					?>
						<tr>
							<td><?php echo $pqrow['car_name']; ?></td>
							<td><?php echo $pqrow['model']; ?></td>
							<td><?php echo $pqrow['car_name']; ?></td>
							<td><?php echo $pqrow['salesman_name']; ?></td>
							<td><?php echo $pqrow['car_price']; ?></td>
							<td><img src="../<?php if(empty($pqrow['photo'])){echo "upload/noimage.jpg";}else{echo $pqrow['photo'];} ?>" height="30px" width="30px;"></td>
							<td>
								<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editprod_<?php echo $pid; ?>"><i class="fa fa-edit"></i> Edit</button>
								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delproduct_<?php echo $pid; ?>"><i class="fa fa-trash"></i> Delete</button>
								<?php include('car_button.php'); ?>
							</td>
						</tr>
					<?php
					}
				?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<?php include('add_modal.php'); ?>
<script src="custom.js"></script>
</body>
</html>