
    <div class="container">
      
                    <?php echo form_open( 'Admincontent/edit_archieve/'.$record->id,array('role'=>'form','data-toggle'=>"validator" ,'class'=>"form-horizontal")) ; ?>

                <div class="form-group">
                    <legend>Edit</legend>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-2" for="achievement"> Achievement</label>
                    <div class="col-sm-4">
                        <input type="text" name="achievement" id="achievement" class="form-control" value=" <?php echo $record->Achievementstitle; ?>  " required/>   
                         <small style="color:red; font-size: 80%"> <?php echo form_error('achievement');?></small>                                         
                    </div>
                    
                </div>
               
                <div class="form-group">
                    <label class="control-label col-sm-2" for="ach_description">Description</label>
                    <div class="col-sm-4">

                     <textarea class="form-control" name="ach_description" id="ach_description" rows="4" placeholder="Message" required/><?php echo $record->Description; ?> </textarea> 

                         <small style="color:red; font-size: 80%" > <?php echo form_error('ach_description');?></small>                                        
                    </div>
                   
                </div>
      
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="date_ach">Date Achieved</label>
                    <div class="col-sm-4">
                        <input type="text" name="date_ach" id="date_ach" class="form-control" value=" <?php echo $record->date_ach; ?>  "required/>   
                         <small style="color:red; font-size: 80%"> <?php echo form_error('date_ach');?></small>                                            
                    </div>
                </div>
                 
                 
                    
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                     <a class="btn btn-primary" href="<?php echo base_url('Admincontent/achieves') ?>">back</a>

                        <button class="btn btn-primary" > update</button>
                        
                    </div>
                </div>
        </form>    
    </div>
   