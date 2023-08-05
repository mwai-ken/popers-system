
<div class="container">


  <legend> <h1>Achievements</h1></legend>
<div><a href="<?php echo base_url('Admincontent/add_achieve')?>"><button class="btn btn-success">Add Achievements</button></a>
<a href="<?php echo base_url('Admincontent/plans')?>"><button class="btn btn-info">Organisation Plans</button></a>
</div>


  


  <center>
        <!-- alert -->
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
        <!-- /. alert -->
        </center>


                         <table id="user-table" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                      <th>Achievement</th>
                      <th>Achieved Details</th>       
                        <th> DateCreated</th>                          
                        <th>Actions</th>
                </tr>
            </thead>
    

              <tbody >
                            <?php  for( $i=0; $i<count( $records ); $i++ ) : ?>
                             <?php $record = &$records[$i]; ?>
                                <tr>
                                   
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $record->Achievementstitle;?></td>
                                <td><?php echo $record->Description;?></td>
                                 <td><?php echo $record->date_ach;?></td>
                               
                                <td>
                                 <a href="<?php echo base_url('Admincontent/edit_archieve/'. $record->id); ?>"><button class="btn btn-success">view details</button></a>
                                        <a  href="<?php echo base_url('Admincontent/delete_archieve/'. $record->id); ?>"><button class="btn btn-danger">Delete</button></a>

                                   
                               </td> 

                                         
                                </tr>
                                  <?php endfor; ?> 






                                


                            </tbody>
        </table>

</div>