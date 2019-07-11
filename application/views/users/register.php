<!-- <h2> <?= $title; ?></h2> -->
  

<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="form-group-group">
				<label>Name_user_log</label>
				<input type="text" class="form_control" name="name_user_log" placeholder="Name_user_log">
			</div>

			<div class="form-group">
				<label>First_name</label>
				<input type="text" class="form_control" name="first_name" placeholder="First_name">
			</div>

			<div class="form-group">
				<label>Last_name</label>
				<input type="text" class="form_control" name="last_name" placeholder="Last_name">
		    </div>

		    <div class="form-group">
			<label>Type user</label>
		               <input list="type_user" name="type_user"  placeholder="type user">   
		               <datalist id="type_user">
		                 <option value="Doctor"> </option>
		                <option value="Asistent"> </option>
		                <option value="Administrator"> </option>
		             </datalist>
		     </div>

		     <div class="form-group">
				<label>Password</label>
				<input type="text" class="form_control" name="password" placeholder="Password">
			</div>

			<div class="form-group">
				<label>Confirm password</label>
				<input type="text" class="form_control" name="rpassword" placeholder="Confirm password">
			</div>

			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>
	</div>	

<?php echo form_close(); ?>



