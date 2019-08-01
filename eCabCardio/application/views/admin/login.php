<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin - Login</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" type="text/css">
</head>
<body>
	<div class="login col-md-4 mx-auto text-center">
		<h1>Admin Login</h1>
		<form method="post" action="<?php echo site_url('admin/login/verify')?>">

			<div class="form-group">
				<input type="text" name="username" placeholder="Username" class="form-control" class="form-control">
			</div>

			<div class="form-group">
				<input type="password" name="password" placeholder="Password" class="form-control"class="form-control">
			</div>

			<div class="form-group">
				<input type="submit" name="submit" value="Login" class="btn btn-primary">
				<?php 
				echo $this->session->flashdata("error");
				?>
			</div>

			</div>
		</form>
	</div>
</body>
</html>