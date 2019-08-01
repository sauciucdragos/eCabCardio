<!DOCTYPE html>
<html lang="en">
 
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link href="<?php echo base_url('assets/css/login_form.css');?>" rel="stylesheet">
  </head>

  <body>
 
    <div class="login-page">
      <form class="form" action="<?php echo base_url();?>register/form_validation" method="post">

      <form class="login-form">

          <label>Enter Username</label>
          <input type="text" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>"   />
          <span class="text-danger"><?php echo form_error("username");?></span>
         
          <label>Enter First Name</label>
          <input type="text" name="first_name" placeholder="First Name" value="<?php echo set_value('first_name');?>" />
          <span class="text-danger"><?php echo form_error("first_name");?></span>
          
          <label>Enter Last Name</label>
          <input type="text" name="last_name" placeholder="Last Name" value="<?php echo set_value('last_name');?>" />
          <span class="text-danger"><?php echo form_error("last_name");?></span>
          
          <label>Enter Password</label>
          <input type="password" name="password" placeholder="Enter Password" />
          <span class="text-danger"><?php echo form_error("password");?></span>

          <label>Confirm Password</label>
          <input type="password" name="passconf" placeholder="Confirm Password" />
          <span class="text-danger"><?php echo form_error("passconf");?></span>
          
          <label>Enter Starting Date</label>
          <input type="text" name="from_date" placeholder="Enter Starting date, format YYYY-MM-DD" value="<?php set_value('from_date');?>"/>
          <span class="text-danger"><?php echo form_error("from_date");?></span>
          
          <label>Enter User Type</label>
          <select name="usertype" placeholder= "User Type" >
            <option value="1">Nurse</option>
            <option value="2">Medic</option>
            <option value="3">Administrator</option>
          </select>
          <span class="text-danger"><?php echo form_error("usertype");?></span>
          <button>Register</button>
         
      </form>
      </form>
    </div>
  </body>
  </html>
    
 
   
 