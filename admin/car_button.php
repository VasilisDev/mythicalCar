<!-- Delete Product -->
    <div class="modal fade" id="delproduct_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Product</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from car where carid='$pid'");
						$b=mysqli_fetch_array($a);
					?>
                    <h5><center>Car Name: <strong><?php echo $b['car_name']; ?></strong></center></h5>
					<form role="form" method="POST" action="deletecar.php<?php echo '?id='.$pid; ?>">
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
					</form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit Product -->
    <div class="modal fade" id="editprod_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Car</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from car left join category on category.categoryid=car.categoryid left join salesman on salesman.salesmanid=car.salesmanid where carid='$pid'");
						$b=mysqli_fetch_array($a);
                    
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_car.php<?php echo '?id='.$pid; ?>" enctype="multipart/form-data">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Brand Name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['car_name']); ?>" class="form-control" name="name">
                        </div>
                         <div style="height:10px;"></div>
                         <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Model:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['model']); ?>" class="form-control" name="model">
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Category:</span>
                            <select style="width:400px;" class="form-control" name="category">
								<option value="<?php echo $b['categoryid']?>"><?php echo $b['category_name']; ?></option>
								<?php
									$c=mysqli_query($conn,"select * from category where categoryid != '".$b['categoryid']."'");
									while($crow=mysqli_fetch_array($c)){
										?>
											<option value="<?php echo $crow['categoryid']; ?>"><?php echo $crow['category_name']; ?></option>
										<?php
									}
								?>
							</select>
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Salesman:</span>
                            <select style="width:400px;" class="form-control" name="salesman">
								<option value="<?php echo $b['salesmanid']?>"><?php echo $b['salesman_name']; ?></option>
								<?php
									$s=mysqli_query($conn,"select * from salesman where salesmanid != '".$b['salesmanid']."'");
									while($srow=mysqli_fetch_array($s)){
										?>
											<option value="<?php echo $srow['salesmanid']; ?>"><?php echo $srow['salesman_name']; ?></option>
										<?php
									}
								?>
							</select>
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Price:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['car_price'] ?>" class="form-control" name="price">
                        </div>
						<div style="height:10px;"></div>					
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Photo:</span>
                            <input type="file" style="width:400px;" class="form-control" name="image">
                        </div>
						<div style="height:10px;"></div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
					</form>
                </div>
        </div>
    </div>
<!-- /.modal -->




