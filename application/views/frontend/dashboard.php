
<div class="container">
  <legend> <h1> Welcome <h4><?php  echo ucwords(strtolower($this->session->userdata('name')  )) ; ?>-(<?php  echo ucwords(strtolower($this->session->userdata('position')  )) ; ?>)</h2></h1>
                                             
</legend>
 <div class="row">

          
           <div class="col-lg-3 mt-2 mt-lg-0">
          <a href="<?php echo base_url('Admincontent/employees') ?>  ">
           <div  class="box btn btn-success">
              <span><?php echo $totalemployees?></span>
              <h4>Total Employees</h4>
              <p>All employees and their details </p>
              </div>
            </a>

          </div>

          <div class="col-lg-3 mt-2 mt-lg-0">
            <a href="<?php echo base_url('Admincontent/Systemusers') ?>">
           <div  class="box btn btn-success">
              <span><?php echo $totalusers?></span>
              <h4> System Users</h4>
              <p>All Users of the System Active  </p>
            </div>
            </a>
          </div>

          <div class="col-lg-3 mt-2 mt-lg-0">
            <a href="<?php echo base_url('Admincontent/vacancies') ?>">
            <div  class="box btn btn-success">
              <span><?php echo $totalvacancies?></span>
              <h4> Vacancies posted</h4>
              <p>Vacancies Available for Application</p>
            </div>
            </a>
          </div>
          
           <div class="col-lg-3 mt-4 mt-lg-0">
            <a href="<?php echo base_url('Admincontent/applications') ?>">
            <div  class="box btn btn-success">
              <span><?php echo $totalvacanciesapplied?></span>
              <h4> Vacancies Applied</h4>
              <p>All Applied applications received.</p>
            </div>
                </a>
                 </div>
          

        </div><br><br>
          <div class="col-lg-3 mt-4 mt-lg-0">
            <a href="<?php echo base_url('Admincontent/message') ?>">
            <div  class="box btn btn-success">
              <span><?php echo $totalmessages?></span>
              <h4> Messages </h4>
              <p>All Messages sent by people </p>
            </div>
            </a>
          </div>

             <div class="col-lg-3 mt-4 mt-lg-0">
            <a href="<?php echo base_url('Admincontent/achieves') ?>">
            <div  class="box btn btn-success">
              <span><?php echo $totalachievements?></span>
              <h4> Achievements </h4>
              <p>Total Achievements gotten so far</p>
            </div>
            </a>
          </div>

             <div class="col-lg-3 mt-4 mt-lg-0">
            <a href="<?php echo base_url('Admincontent/plans') ?>">
            <div  class="box btn btn-success">
              <span><?php echo $totalplans?></span>
              <h4>Success Plans </h4>
              <p>All plans that are set to be Achieved</p>
            </div>
            </a>
          </div>

</div>