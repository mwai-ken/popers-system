 



    
<div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class=""> </div>
                <div class="login-body">

                        <center>
                            <div ><h2 style="color: dark"><strong>Popers Limited</strong> </h2></div>
                              <img style="border-radius: 20%;     width: 150px;" src="<?php echo base_url(); ?>assets/images/pop1.png" alt="logo"/>

                             <br>
                           
                        </center> <br>

                 
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
                       <center>    
                    
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                   </center>
                    <?php echo form_open( 'login/forget_password',array('role'=>'form','data-toggle'=>"validator" ,'class'=>"form-horizontal")) ; ?>
                   

                     <div class="form-group">
                    <label class="control-label col-sm-2" for="member_address">Email</label>
                    <div class="col-sm-8">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Please Enter Your Email" value="  " /required>                                             
                    </div>
                </div>
                     


               
                 <div class="form-group">

                        <div class="col-md-6">    
                              <a href="<?php  echo base_url('login')?>" type="button" class="btn btn-link btn-block">Remmembered My Password?</a>
                        </div>
                        <div class="col-md-4">     
                            <button class="btn btn-info btn-block"> Get Password</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div style="position:absolute; bottom:0%;left:0%; background:black;width:100%;color:white;" class="login-footer ">
                    <div style="margin-left:10%;"class="pull-center">
                        &copy;<?php echo date('Y')?> Powered by poper
                    <div class="pull-right">
                         <a href="<?php echo base_url('content/about'); ?>">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="<?php echo base_url('content/contacts'); ?>">Contact Us</a> 
                    </div>
                </div>
            </div>
            
        </div>
    
    