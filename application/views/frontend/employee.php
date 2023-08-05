

<div class="container">
   <!----- <nav class="navbar navbar-default">------>
           <center><h1>Employees List</h1></center>
  <!----</nav>-->
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
        <a class="btn btn-success" href="<?php echo base_url('EmployeeController/add_employee') ?>"> 
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Add employee
        </a>
        <!-- DataTable -->
        <table id="user-table" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
           <?php  for( $i=0; $i<count( $records ); $i++ ) : ?>
                             <?php $record = &$records[$i]; ?>
                                <tr>
                                   
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $record->Name;?></td>
                                <td><a href=mailto:"<?php echo $record->Email;?> "><?php echo $record->Email;?> </a></td>
                            <td><a href=tel:"<?php echo $record->Phone;?> "><?php echo $record->Phone;?></a></td>

                                   <td><?php echo $record->Gender;?></td>
                                <td><?php echo $record->Position;?></td>
                            
            <td>
       
          <a href="<?php echo base_url('EmployeeController/employee_detail/'. $record->id); ?>"><button class="btn btn-success">view details</button></a>
       <a href="<?php echo base_url('EmployeeController/deleteemployee/'. $record->id); ?>"><button class="btn btn-danger">Remove</button></a>
        </td>
        </tr>
         <?php endfor; ?> 
            </tbody>
        </table>
    <!-- /.DataTable -->
    </div>
     
    </div>