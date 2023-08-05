
    <div class="container">
    
                    <?php echo form_open_multipart('Admincontent/reply_applicant/'.$record->id,array('role'=>'form','data-toggle'=>"validator" ,'class'=>"form-horizontal")) ; ?>


                <div class="form-group">
                    <legend>Reply To The Applicant</legend>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="apli_name"> Name</label>
                    <div class="col-sm-4">
                        <input type="text" name="apli_name" id="apli_name" class="form-control" value="  <?php echo $record->Name; ?>  " readonly/>  
                        <small style="color:red; font-size: 80%"><?php echo form_error('apli_name');?></small>                                        
                    </div>
                    <label class="control-label col-sm-2" for="email">Email</label>
                    <div class="col-sm-4">
                        <input type="text" name="email" id="email" class="form-control" value="  <?php echo $record->Email; ?> "readonly/>  
                                                <small style="color:red; font-size: 80%"><?php echo form_error('email');?></small>                                               
                                           
                    </div>
                    
                </div>
               
                <div class="form-group">
                    <label class="control-label col-sm-2" for="phone">Phone Number</label>
                    <div class="col-sm-4">
                        <input type="text" name="phone" id="phone" class="form-control" value=" <?php echo $record->Contact; ?> "readonly/>    
                         <small style="color:red; font-size: 80%"> <?php echo form_error('phone');?></small>                                           
                    </div>
                   
                </div>
      
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="reason">Applicant Reason</label>
                    <div class="col-sm-4">
                                             <textarea class="form-control" name="reason" id="reason" rows="4" placeholder="reason" readonly/> <?php echo $record->reason; ?></textarea> 

                         <small style="color:red; font-size: 80%"> <?php echo form_error('reason');?></small>                                           
                    </div>
                     
                </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="from"> From</label>
                    <div class="col-sm-4">
                        <input type="text" name="from" id="from" class="form-control" value=" "required/> 
                         <small style="color:red; font-size: 80%" > <?php echo form_error('from');?></small>                                              
                    </div>
                </div>
                          <div class="form-group">
                    <label class="control-label col-sm-2" for="message">Message</label>
                    <div class="col-sm-4">
                      
                         <textarea class="form-control" name="message" id="message" rows="4" placeholder="Message"></textarea> 
                         <small style="color:red; font-size: 80%"> <?php echo form_error('message');?></small>                                            
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                     <a class="btn btn-primary" href="<?php echo base_url('Admincontent/applications') ?>">back</a>

                        <button class="btn btn-primary" > Send Reply</button>
                        
                    </div>
                </div>
        </form>    
    </div>
   