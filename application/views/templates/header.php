<html>
        <head>
            <!-- Bootstrap CSS -->
            <!--
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        -->
             <!-- fontawesome CSS -->
             <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

             <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css')?>">


             <!--<link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
             <!--<link rel="stylesheet" href="<?php echo site_url('assets/css/style.css')?>"> -->
             <link rel="stylesheet" href="<?php echo site_url('assets/css/styleecab.css')?>">
             <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
                <title>eCabCardio</title>
        </head>
        <body>
        	<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">EcabCardio</a>
                  
                  <div class="collapse navbar-collapse" id="navbarNav">
                       <ul class="navbar-nav">

                <?php if($this->session->userdata('logged_in')) :?> 
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>posts/search_patient">Patient</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>posts/create_patient">Patient Entry</a>
                            </li>

                             <li class="nav-item">
                                <a class="nav-link" href="">Patient Files</a>
                            </li>

                             <li class="nav-item">
                                <a class="nav-link" href="">Financiar Modul</a>
                            </li>
                           
                        </ul>

                        
                        <ul class="nav navbar navbar-right">
                          <!--
                             <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>posts/create_dic_examination">Create dic_examination</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>posts/search_dic_examination">Search dic_examination</a>
                            </li>
                              -->

         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Administration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="<?php echo base_url(); ?>posts/create_dic_examination">Examination</a>

           <a class="dropdown-item" href="">Laboratory test</a>
           <a class="dropdown-item" href="">User list</a>
           <a class="dropdown-item" href="">Administration Cabinet</a>
           <a class="dropdown-item" href="">County</a>
           <a class="dropdown-item" href="">City</a>
        
          <div class="dropdown-divider"></div>

          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
                    <?php endif; ?> 


                    <?php if(!$this->session->userdata('logged_in')) :?>
                             <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
                            </li>
                    <?php endif; ?>  

                    <?php if($this->session->userdata('logged_in')) :?>
                             <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
                            </li>
                     <?php endif; ?>          

                        </ul> 
<!--
      <?php if($this->session->userdata('logged_in')) :?> 
      <form class="form-inline my-2 my-lg-0" type="post" action="<?php echo site_url('posts/search_dic_examination')?>">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>  
       <?php endif; ?>
-->

                 </div>
            </nav>		
          	
 <!-- Flash messages -->
           <?php if($this->session->flashdata('user_registered')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
          <?php endif;?>

        <?php if($this->session->flashdata('patient_created')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('patient_created').'</p>'; ?>
          <?php endif;?>


          <?php if($this->session->flashdata('dic_examinationt_created')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('dic_examinationt_created').'</p>'; ?>
          <?php endif;?>

           <?php if($this->session->flashdata('user_login')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_login').'</p>'; ?>
          <?php endif;?>

           <?php if($this->session->flashdata('login_failed')): ?>
            <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
          <?php endif;?>

            <?php if($this->session->flashdata('user_loggedout')): ?>
            <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
          <?php endif;?>

          <?php if($this->session->flashdata('dic_examination_updated')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('dic_examination_updated').'</p>'; ?>
          <?php endif;?>

            <?php if($this->session->flashdata('dic_examination_deleted')): ?>
            <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('dic_examination_deleted').'</p>'; ?>
          <?php endif;?>
       
          <?php if($this->session->flashdata('search_all')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('search_all').'</p>'; ?>
          <?php endif;?>

          <?php if($this->session->flashdata('patient_updated')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('patient_updated').'</p>'; ?>
          <?php endif;?>

          <?php if($this->session->flashdata('consult_saved')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('consult_saved').'</p>'; ?>
          <?php endif;?>

          <?php if($this->session->flashdata('medical_letter_saved')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('medical_letter_saved').'</p>'; ?>
          <?php endif;?>



       <!--    <h1>  <?php echo $title; ?></h1>  -->