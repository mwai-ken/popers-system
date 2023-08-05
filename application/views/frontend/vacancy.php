
<div class="container">
  <legend> <h1>Register Available Vacancies</h1></legend>
<div class="row">

          <div class="col-lg-4">
           <div  class="card ">
            
              <?php echo form_open_multipart('Admincontent/postvac',array('role'=>'form','data-toggle'=>"validator" ,'class'=>"form-horizontal")) ; ?>
                <div class="form-group">
                    <legend>Add a New Vacancy</legend>
                </div>
               
               
                <div class="form-group">
                    <label class="control-label col-sm-3" for="member_address">Tile</label>
                    <div class="col-sm-8">
                        <input type="text" name="title" id="title" class="form-control" placeholder=" Title" value="  " required/>  
                        <small style="color:red; font-size: 80%"><?php echo form_error('title');?></small>                                           
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-3" for="p_description">Description</label>
                    <div class="col-sm-8">
                      
                         <textarea class="form-control" name="p_description" id="p_description" rows="4" placeholder="Message"></textarea> 
                          <small style="color:red; font-size: 80%"><?php echo form_error('p_description');?></small>                                             
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-3" for="no_people">No of People</label>
                    <div class="col-sm-8">
                        <input type="text" name="no_people" id="no_people" class="form-control" placeholder="People Needed" value="  " required/> 
                         <small style="color:red; font-size: 80%"><?php echo form_error('no_people');?></small>                                                
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
                    <th>Title</th>
                    <th>Description</th>
                    <th>No of People</th>
                    <th>Action</th>
                </tr>
            </thead>
          
              <tbody >
                            <?php  for( $i=0; $i<count( $records ); $i++ ) : ?>
                             <?php $record = &$records[$i]; ?>
                                <tr>
                                   
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $record->title;?></td>
                                <td><?php echo $record->p_description;?></td>
                                <td><?php echo $record->no_people;?></td>
                                <td>
                                <a href="<?php echo base_url('Admincontent/vacancy_details/'. $record->id); ?>"><button class="btn btn-success fa fa-pencil">Edit details</button></a>
                                   <a href="<?php echo base_url('Admincontent/deletevacancy/'. $record->id); ?>"><button class="btn btn-danger fa fa-trash-o">Delete</button></a>
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