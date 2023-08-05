
    <div class="container">
      
              <?php echo form_open_multipart('EmployeeController/add_employee',array('role'=>'form','data-toggle'=>"validator" ,'class'=>"form-horizontal")) ; ?>


                <div class="form-group">
                    <legend>Add An Employee</legend>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="emp_name"> Name</label>
                    <div class="col-sm-4">
                        <input type="text" name="emp_name" id="emp_name" class="form-control" value="  " required/> 
                         <small style="color:red; font-size: 80%"> <?php echo form_error('emp_name');?></small>                                                       
                    </div>
                     <label class="control-label col-sm-2" for="email">Email</label>
                    <div class="col-sm-4">
                        <input type="text" name="email" id="email" class="form-control" value="  "required/>   
                         <small style="color:red; font-size: 80%"> <?php echo form_error('email');?></small>                                           
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="control-label col-sm-2" for="emp_gender">Gender</label>
                    <div class="col-sm-4">
                        <input type="text" name="emp_gender" id="emp_gender" class="form-control" value="  "required/>  
                          <small style="color:red; font-size: 80%"> <?php echo form_error('emp_gender');?></small>                                             
                    </div>
                    <label class="control-label col-sm-2" for="phone">Phone Number</label>
                    <div class="col-sm-4">
                        <input type="tel" name="phone" id="phone" class="form-control" value="  "required/>   
                         <small style="color:red; font-size: 80%"> <?php echo form_error('phone');?></small>                                          
                    </div>
                </div>
      
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="phy_address">Physical Address</label>
                    <div class="col-sm-4">
                        <input type="text" name="phy_address" id="phy_address" class="form-control" value="  "required/>  
                           <small style="color:red; font-size: 80%"> <?php echo form_error('phy_address');?></small>                                               
                    </div>
                     <label class="control-label col-sm-2" for="workposition">WorkPosition</label>
                    <div class="col-sm-4">
                        <input type="text" name="workposition" id="workposition" class="form-control" value="  "required/> 
                           <small style="color:red; font-size: 80%"> <?php echo form_error('workposition');?></small>                                                
                    </div>
                </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="id_number">ID Number</label>
                    <div class="col-sm-4">
                        <input type="text" name="id_number" id="id_number" class="form-control" value="  "required/>  
                           <small style="color:red; font-size: 80%"> <?php echo form_error('id_number');?></small>                                               
                    </div>
                </div>
                          <div class="form-group">
                    <label class="control-label col-sm-2" for="position">Position</label>
                    <div class="col-sm-4">
                        <input type="text" name="position" id="position" class="form-control" value="  "required/>   
                           <small style="color:red; font-size: 80%"> <?php echo form_error('position');?></small>                                              
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                     <a class="btn btn-primary" href="<?php echo base_url('Admincontent/employees') ?>">back</a>

                        <button type="submit" class="btn btn-primary" > Submit</button>
                        
                    </div>
                </div>
        </form>    
    </div>
   