<!-- county  --> 

    <!--       
          <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <span class="addon"><i class="fas fa-envelope"></i></span>
              <select name="county" class="form-control" id="county">
                <option value="">Select county</option>
                <?php foreach ($countys as $county): ?>
                 <option value="<?php echo $county['county2']; ?>"><?php echo $county['county']; ?></option>
               <?php endforeach; ?>
             </select>
           </div>
                
-->
         





          <div style="margin-bottom: 5px; padding: 6px 12px;" class="input-group">
              <span class="addon"><i class="fas fa-envelope"></i></span>
            <select name="city" class="form-control" id="city" >
                 <option value="<?php echo $patient->dic_city_id;?>"> <?php echo $patient->dic_city_id; ?></option>
            </select>
         </div

         <option value="Married">Married </option>
                <option value="UnMarried">UnMarried</option>