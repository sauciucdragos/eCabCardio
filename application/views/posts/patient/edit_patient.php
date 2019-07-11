
<div class="container">    
    <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
      <div class="panel panel-info card" >
        <div class="panel-heading">
          <div class="panel-title"><b>Register patient</b></div>
        </div>     

        <div style="padding-top:30px" class="panel-body" >

          <div style="display: none" id="login-alert" class="alert alert-danger col-sm-12"></div>

         <?php echo validation_errors(); ?>

        <form action="<?php echo site_url('posts/update_patient/'.$patient->patient_id);?>" method="post">


         <!-- <form id="loginform" class="form-horizontal" role="form">
			--> 
     <!-- first name --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
            <label>First Name :</label>
              <input id="first_name" type="text" class="form-control" name="first_name" value="<?php echo $patient->first_name;?>" >  
               </div>

<!-- last name --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <label>Last name :</label>
              <input id="last_name" type="text" class="form-control" name="last_name" value="<?php echo $patient->last_name;?>" > 
            </div>

    <!-- cnp --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
               <label> Cnp  :</label>
              <input id="cnp" type="text" class="form-control" name="cnp" value="<?php echo $patient->cnp;?>" >            
            </div>

<!-- birth date -->
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
               <label>Birth Date  :</label>
              <input id="birth_date" type="date" class="form-control" name="birth_date" value="<?php echo $patient->birth_date;?>" >   
            </div>  





<!-- city --> 


<!-- adress --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
               <label>Adress :</label>
              <input id="adress" type="text" class="form-control" name="adress" value="<?php echo $patient->adress;?>" >     
            </div>
<!-- profession --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
               <label>Profession :</label>
              <input id="profession" type="text" class="form-control" name="profession" value="<?php echo $patient->profession;?>" >   
            </div>
<!-- workplace --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
               <label>Workplace :</label>
              <input id="workplace" type="text" class="form-control" name="workplace" value="<?php echo $patient->workplace;?>" >  
               </div>

<!-- phone --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
               <label>Phone :</label>
              <input id="phone" type="text" class="form-control" name="phone" value="<?php echo $patient->phone;?>" >            
               </div>
<!-- email --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
               <label>Email :</label>
              <input id="email" type="email" class="form-control" name="email" value="<?php echo $patient->email;?>" >     
             </div>


 <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <label>Marital status :</label>
            <select name="marital_status" class="form-control" id="marital_status" >
              <option value="<?php echo $patient->marital_status; ?>"><?php echo $patient->marital_status; ?></option>
            <option value="Married">married </option>
            <option value="UnMarried">unmarried</option>
          </select>
         </div>

            
    <!-- Button tip submit -->
              <div class="col-sm-12 controls">
                 <button id="save"  value="save" name="save"type="submit" class="btn btn-default">Save</button>
                <a href="<?php echo site_url('consults/consult_patient/'.$patient->patient_id);?>"  id="consult" value="consult" name="consult" class="btn btn-info">Consult</a>
                 <a href="<?php echo site_url('posts/search_patient_result')?>"  id="cancel" value="cancel" name="cancel" class="btn btn-warning">Cancel</a>
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