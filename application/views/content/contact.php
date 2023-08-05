<div class="container">
  <legend><h1>Contact Us</h1></legend>
<div class="row">

          <div class="col-lg-5">
           <div  class="card " >
            <div class="card_content">
            <p>To get intouch with us, kindly use;</p>
            <img src="<?php echo base_url() ?>assets/images/pop1.png " width="305px" height=178px" style="border:groove;">
            <p>Email:<a href=mailto:"popers@gmail.com ">popers@gmail.com </a></p>
            <p>Contact:<a href=Tel:"0725236344 ">0725236344</a></p>
            </div>
                   
             
            </div>
          </div>
<center><br>
          <div class="col-lg-5 mt-6 mt-lg-0">
           
           <div  class="card  " style="border:1px solid grey;">
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
               <?php echo form_open_multipart('content/message',array('role'=>'form','data-toggle'=>"validator" ,'class'=>"form-horizontal")) ; ?>
               
                <legend>Send A Message To Us</legend>
               
                <div class="form-group">
                    <label class="control-label col-sm-1" for="Name">Name</label>
                    <div class="col-sm-5">
                        <input type="text" name="name" id="name" class="form-control" placeholder=" Full Names" value="  " required/>  
                                                 <small style="color:red; font-size: 80%"><?php echo form_error('name');?></small>                                                
                                           
                    </div>
                     <label class="control-label col-sm-1" for="email">Email</label>
                    <div class="col-sm-5">
                        <input type="text" name="email" id="email" class="form-control" placeholder=" email" value="  " required/>  
                                                 <small style="color:red; font-size: 80%"><?php echo form_error('email');?></small>                                                
                                           
                    </div>
                </div>
                 <div class="form-group">
                  <label class="control-label col-sm-2" for="contact">Contact</label>
                    <div class="col-sm-4">
                        <input type="text" name="contact" id="contact" class="form-control" placeholder=" contact" value="  " required/>  
                                                 <small style="color:red; font-size: 80%"><?php echo form_error('contact');?></small>                                                
                                           
                    </div>
                   
                   <label class="control-label col-sm-2" for="gender">Gender</label>
                    <div class="col-sm-4">
                        <input type="text" name="gender" id="gender" class="form-control" placeholder=" " value="  " required/>  
                                                 <small style="color:red; font-size: 80%"><?php echo form_error('gender');?></small>                                                
                                           
                    </div>
                </div>

                 <div class="form-group">
                    <label class="control-label col-sm-3" for="message">Message</label>
                    <div class="col-sm-8">
                      
                         <textarea class="form-control" name="message" id="message" rows="4" placeholder="Message"></textarea> 
                                                  <small style="color:red; font-size: 80%"><?php echo form_error('message');?></small>                                                
                                         
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                    
                        <button class="btn btn-success" type="submit">Send Message</button>
                            
                        
                    </div>
                </div>
        </form>  
            </div>
          </div>
          </center>

         

        </div>
 
</div>