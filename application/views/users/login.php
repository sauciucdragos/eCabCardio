


<?php echo validation_errors(); ?>

<?php echo form_open('users/login'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
	<!--		<h1 class="text-center"><?php echo $title; ?></h1> -->
			<div class="form-group">
				<input type="text" class="form_control" name="name_user_log" placeholder=" Enter Name_user_log" required autofocus>
			</div>
			<div class="form-group">
				<input type="text" class="form_controlaa" name="password" placeholder=" Enter Password" required autofocus>
			</div>
			<div>
				<button type="submit" class="btn btn-primary btn-block">Login</button>
			</div>
		</div>
	</div>	

<?php echo form_close(); ?>



