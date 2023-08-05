
    <div class="container">
          <?php if( $this->session->flashdata('error') != "" ) : ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-danger">
                                    <?php echo $this->session->flashdata('error'); ?>
                                        
                                    </div>
                            </div>
                        </div>
                    <?php endif; ?> 
                    <?php if( $this->session->flashdata('message') != "" ) : ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-danger">
                                    <?php echo $this->session->flashdata('message'); ?>
                                        
                                    </div>
                        </div>
                    </div>
                    <?php endif; ?> 
                      <?php if( $this->session->flashdata('success') != "" ) : ?>
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-success">
                                    <?php echo $this->session->flashdata('success'); ?>
                                        
                                    </div>
                        </div>
                    </div>
                    <?php endif; ?> 
                    <?php echo form_open( 'Admincontent/plan_details/'.$record->id,array('role'=>'form','data-toggle'=>"validator" ,'class'=>"form-horizontal")) ; ?>

                <div class="form-group">
                    <legend>Edit</legend>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-2" for="plan"> Plan</label>
                    <div class="col-sm-4">
                        <input type="text" name="plan" id="plan" class="form-control" value=" <?php echo $record->plan; ?>  " required/>   
                         <small style="color:red; font-size: 80%"> <?php echo form_error('achievement');?></small>                                         
                    </div>
                    
                </div>
               
                <div class="form-group">
                    <label class="control-label col-sm-2" for="plan_description">Description</label>
                    <div class="col-sm-4">
                    <textarea class="form-control" name="plan_description" id="plan_description" rows="4" placeholder="Message" required/><?php echo $record->plan_description; ?> </textarea> 

                         <small style="color:red; font-size: 80%" > <?php echo form_error('plan_description');?></small>                                        
                    </div>
                   
                </div>
      
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="duration">Date Achieved</label>
                    <div class="col-sm-4">
                        <input type="text" name="duration" id="duration" class="form-control" value=" <?php echo $record->duration; ?>  "required/>   
                         <small style="color:red; font-size: 80%"> <?php echo form_error('duration');?></small>                                            
                    </div>
                </div>
                 
                 
                    
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                     <a class="btn btn-primary" href="<?php echo base_url('Admincontent/plans') ?>">back</a>

                        <button class="btn btn-primary" > update</button>
                        
                    </div>
                </div>
        </form>    
    </div>
   