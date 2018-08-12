<!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Mythical Car</a>
            </div>

			<ul class=" nav navbar-nav">
				<li>
					<form class="navbar-form" role="search" method="POST" action="search_result2.php">
					<div class="input-group" id="searchbox" style="width:500px;">
						<input type="text" class="form-control" placeholder="Search Car" name="search" id="search" required>
						<div class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
					</form>
				</li>
			</ul>

            <ul class="nav navbar-top-links navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-car"></i> Cars <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href="index.php"> All Category</a></li>
						<?php
							$caq=mysqli_query($conn,"select * from category");
							while($catrow=mysqli_fetch_array($caq)){
								?>
								<li class="divider"></li>
								<li><a href="plist.php?cat=<?php echo $catrow['categoryid']; ?>"><?php echo $catrow['category_name']; ?></a></li>
								<?php
							}

						?>
                    </ul>
                </li>
           <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<span class="glyphicon glyphicon-lock"></span> <?php echo $user; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href="../admin/index.php" ><span class="glyphicon glyphicon-home"></span> My Account</a></li>
            
						<li class="divider"></li>
                        <li><a href="../admin/logout.php" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>

            </ul>

        </nav>
