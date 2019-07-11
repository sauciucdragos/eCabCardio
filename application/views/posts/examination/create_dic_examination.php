
<div class="container">    
    <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
      <div class="panel panel-info card" >
        <div class="panel-heading">
          <div id="exam_title"class="panel-title"><b>Register dic_examination</b></div>
        </div>     

        <div style="padding-top:30px" class="panel-body" >

          <div style="display: none" id="login-alert" class="alert alert-danger col-sm-12"></div>

         <?php echo validation_errors(); ?>

         <?php echo form_open('posts/create_dic_examination','id="loginform" class="form-horizontal"');  ?>

         <!-- <form id="loginform" class="form-horizontal" role="form">
			--> 

     <!-- examination_type --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
            <!--	<label>First Name    </label> -->
             <span class="addon"><i class="fas fa-user-alt"></i></span>
              <input id="examination_type" type="text" class="form-control" name="examination_type" value="" placeholder="examination type">   </div>

      <!-- price --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
            <!--  <label>First Name    </label> -->
             <span class="addon"><i class="fas fa-user-alt"></i></span>
              <input id="price" type="number" step="any" class="form-control" name="price" value="" placeholder="price">   </div> 

           <!--    <input type="number" step="0.01">   
              <input type="number" step="any" />    -->

<!-- from_date  -->
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group"; display : none>
              <span class="addon"><i class="fas fa-user-alt"></i></span>
              <input id="from_date" type="date" class="form-control" name="from_date" value="" placeholder="from_date">   </div>  

<!-- to_date  -->
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group"; display : none>
              <span class="addon"><i class="fas fa-user-alt"></i></span>
              <input id="to_date" type="date" class="form-control" name="to_date" value="" placeholder="to_date">   </div>  


            <div style="margin-top:10px" class="form-group">
    <!-- Button tip submit -->
              <div class="col-sm-12 controls">
                   <button  id="save" type="submit" class="btn btn-default"   >Save</button>
                   <button  id="caut" type="submit" class="btn btn-info"  disabled="" >Search</button>
              </div>
            </div>

            <br> <hr>
<div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group"; display : none>
              <p id="mesaj_search"> Pentru a intra in cautare apasati tasta F7 </p>
</div>  
<div>
 <input type="hidden" id="save_search"  name="save_search" value="save" >   </div>


          </form>  


        </div>                     
      </div>  
    </div>
  </div>  <!--calss containert -->
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

 <script type="text/javascript">
function onEsc(){
  document.getElementById("price").value = 100;
  alert('fff');
}

 
window.onkeydown = evt => {
    switch (evt.keyCode) {
        //ESC
        case 27:
          alert('esc');
          $('#save')[0].disabled = false;
          $('#caut')[0].disabled = true;
           document.getElementById("exam_title").innerHTML = "<b>"+"Register dic_examination"+"</b>";
           document.getElementById("mesaj_search").innerHTML =  "Pentru a intra in cautare apasati tasta F7";
            document.getElementById("save_search").value="save";
           //alert("save-"+document.getElementById("save_search").value);

          $("price").val = 99;
           this.onEsc();
          break;
        //F1
        case 118:
        // alert('F7');
          $('#save')[0].disabled = true;
          $('#caut')[0].disabled = false;
          document.getElementById("exam_title").innerHTML = "<b>Search in dic_examination</b>";
          document.getElementById("mesaj_search").innerHTML =  "Pentru a reveni la introducere date tasta ESC";
           document.getElementById("save_search").value="search";
          // alert("search-"+document.getElementById("save_search").value);
          // this.onF8();
          break;
        //Fallback to default browser behaviour
        default:
            return true;
    }
    //Returning false overrides default browser event
    return false;
}

</script>




     
 <!--<script src="js/intropac.js"></script>  
 <script src="js/listajudet.js"></script> -->
<!--
 <script src="<?php echo base_url(); ?>assets/js/listajudet.js"></script>

<script src="js/listaloc.js"></script>  -->
 