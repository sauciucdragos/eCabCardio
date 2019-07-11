
<div class="container">    

  
   <a href="<?php echo site_url('posts/create_patient')?>" class="btn btn-info">Add New Person</a>
    

</table>

  <table class="table table-bordered">
    <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Cnp</th>
         <th>Birth date</th>
          <th>Patient_number</th>
        <th>Adress</th>
         <th>Action</th>
    </tr>
    <?php
    foreach($patient as $pac) {
        ?>
        <tr>
            <td><?php echo $pac->first_name;?> </td>
            <td><?php echo $pac->last_name;?></td>
            <td><?php echo $pac->cnp;?></td>
            <td><?php echo $pac->birth_date;?></td>
            <td><?php echo $pac->patient_number;?></td>
            <td><?php echo $pac->adress;?></td>
            <td>
              <a href="<?php echo site_url('posts/edit_patient/'. $pac->patient_id)?>" class="btn btn-primary" class="btn btn-primary">Edit</a>
              <a href="<?php echo site_url('consults/consult_patient/' . $pac->patient_id)?>" class="btn btn-info">Consult</a>
            </td>
        </tr>
        <?php
    }
    ?>
  </table>  
  <hr>
  <p>Patient number :<?php echo $total_rows;?></p>
  <br><hr>
 <?php echo $this->pagination->create_links();?>

  </div>  <!--calss containert -->
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

 <!--<script src="js/intropac.js"></script>  
 <script src="js/listajudet.js"></script> -->
<!--
 <script src="<?php echo base_url(); ?>assets/js/listajudet.js"></script>

<script src="js/listaloc.js"></script>  -->
 