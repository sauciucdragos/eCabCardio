<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link href="<?php echo base_url('assets/css/login_form.css');?>" rel="stylesheet">
  </head>

  <body>
 
    <div class="login-page">
      <form class="form" action="<?php echo base_url('login/auth');?>" method="post">
        <?php echo $this->session->flashdata('msg');?>

      <form class="login-form">
          <input type="text" name="username"placeholder="username" required />
          <input type="password" name="password" placeholder="password" required/>
          <button>login</button>
          <p class="message">Can't login? <a href='error404'>Contact an administrator</a></p>

      </form>
      </form>
    </div>
  </body>
</html>