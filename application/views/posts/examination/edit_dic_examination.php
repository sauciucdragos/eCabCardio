
<div class="container">    
    <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
      <div class="panel panel-info card" >
        <div class="panel-heading">
          <div class="panel-title"><b>Edit examination</b></div>
        </div>     

        <div style="padding-top:30px" class="panel-body" >

          <div style="display: none" id="login-alert" class="alert alert-danger col-sm-12"></div>

         <?php echo validation_errors(); ?> 

    <form action="<?php echo site_url('examinations/update_dic_examination/'.$dic_examination->dic_examination_id);?>" method="post">



         <!-- <form id="loginform" class="form-horizontal" role="form">
			--> 

     <!-- examination_type --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
            <label>Examination type:    </label>
              <input id="examination_type" type="text" class="form-control" name="examination_type" value="<?php echo $dic_examination->examination_type;?>">   </div>

      <!-- price --> 
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <label>Price:   </label>
              <input id="price" type="number" step="any" class="form-control" name="price" value="<?php echo $dic_examination->price;?>">   </div> 

           <!--    <input type="number" step="0.01">   
              <input type="number" step="any" />    -->

<!-- from_date  -->
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group"; display : none>
               <label>From date:    </label>
              <input id="from_date" type="date" class="form-control" name="from_date"  value="<?php echo $dic_examination->from_date;?>">   </div>  

<!-- to_date  -->
            <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group"; display : none>
               <label>To date:   </label>
              <input id="to_date" type="date" class="form-control" name="to_date"  value="<?php echo $dic_examination->to_date;?>">   </div>  


            <div style="margin-top:10px" class="form-group">
    <!-- Button tip submit -->
              <div class="col-sm-12 controls">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
            
          </form>         
        </div>                     
      </div>  
    </div>
  </div>  <!--calss containert -->
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

 <!--<script src="js/intropac.js"></script>  
 <script src="js/listajudet.js"></script> -->
<!--
 <script src="<?php echo base_url(); ?>assets/js/listajudet.js"></script>

<script src="js/listaloc.js"></script>  -->
 