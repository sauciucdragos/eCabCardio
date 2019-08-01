<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width", initial-scale=1.0 >
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css">
	
	<!-- delete the refresh line below! -->
	<!-- <meta http-equiv="refresh" content="5" /> -->


<body>

	<div class="container">

		<section>
			<img src="<?php echo base_url();?>assets/pictures/med_logo1.png" alt="med_logo" class="server">
			
			<h1>Care for tomorrow!</h1>
			<p class="subhead">We know what is the best for your HEART</p>

			<img src="<?php echo base_url();?>assets/pictures/scroll.svg" alt="scroll down" class="scroll hide-mobile show-desktop">
		</section>
	</div>

	<div class="blue-container">
		<div class="container">
			<ul>
				<li>
					<img src="<?php echo base_url();?>assets/pictures/icon-1.svg" alt="Calendar icon">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam accusamus error beatae necessitatibus voluptatum, itaque quis inventore magni!</p>
				</li>

				<li>
					<img src="<?php echo base_url();?>assets/pictures/icon-2.svg" alt="Wallet icon">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam accusamus error beatae necessitatibus voluptatum, itaque quis inventore magni!</p>
				</li>

				<li>
					<img src="<?php echo base_url();?>assets/pictures/icon-3.svg" alt="Contact icon">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam accusamus error beatae necessitatibus voluptatum, itaque quis inventore magni!</p>
				</li>
			</ul>
		</div>
	</div>

	<div class="gray-container">
		<div class="container">
			<ul>
				<li>
					<figure>
					<img src="<?php echo base_url();?>assets/pictures/user1.png" alt="user testimonial picture">
					<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, libero.</blockquote>
					<figcaption>- Jane Doe</figcaption>
					</figure>
				</li>
				<li>
					<figure>
					<img src="<?php echo base_url();?>assets/pictures/user2.png" alt="user testimonial picture">
					<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente tenetur, nam!</blockquote>
					<figcaption>- John Doe</figcaption>
					</figure>
				</li>
			</ul>
		</div>
	</div>

	<div class="container">
		<h2>Listen to your heart</h2>
		<a href="<?php echo base_url('#');?>" class="cta">Contact us now</a>
	</div>


<?php $this->load->view('script');?>

