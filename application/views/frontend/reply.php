
    <div class="container">
    
                    <?php echo form_open_multipart('Admincontent/reply_message/'.$record->id,array('role'=>'form','data-toggle'=>"validator" ,'class'=>"form-horizontal")) ; ?>


                <div class="form-group">
                    <legend>Reply The Message</legend>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="emp_name"> Name</label>
                    <div class="col-sm-4">
                        <input type="text" name="emp_name" id="emp_name" class="form-control" value=" <?php echo $record->Name?> " readonly/>  
                        <small><?php echo form_error('emp_name');?></small>                                        
                    </div>
                     <label class="control-label col-sm-2" for="email">Email</label>
                    <div class="col-sm-4">
                        <input type="text" name="email" id="email" class="form-control" value="<?php echo $record->Email; ?>  "readonly/>    
                        <small > <?php echo form_error('email');?></small>                                               
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="control-label col-sm-2" for="emp_gender">Gender</label>
                    <div class="col-sm-4">
                        <input type="text" name="emp_gender" id="emp_gender" class="form-control" value=" <?php echo $record->Gender; ?> "readonly/>  
                                                <small><?php echo form_error('emp_gender');?></small>                                               
                                           
                    </div>
                    <label class="control-label col-sm-2" for="phone">Phone Number</label>
                    <div class="col-sm-4">
                        <input type="tel" name="phone" id="phone" class="form-control" value="<?php echo $record->Contact; ?>  "readonly/>   
                         <small > <?php echo form_error('phone');?></small>                                            
                    </div>
                </div>
      
                  
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="message">Message</label>
                    <div class="col-sm-4">
                      <textarea class="form-control" name="message" id="message" rows="3" placeholder="message " readonly/><?php echo $record->Message; ?> </textarea> 

                         <small > <?php echo form_error('message');?></small>                                              
                    </div>
                </div>
                          <div class="form-group">
                    <label class="control-label col-sm-2" for="position">From</label>
                    <div class="col-sm-4">
                        <input type="text" name="from" id="from" class="form-control" value=" "required/>   
                         <small > <?php echo form_error('from');?></small>                                            
                    </div>
                    
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-2" for="reply">Reply to Messenger</label>
                    <div class="col-sm-4">
                        <input type="text" name="reply" id="reply" class="form-control" value=" "required/>   
                         <small > <?php echo form_error('reply');?></small>                                            
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                     <a class="btn btn-primary" href="<?php echo base_url('Admincontent/message') ?>">back</a>

                        <button class="btn btn-primary" > Send Reply</button>
                        
                    </div>
                </div>
        </form>    
    </div>
   