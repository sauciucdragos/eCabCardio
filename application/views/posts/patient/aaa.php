
<div class="container">    
    <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
      <div class="panel panel-info card" >
        <div class="panel-heading">
          <div class="panel-title"><b>Search patient</b></div>
        </div>     

        <div style="padding-top:30px" class="panel-body" >

          <div style="display: none" id="login-alert" class="alert alert-danger col-sm-12"></div>

         <?php echo validation_errors(); ?>

         <?php echo form_open('posts/search_patient','id="loginform" class="form-horizontal"');  ?>

         <!-- <form id="loginform" class="form-horizontal" role="form">
			--> 
       <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <span class="addon"><i class="fas fa-envelope"></i></span>
            <select name="select_criteriu" class="form-control" id="select_criteriu">
                  <option value="">Select criteriu</option>
                  <option value="name">First Name, Second Name</option>
                  <option value="cnp">Cnp</option>
                  <option value="cnp_name_nr">First Name, Second Name, Cnp, Pacientnumber</option>
            </select>
         </div>


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

    <!-- pacient_nr --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <span class="addon"><i class="fas fa-user-alt"></i></span>
              <input id="patient_nr" type="number" step="1" class="form-control" name="patient_nr" value="" placeholder="patient number">            
            </div>

 


            <div style="margin-top:10px" class="form-group">
    <!-- Button tip submit -->
              <div class="col-sm-12 controls">
                <button id="search" type="submit" class="btn btn-default">Search</button>
              </div>
            </div>
            <hr><br>
            <p id="mesaj_criteriu" class="bold"> </p> 
          </form>         
        </div>                     
      </div>  
    </div>
  </div>  <!--class container -->

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
 <script type="text/javascript">
  alert('1111');
      $(document).ready(function(){ //1  (aa
      

        $('#select_criteriu').on('change', function() {  //2
        var $criteriu = $(this).val();  

           
        if($criteriu == 'name')
        { //3
         
        }  //3
        else if($criteriu == 'cnp') 
               { //4
                document.getElementById("mesaj_criteriu").innerHTML = "<b>"+"Search after CNP"+"</b>";
                $('#cnp').prop('disabled', false);
                $('#search').prop('disabled', false);
              } //4

              else if($criteriu == 'cnp_name_nr')
                { //5
                  document.getElementById("mesaj_criteriu").innerHTML = "<b>"+"Search after First Name, Second Name, CNP, Patient_number"+"</b>";
                $('#first_name').prop('disabled', false);
                $('#last_name').prop('disabled', false);
                $('#cnp').prop('disabled', false);
                $('#patient_nr').prop('disabled', false);
                $('#search').prop('disabled', false);
              } //5

      });  //2

  });  //1  )aa

 </script>



</body>
</html>