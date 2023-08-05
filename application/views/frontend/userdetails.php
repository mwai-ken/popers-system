


    <div class="container">
      
          //  <?php echo form_open( 'Admincontent/update',array('role'=>'form','data-toggle'=>"validator" ,'class'=>"form-horizontal")) ; ?>
                                <?php echo form_open( 'Admincontent/application/'.$record->id,array('role'=>'form','data-toggle'=>"" ,'class'=>"")) ; ?>

                <div class="form-group">
                    <legend>User Details</legend>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="emp_name"> Name</label>
                    <div class="col-sm-4">
                        <input type="text" name="emp_name" id="emp_name" class="form-control" value="  " required/>                                          
                    </div>
                     <label class="control-label col-sm-2" for="email">Email</label>
                    <div class="col-sm-4">
                        <input type="text" name="email" id="email" class="form-control" value="  "required/>                                             
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="control-label col-sm-2" for="emp_gender">Gender</label>
                    <div class="col-sm-4">
                        <input type="text" name="emp_gender" id="emp_gender" class="form-control" value="  "required/>                                             
                    </div>
                    <label class="control-label col-sm-2" for="phone">Phone Number</label>
                    <div class="col-sm-4">
                        <input type="tel" name="phone" id="phone" class="form-control" value="  "required/>                                             
                    </div>
                </div>
      
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="phy_address">Physical Address</label>
                    <div class="col-sm-4">
                        <input type="text" name="phy_address" id="phy_address" class="form-control" value="  "required/>                                             
                    </div>
                </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="id_number">ID Number</label>
                    <div class="col-sm-4">
                        <input type="text" name="id_number" id="id_number" class="form-control" value="  "required/>                                             
                    </div>
                </div>
                          <div class="form-group">
                    <label class="control-label col-sm-2" for="position">Position</label>
                    <div class="col-sm-4">
                        <input type="text" name="position" id="position" class="form-control" value="  "required/>                                             
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                     <a class="btn btn-primary" href="<?php echo base_url('Admincontent/Systemusers') ?>">back</a>

                        <button class="btn btn-success" > update</button>
                        
                    </div>
                </div>
        </form>    
    </div>
   