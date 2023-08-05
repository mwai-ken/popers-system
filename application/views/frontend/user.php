

<div class="container">
   <!----- <nav class="navbar navbar-default">------>
           <center><h1>Systemusers List</h1></center>
   <!------ </nav>--------->
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
        <div class="container">
        <a class="btn btn-success" href="<?php echo base_url('Admincontent/add_user') ?>"> 
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Add User
        </a>
        <!-- DataTable -->
        <table id="user-table" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Gender</th>
                 <th>Email</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
    

              <tbody >
                            <?php  for( $i=0; $i<count( $records ); $i++ ) : ?>
                             <?php $record = &$records[$i]; ?>
                                <tr>
                                   
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $record->Name;?></td>
                                <td><?php echo $record->Gender;?></td>
                                 <td><a href=mailto:"<?php echo $record->Email;?> "><?php echo $record->Email;?> </a></td>
                                <td><?php echo $record->Position;?></td>
                                <td>          <a href="<?php echo base_url('Admincontent/user_details/'.$record->id); ?>"><button class="btn btn-success">view details</button></a>


                                        <a  href="<?php echo base_url('Admincontent/delete_user/'. $record->id); ?>"><button class="btn btn-danger">Remove User</button></a>

</td> 

                                    
                                   
                                </tr>
                                  <?php endfor; ?> 






                                


                            </tbody>
        </table>
    <!-- /.DataTable -->
    </div>
     
      </div>
   