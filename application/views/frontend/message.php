


 <!------   <nav class="navbar navbar-default">---->
           <center><h1>Messages List</h1></center>
  <!-------  </nav>--->
    <center>
        <!-- alert -->
        <?php
            if ($this->session->flashdata('msg_noti') != '') {
                echo 
                    '<div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p>' . $this->session->flashdata('msg_noti') . '</p>
                    </div>';
            } 
            if ($this->session->flashdata('msg_error') != '') {
                echo 
                    '<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p>'. $this->session->flashdata('msg_error') . '</p>   
                    </div>';
            }
            
        ?>
        <!-- /. alert -->
        </center>
        <div class="container">
        <a class="btn btn-success" href="<?php echo base_url('Admincontent') ?>"> 
            <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
          Back
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
                    <th>Message</th>
                    <th>Date sent</th>
                    <th>Action</th>
                </tr>
            </thead>
           <?php  for( $i=0; $i<count( $records ); $i++ ) : ?>
                             <?php $record = &$records[$i]; ?>
                                <tr>
                                   
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $record->Name;?></td>
                                <td><a href=mailto:"<?php echo $record->Email;?> "><?php echo $record->Email;?> </a></td>
                                 <td><a href=tel:"<?php echo $record->Contact;?> "><?php echo $record->Contact;?></a></td>
                                   <td><?php echo $record->Gender;?></td>
                                <td><?php echo $record->Message;?></td>
                                <td><?php echo $record->DateCreated;?></td>
                            
            <td>
       
          <a href="<?php echo base_url('EmployeeController/reply_message/'. $record->id); ?>"><button class="btn btn-success">Reply</button></a>
       <a href="<?php echo base_url('EmployeeController/deleteemployee/'. $record->id); ?>"><button class="btn btn-danger">Remove</button></a>
        </td>
        </tr>
         <?php endfor; ?> 
            </tbody>
        </table>
    <!-- /.DataTable -->
    </div>
   