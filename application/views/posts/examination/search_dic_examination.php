
<div class="container">    

   <h3> <?php $title  ?> </h3> 
   <a href="<?php echo site_url('examinations/create_dic_examination')?>" class="btn btn-info">Add New Value to Examination</a>
    <hr>
<!--
<p><?php var_dump($dic_examination) ; ?></p>
-->

<?php
if($keyword) {
?>
<b>Search Result For "<?php echo $keyword ; ?>" </b>
<?php
}
?>

  <table class="table table-bordered">
    <tr>
        <th>Name examination</th>
        <th>Price</th>
        <th>From date</th>
        <th>To date</th>
         <th>Action</th>
    </tr>
    <?php
    foreach($dic_examination as $dic) {
        ?>
        <tr>
            <td><?php echo $dic->examination_type;?> </td>
            <td><?php echo $dic->price;?></td>
            <td><?php echo $dic->from_date;?></td>
            <td><?php echo $dic->to_date?></td>
            <td>
              <a href="<?php echo site_url('examinations/edit_dic_examination/'.$dic->dic_examination_id)?>" class="btn btn-primary">Edit</a>
              <a href="<?php echo site_url('examinations/delete_dic_examination/'.$dic->dic_examination_id)?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php
    }
    ?>
  </table>  
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
 