
    <div class="container">
      <a class="btn btn-primary" href="<?php echo base_url('content/services') ?>">back</a> <legend><center>Application Form</center></legend>
      <div class="card" style="background-color:beige;border:  groove;">
            <?php echo form_open( 'content/add_application/'.$record->id,array('role'=>'form','data-toggle'=>"validator" ,'class'=>"form-horizontal")) ; ?>

                <div class="form-group">
                  
                </div>
               <center> 
               <h2>Popers Limited</h2>
               
               </center>
                 <p>Fill in the following details so as to be a successfull applicant for the position the you want to get;</P>
                <div class="form-group">
                    <label class="control-label col-sm-1" for="ap_name"> Name</label>
                    <div class="col-sm-3">
                        <input type="text" name="ap_name" id="ap_name" class="form-control"  value="  " required/>  
                          <small style="color:red; font-size: 80%"><?php echo form_error('ap_name');?></small>                                        
                    </div>
                     <label class="control-label col-sm-1" for="email">Email</label>
                    <div class="col-sm-3">
                        <input type="text" name="email" id="email" class="form-control" value="  "required/>  
                          <small style="color:red; font-size: 80%"><?php echo form_error('email');?></small>                                           
                    </div>
                    <label class="control-label col-sm-1" for="contact">Phone Number</label>
                    <div class="col-sm-3">
                        <input type="tel" name="contact" id="contact" class="form-control" value="  "required/> 
                          <small style="color:red; font-size: 80%"><?php echo form_error('contact');?></small>                                            
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="control-label col-sm-1" for="ap_gender">Gender</label>
                    <div class="col-sm-3">
                       
                        <select  name="ap_gender" id="ap_gender" class="form-control" value="  ">
                        <option value="Male">Male</option>
                         <option value="Female">Female</option>
                        </select>                                            
                    </div>
                    <label class="control-label col-sm-1" for="age">Age</label>
                    <div class="col-sm-3">
                        <input type="tel" name="age" id="age" class="form-control" value="  "required/>  
                          <small style="color:red; font-size: 80%"><?php echo form_error('age');?></small>                                           
                    </div>
                 
                </div>
      
                   <div class="form-group">
                    <label class="control-label col-sm-1" for="address"> Address</label>
                    <div class="col-sm-3">
                        <input type="text" name="address" id="address" class="form-control" value="  "required/> 
                          <small style="color:red; font-size: 80%"><?php echo form_error('address');?></small>                                            
                    </div>
                     <label class="control-label col-sm-1" for="education_level">Education Level</label>
                    <div class="col-sm-3">
                        <input type="text" name="education_level" id="education_level" class="form-control" value="  "required/>  
                          <small style="color:red; font-size: 80%"><?php echo form_error('education_level');?></small>                                           
                    </div>
                   
                </div>
                   <div class="form-group">
                    <label class="control-label col-sm-1" for="id_number">ID Number</label>
                    <div class="col-sm-3">
                        <input type="text" name="id_number" id="id_number" class="form-control" value="  "required/>
                          <small style="color:red; font-size: 80%"><?php echo form_error('id_number');?></small>                                             
                    </div>
                      <label class="control-label col-sm-1" for="citizenship">Citizenship</label>
                    <div class="col-sm-3">
                        <input type="text" name="citizenship" id="citizenship" class="form-control" value="  "required/> 
                          <small style="color:red; font-size: 80%"><?php echo form_error('citizenship');?></small>                                            
                    </div>
                    
                </div>
                          <div class="form-group">
                    <label class="control-label col-sm-1" for="apply_for">For</label>
                    <div class="col-sm-3">
                        <input type="text" name="apply_for" id="apply_for" class="form-control" value="<?php echo $record->title?>"readonly/> 
                          <small style="color:red; font-size: 80%"><?php echo form_error('apply_for');?></small>                                            
                    </div>
                     <label class="control-label col-sm-1" for="ap_reason">Reason</label>
                    <div class="col-sm-3">
                         <textarea class="form-control" name="ap_reason" id="ap_reason" rows="3" placeholder="Application reason"></textarea> 
                          <small style="color:red; font-size: 80%"><?php echo form_error('ap_reason');?></small>                                                
                                         
                    </div>
                    
                    
                </div>
              
                <div class="form-group d-print-none">
                    <div class="col-sm-12 col-sm-offset-10">
                   
              <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1 d-print-none"><i class="fa fa-print"></i>  Print Form</a>
                        <button class="btn btn-primary" > Submit</button>
                        
                    </div>
                </div>
        </form>
        </div>
    </div>
    