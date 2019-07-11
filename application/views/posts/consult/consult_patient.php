<div class="container">    
    <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-12 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
      <div class="panel panel-info card" >
        <div class="panel-heading">
          <h4 class="fond_h4"><b>Patient demografic date</b></h4>
        </div>     

        <div style="padding-top:30px" class="panel-body" >

          <div style="display: none" id="login-alert" class="alert alert-danger col-sm-12"></div>

         
<!--
         <?php echo form_open('consults/consult_patient','id="loginform" class="form-horizontal"');  ?>
-->
  
         <!-- <form id="loginform" class="form-horizontal" role="form">
			--> 
      

         <!-- <form id="loginform" class="form-horizontal" role="form">
      --> 
     <!-- first name --> 
<table class="table table-bordered">
    <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Cnp</th>
         <th>Birth date</th>
          <th>Patient_number</th>
        <th>Adress</th>    
    </tr>
    
        <tr>
            <td><?php echo $patient->first_name;?> </td>
            <td><?php echo $patient->last_name;?></td>
            <td><?php echo $patient->cnp;?></td>
            <td><?php echo $patient->birth_date;?></td>
            <td><?php echo $patient->patient_number;?></td>
            <td><?php echo $patient->adress;?></td>   
        </tr>       
  </table>  
  <br><hr>

<h4 class="fond_h4"><b>Anterior Consult</b></h4>


 <?php
    foreach($consult as $con) {
        ?>

<p class="fond_gri"> Date: <?php echo $con->consult_date;?> </p>
 <label><b>Consult reason</b></label>
  <textarea name="consult_reason" id="consult_reason" rows="2" cols="130" ><?php echo $con->consult_reason;?></textarea>

  <label><b>Notices</b></label>
  <textarea name="notices" id="notices"rows= "2" cols="130" ><?php echo $con->notices;?></textarea>

  <label><b>Reference</b></label>
  <textarea name="reference" id="reference" rows="2" cols="130" ><?php echo $con->reference;?></textarea>

   <label><b>Treatment</b></label>
  <textarea name="treatment" id="treatment" rows="2" cols="130" ><?php echo $con->treatment;?></textarea>
    <br><hr><hr>

     <?php
    }
    ?>

<?php echo validation_errors(); ?>
<form action="<?php echo site_url('consults/consult_patient/'.$patient->patient_id);?>" method="post">

<h4 class="fond_h4"><b>Entry Consult</b></h4>

  <label><b>Phisiologic personal antecedent</b></label>
  <textarea name="ant_pers_ph" id="ant_per_ph"rows="2" cols="130" ></textarea>
 
  <label><b>Patologic personal antecedent</b></label>
  <textarea name="ant_pers_pat" id="ant_per_pat" rows="2" cols="130" ></textarea>

  <label><b>Heredo colateral antecedent</b></label>
  <textarea name="ant_heredo_col" id="ant_hero_col"rows="2" cols="130" ></textarea>

  <label><b>Enviroment condition</b></label>
  <textarea name="enviroment_condition" id="enviroment_condition" rows="2" cols="130" ></textarea>

  <label><b>Present state</b></label>
  <textarea name="present_state" id="present_state" rows="2" cols="130" ></textarea>

  <label><b>Apparatus circulatory</b></label>
  <textarea name="apparatus_circ" id="apparatus_circ" rows="2" cols="130" ></textarea>

  <label><b>Local examination and complementary</b></label>
  <textarea name="ex_local_and_complem" id="ex_local_and_complem" rows="2" cols="130" ></textarea>

  <label><b>Personal antecedents</b></label>
  <textarea name="personal_antecedents" id="personal_antecedents" rows="2" cols="130" ></textarea>

  <label><b>Consult reason</b></label>
  <textarea name="consult_reason" id="consult_reason" rows="2" cols="130" ></textarea>

  <label><b>Notices</b></label>
  <textarea name="notices" id="notices" rows= "2" cols="130" ></textarea>

  <label><b>Diagnostics</b></label>
  <textarea name="diagnostics" id="diagnostics" rows="2" cols="130" ></textarea>

  <label><b>Reference</b></label>
  <textarea name="reference" id="reference" rows="2" cols="130" ></textarea>

   <label><b>Treatment</b></label>
  <textarea name="treatment" id="treatment" rows="2" cols="130" ></textarea>

<!-- Checkbox examination -->

<h4 class="fond_h4"><b>Select Examination</b></h4>
    <?php
    foreach($examination as $exam) {
        ?>
         
      <input type="checkbox" name="examination[]" value="<?php echo $exam->dic_examination_id;?>"><?php echo $exam->examination_type;?>
    <?php
    }
    ?>
<br> <hr><hr>


<!-- Checkbox analysis -->

<h4 class="fond_h4"><b>Select Analysis</b></h4>
    <?php
    foreach($analysis as $analys) {
        ?>
         
      <input type="checkbox" name="analysis[]" value="<?php echo $analys->dic_analysis_id;?>"><?php echo $analys->analysis_type;?>
    <?php
    }
    ?>
<br> <hr><hr>
  
    <!-- Button tip submit -->
              <div class="col-sm-12 controls">
                 <button id="save"  value="save" name="save" type="submit" class="btn btn-default">Save</button>
                 <button id="medical_letter"  value="medical_letter" name="medical_letter" type="submit" class="btn btn-info">Medical letter</button>

                 <a href="<?php echo base_url('home')?>"  id="cancel" value="cancel" name="cancel" class="btn btn-warning">Cancel</a>
              </div>
            </div>
            
         
          </form>         
        </div>                     
      </div>  
    </div>
  </div>  <!--class container -->

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  


</body>
</html>