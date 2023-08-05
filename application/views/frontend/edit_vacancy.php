
    <div class="container">
      
                    <?php echo form_open( 'Admincontent/vacancy_details/'.$record->id,array('role'=>'form','data-toggle'=>"validator" ,'class'=>"form-horizontal")) ; ?>

                <div class="form-group">
                    <legend>Edit</legend>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-3" for="member_address">Tile</label>
                    <div class="col-sm-8">
                        <input type="text" name="title" id="title" class="form-control" placeholder=" Title" value=" <?php echo $record->title; ?> " required/>  
                        <small style="color:red; font-size: 80%"><?php echo form_error('title');?></small>                                           
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-3" for="p_description">Description</label>
                    <div class="col-sm-8">
                      
                         <textarea class="form-control" name="p_description" id="p_description"  rows="4" placeholder="Message"  value="<?php echo $record->p_description; ?>"><?php echo $record->p_description; ?></textarea> 
                          <small style="color:red; font-size: 80%"><?php echo form_error('p_description');?></small>                                             
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-3" for="no_people">No of People</label>
                    <div class="col-sm-8">
                        <input type="text" name="no_people" id="no_people" class="form-control" placeholder="People Needed" value=" <?php echo $record->no_people; ?> " required/> 
                         <small style="color:red; font-size: 80%"><?php echo form_error('no_people');?></small>                                                
                    </div>
                </div>
                 
                    
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                     <a class="btn btn-primary" href="<?php echo base_url('Admincontent/vacancies') ?>">back</a>

                        <button class="btn btn-primary" > update</button>
                        
                    </div>
                </div>
        </form>    
    </div>
   