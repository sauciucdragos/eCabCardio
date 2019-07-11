
<div class="container">    
    <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
      <div class="panel panel-info card" >
        <div class="panel-heading">
          <div class="panel-title"><b>Register patient</b></div>
        </div>     

        <div style="padding-top:30px" class="panel-body" >

          <div style="display: none" id="login-alert" class="alert alert-danger col-sm-12"></div>

         <?php echo validation_errors(); ?>

         <?php echo form_open('posts/create_patient','id="loginform" class="form-horizontal"');  ?>

         <!-- <form id="loginform" class="form-horizontal" role="form">
			--> 
     <!-- first name --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
            <!--	<label>First Name    </label> -->
             <span class="addon"><i class="fas fa-user-alt"></i></span>
              <input id="first_name" type="text" class="form-control" name="first_name" value="" placeholder="first name patient">   </div>

<!-- last name --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <span class="addon"><i class="fas fa-user-alt"></i></span>
              <input id="last_name" type="text" class="form-control" name="last_name" value="" placeholder="last name patient"> </div>

    <!-- cnp --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <span class="addon"><i class="fas fa-user-alt"></i></span>
              <input id="cnp" type="text" class="form-control" name="cnp" value="" placeholder="cnp patient">            
            </div>

<!-- birth date -->
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <span class="addon"><i class="fas fa-user-alt"></i></span>
              <input id="birth_date" type="date" class="form-control" name="birth_date" value="" placeholder="birth date patient">   
            </div>  

<!-- county  --> 

           
          <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <span class="addon"><i class="fas fa-envelope"></i></span>
              <select name="county" class="form-control" id="county">
                <option value="">Select county</option>
                <?php foreach ($countys as $county): ?>
                 <option value="<?php echo $county['county2']; ?>"><?php echo $county['county']; ?></option>
               <?php endforeach; ?>
             </select>
           </div>
                


<!-- city --> 
           
          <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <span class="addon"><i class="fas fa-envelope"></i></span>
            <select name="city" class="form-control" id="city" disabled="">
                 <option value="">Select city</option>
            </select>
         </div>


<!-- adress --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <span class="addon"><i class="fas fa-user-alt"></i></span>
              <input id="adress" type="text" class="form-control" name="adress" value="" placeholder="adress patient">        
            </div>
<!-- profession --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <span class="addon"><i class="fas fa-user-alt"></i></span>
              <input id="profession" type="text" class="form-control" name="profession" value="" placeholder="profession patient">   </div>
<!-- workplace --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <span class="addon"><i class="fas fa-user-alt"></i></span>
              <input id="workplace" type="text" class="form-control" name="workplace" value="" placeholder="workplace patient">  
               </div>

<!-- phone --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <span class="addon"><i class="fas fa-user-alt"></i></span>
              <input id="phone" type="text" class="form-control" name="phone" value="" placeholder="phone patient">             </div>
<!-- email --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <span class="addon"><i class="fas fa-user-alt"></i></span>
              <input id="email" type="email" class="form-control" name="email" value="" placeholder="email patient">             </div>

  

 <!-- marital_status (valoare din lista) -->
          <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <span class="addon"><i class="fas fa-envelope"></i></span>
            <input list="marital_status" name="marital_status"  placeholder="marital status">   
               <datalist id="marital_status">
                 <option value="Married">
                <option value="UnMarried">
             </datalist>
          </div>


            <div style="margin-top:10px" class="form-group">
    <!-- Button tip submit -->
              <div class="col-sm-12 controls">
                 <button id="save"  value="save" name="save"type="submit" class="btn btn-default">Save</button>
                <button id="consult" value="consult" name="consult" type="submit" class="btn btn-info">Consult</button>
                <button id="cancel" value="cancel" name="cancel" type="submit" class="btn btn-warning">Cancel</button>
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
 <script type="text/javascript">
      $(document).ready(function(){  //1
        $('#county').on('change', function() {  //2
        var county2 = $(this).val();  
        if(county2 == '')
        {
          $('#city').prop('disabled', true);
        }
        else
        {
           $('#city').prop('disabled', false);
           $.ajax({
              url:"<?php echo base_url()?>posts/get_city",
              type:"POST",
              data: {'county2' : county2},
              dataType: 'json',
              success: function(data){
                //  alert('Ok');
                  //console.log(data);
                    $('#city').html(data);
              },
              error: function(){
                alert('Error occur ...');
              }
           });
        }

      });  //2

  });  //1

 </script>



</body>
</html>