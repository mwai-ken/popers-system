
  


        <div class="container ">
          <legend><h1>Service</h1></legend>  
 <p> popers Limited company is a company that enhances the use and availability of Technology.
          Technology Keeps changing so there is need of monitoring and identifying possible ways, to come up with suitable solutions to the people.
          Popers deals with the good client to service offered, business.It is a NGO company.It creates understandable and easy solutions to be used 
          by a large group of People  </p>

            <div class="row ">

         
           <div class="col-lg-4 mt-2 mt-lg-0">
          <a href=" ">
           <div  class="box btn btn-info">
              <span></span>
              <h4>Total Employees</h4>
                <img src="<?php echo base_url() ?>assets/images/space-2.jpg " width="305px" height=160px" style="border:groove;">
              <p>All employees and their details </p>
            </div>
            </a>
          
          </div>
          <div class="col-lg-4 mt-2 mt-lg-0">
          <a href=" ">
           <div  class="box btn btn-info">
              <span></span>
              <h4>Total Employees</h4>
                <img src="<?php echo base_url() ?>assets/images/space-2.jpg " width="305px" height=160px" style="border:groove;">
              <p>All employees and their details </p>
            </div>
            </a>
          
          </div>

      <div class="col-lg-4 mt-2 mt-lg-0">
          <a href=" ">
           <div  class="box btn btn-info">
              <span></span>
              <h4>Total Employees</h4>
                <img src="<?php echo base_url() ?>assets/images/space-2.jpg " width="305px" height=160px" style="border:groove;">
              <p>All employees and their details </p>
            </div>
            </a>
          
          </div>
           </div>

             <legend><h1>Staff and Principles</h1></legend>  
        <div class="row">

          <div class="col-lg-5">
            <h1>Leader</h1>
           <div  class="card " >
            <div class="card_content">
            <p>CEO of the Company;</p>
            <img src="<?php echo base_url() ?>assets/images/poper.png " width="250px" height=150px" style="border:groove;">
            <p>popers Limited company is a company that enhances the use and availability of Technology.
          Technology Keeps changing so there is need of monitoring and identifying possible ways, to come up with suitable solutions to the people.
         </p>
            <p>Contact:<a href=Tel:"0725236344 ">0725236344</a></p>
            </div>
                   
             
            </div>
          </div>
<center><br>

          <div class="col-lg-5 mt-6 mt-lg-0">
           <h1>Principles</h1>
           <div  class="card  " style="border:1px solid grey;">
          
            
            </div>
          </div>
          </center>

         

        </div>
          <legend><h1>Available Vacancies</h1></legend>  
        <div class="row">



         

        </div><br><br><br><br>
                   <center>
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

                    </center>  

        
       
        <!-- DataTable -->
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
                                <a href="<?php echo base_url('content/add_application/'. $record->id); ?>"><button class="btn btn-success fa fa-pencil">Apply</button></a>
                                </td> 

                                    
                                   
                                </tr>
                                  <?php endfor; ?> 






                                


                            </tbody>
        </table>
    <!-- /.DataTable -->
    </div>
   