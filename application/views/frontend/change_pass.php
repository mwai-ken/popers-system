 <div class="container">
<div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class=""> </div>
                <div class="login-body">

                        <center>
                            <div ><h2 style="color: dark"><strong>Popers Limited</strong> </h2></div>

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
                    
                    <div class="login-title"><strong>change</strong> password</div>
                   </center>
                   <form method="post" action="<?php echo base_url('login/change_password'); ?>">
    <div>
        <label for="current_password">Current Password</label>
        <input type="password" name="current_password" id="current_password" required>
    </div>
    <div>
        <label for="new_password">New Password</label>
        <input type="password" name="new_password" id="new_password" required>
    </div>
    <div>
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password" required>
    </div>
    <div>
        <input type="submit" value="Change Password">
    </div>
</form>
                </div>
               
            
        </div>
        </div>
    