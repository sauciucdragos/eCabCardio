<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width", initial-scale=1.0 >
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css">
	
	<!--delete the refresh line below!-->
	<!--<meta http-equiv="refresh" content="5" />-->


	<title>Build your future</title>
</head>

<body>
	<div class="container">

		<header>
			<img src="<?php echo base_url();?>assets/pictures/logo.svg" alt="26andfour logo" class="logo">
	
		<nav>
			<a href="#" class="hide-desktop">
				<img src="<?php echo base_url();?>assets/pictures/ham.svg" alt="toogle menu" class="menu" id="menu">
			</a>

			<ul class="show-desktop hide-mobile" id="nav">
				<li id="exit" class="exit-btn hide-desktop"><img src="<?php echo base_url();?>assets/pictures/exit.svg" alt="exit menu"></li>
				<li><a href="<?php echo base_url(); ?>page">Home</a></li>
				<li><a href="">Gallery</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="<?php echo site_url('login/logout');?>">Sign Out, <?php echo $this->session->userdata('username');?></a></li>
			</ul>
			
		</nav>
		</header>
	</div>



