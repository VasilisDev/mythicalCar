<?php  include('header.php'); ?>

<body>
<div class="container">
	<div id="login_form" class="well" style="height:30%;">
		<h2><center><span class="glyphicon glyphicon-lock"></span>Sign up</center></h2>
			<hr>
		<form method="POST" action="process_register.php">
		<div style="height: 15px;"></div>
	    First Name: <input type="text" name="firstname" class="form-control" required>
	   <div style="height: 15px;"></div>
		Last Name: <input type="text" name="lastname" class="form-control" required>
		<div style="height: 15px;"></div>
		Username: <input type="text" name="username" class="form-control" required>
		<div style="height: 15px;"></div>
		Password: <input type="password" name="password" class="form-control" required>
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary" name='btn-signup'><span class="glyphicon glyphicon-log-in"></span> Sign up</button>
				   <p class="login-box-msg" style="padding-top:20px">Already Member? <a href="index.php">Login</a></p><!--TODO-->

		</form>
		<div style="height: 15px;"></div>
	</div>
</div>
<?php include('script.php'); ?>
</body>
</html>
