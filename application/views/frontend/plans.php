



<div class="container">
  <legend> <a href="<?php echo base_url('Admincontent/achieves')?>"><button class="btn btn-info">back</button> </a><h1> Organisation Plans</h1></legend>
<div class="row">

          <div class="col-lg-4">
           <div  class="card ">
             
              <?php echo form_open_multipart('Admincontent/plan_check',array('role'=>'form','data-toggle'=>"validator" ,'class'=>"form-horizontal")) ; ?>
                <div class="form-group">
                    <legend>Set a New Plan</legend>
                </div>
               
               
                <div class="form-group">
                    <label class="control-label col-sm-3" for="plan">Plan</label>
                    <div class="col-sm-8">
                        <input type="text" name="plan" id="plan" class="form-control" placeholder=" plan" value="  "  required/>   
                        <small style="color:red; font-size: 80%" > <?php echo form_error('plan');?></small>                                                
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-3" for="plan_description">Description</label>
                    <div class="col-sm-8">
                      
                         <textarea class="form-control" name="plan_description" id="plan_description" rows="4" placeholder="Message"></textarea>  
                         <small style="color:red; font-size: 80%"> <?php echo form_error('plan_description');?></small>                                              
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-3" for="Duration">Duration </label>
                    <div class="col-sm-8">
                        <input type="text" name="duration" id="duration" class="form-control" placeholder="duration" value="  " required/>   
                        <small style="color:red; font-size: 80%"> <?php echo form_error('duration');?></small>                                                
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                    
                        <button class="btn btn-success" type="submit">Post</button>
                            
                        
                    </div>
                </div>
        </form>  
            </div>
          </div>
<center>
          <div class="col-lg-8 mt-2 mt-lg-0">
           <legend>List</legend>
           <div  class="box ">
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
        <table id="user-table" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Plan</th>
                    <th>Description</th>
                    <th>Duration </th>
                    <th>Action</th>
                </tr>
            </thead>
          
              <tbody >
                            <?php  for( $i=0; $i<count( $records ); $i++ ) : ?>
                             <?php $record = &$records[$i]; ?>
                                <tr>
                                   
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $record->plan;?></td>
                                <td><?php echo $record->plan_description;?></td>
                                <td><?php echo $record->duration;?></td>
                                <td><a href="<?php echo base_url('Admincontent/plan_details/'. $record->id); ?>"><button class="btn btn-success fa fa-pencil">Edit details</button></a>

                                     <a href="<?php echo base_url('Admincontent/deleteplan/'. $record->id); ?>"><button class="btn btn-danger fa fa-trash-o">Delete</button></a>
</td> 

                                    
                                   
                                </tr>
                                  <?php endfor; ?> 






                                


                            </tbody>
        </table>
            </div>
          </div>
          </center>

         

        </div>

</div>