<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0 >
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css">
    
    <!--delete the refresh line below!-->
    <!--<meta http-equiv="refresh" content="5" />-->


    <title>Care for tomorrow!</title>
</head>
</nav>
<body>
    <div class="container">

        <header>
            <img src="<?php echo base_url();?>assets/pictures/med_logo_mic.png" alt="designed by freepik.com" class="logo">
   
        <nav>
            <a href="#" class="hide-desktop">
            <img src="<?php echo base_url();?>assets/pictures/ham.svg" alt="toogle menu" class="menu" id="menu">
            </a>

            <ul class="show-desktop hide-mobile" id="nav">

                                <!--ACCESS MENUS FOR ADMIN-->
                <?php if($this->session->userdata('usertype')==='3'):?>
                        <li id="exit" class="exit-btn hide-desktop"><img src="<?php echo base_url();?>assets/pictures/exit.svg" alt="exit menu"></li>
                        <li><a href="<?php echo base_url(); ?>page/admins">Acasa</a></li>
                        <li><a href="">Servicii</a></li>
                        <li><a href="<?php echo base_url();?>register">Pacienti</a></li>
                        <li><a href="">Angajati</a></li>
                        <li><a href="">Finante</a></li>
                        <li><a href="">Anunturi</a></li>
                        <li><a href="<?php echo site_url('login/logout');?>">Sign Out, <?php echo ($this->session->userdata('first_name')." ".$this->session->userdata('last_name'));?></a></li>

                                <!--ACCESS MENUS FOR MEDIC-->
                <?php elseif($this->session->userdata('usertype')==='2'):?>
                        <li id="exit" class="exit-btn hide-desktop"><img src="<?php echo base_url();?>assets/pictures/exit.svg" alt="exit menu"></li>
                        <li><a href="">Acasa</a></li>
                        <li><a href="">Medici</a></li>
                        <li><a href="">Pacienti</a></li>
                        <li><a href="">Consult</a></li>
                        <li><a href="<?php echo base_url('login/logout');?>">Sign Out, <?php echo ($this->session->userdata('first_name')." ".$this->session->userdata('last_name'));?></a></li>

                                <!--ACCESS MENUS FOR ASISTENT-->
                <?php else:?>
                        <li><a href="<?php echo base_url(); ?>page">Acasa</a></li>
                        <li><a href="">Pacienti</a></li>
                        <li><a href="">Analize</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="<?php echo site_url('login/logout');?>">Sign Out, <?php echo ($this->session->userdata('first_name')." ".$this->session->userdata('last_name'));?></a></li>
                <?php endif;?>
            </ul>
        </nav>
        </header>
    </div>
