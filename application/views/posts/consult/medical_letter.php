<div class="container">    
    <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-12 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
      <div class="panel panel-info card" >
        <div class="panel-heading">
          
        </div>     

        <div style="padding-top:30px" class="panel-body" >

          <div style="display: none" id="login-alert" class="alert alert-danger col-sm-12"></div>

         

         <?php echo form_open('consults/medical_letter','id="loginform" class="form-horizontal"');  ?>

  
         
      <?php echo validation_errors(); ?>

      <h2> Medical letter </h2>
      <h4 class="fond_h4"><b>Cabinet date</b></h4>
     <div class="antet_cabinet">

<?php
    foreach($cabinet as $cab) {
        ?>

     <?php echo $cab->cab_name?> <br>
     <?php echo $cab->adress?> <br>
      <?php echo $cab->phone?> <br>
      <?php echo $cab->email?> <br>

   <?php
   }
   ?>   

      </div>   
      <br><hr><hr>

<h4 class="fond_h4"><b>Pacient date</b></h4>


 <h4 class="fond_h4"><b>Medical consult</b></h4>
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




   
              <input id="last_name" type="text" class="form-control" name="last_name" value="" placeholder=""> 

    <!-- Button tip submit -->
              <div class="col-sm-12 controls">
                 <button id="save"  value="save" name="save" type="submit" class="btn btn-default">Save and Print</button>
                 
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