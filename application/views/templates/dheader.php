<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Popers Limited </title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/DataTables/datatables.min.css'); ?>" />
            <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/bootstrap/css/mine.css'); ?>" />

    </head>

    <body>

<div class='container-header '>
        <div class="navbar-header">
        <div class="popers-logo"> <h1 style="color:lightblue;">Popers <span style="color:white;">Tech<span></h1></div>
          <div class="menu-btn">
                <div class="menu-btn_lines"></div>
            </div>

             

   <ul style="    font-size: 20px; margin-top:10px;"class="nav navbar-nav">
<li><a href="<?php echo base_url('Admincontent'); ?>">Dashboard</a><li>
<li><a href="<?php echo base_url('Admincontent/Systemusers'); ?> ">Systemusers</a><li>
<li><a href="<?php echo base_url('Admincontent/employees'); ?> ">Employees</a><li>
<li><a href="<?php echo base_url('Admincontent/vacancies'); ?>">Post Vacancies</a><li>
<li><a href="<?php echo base_url('Admincontent/achieves'); ?>">Achievements</a><li>
<li> <a href="<?php  echo base_url('login/change_password')?>" type="button" class="box btn-link  alert-success">Change password?</a>
</li>
<!-------<li ><a href="<?php echo base_url('login/logout'); ?>"><button class="alert alert-danger">Logout</button></a></li>------->

<li style=" padding-left:15px;"><a  class="alert alert-danger" href="<?php echo base_url('login/logout'); ?>">Logout</a></li>

</ul>

</div>

</div>
