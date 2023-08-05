
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller {


  public function __construct()
	{
		parent::__construct();

	$this->id=$this->session->userdata('id');
	if( $this->session->userdata('is_logged_in') !=1  ){
      
                   redirect('login');
             }
  
     
		$this->load->model('employees');
   
  
	}
	
	public function index()
	{
	  $this->load->model('employees');
    $this->data['records']= $this->employees->lists();
	$this->load->view('templates/dheader', $this->data);
		$this->load->view('frontend/employee');
		$this->load->view('templates/dfooter');
	}

    

	  
        public function add_employee()
        {
          $this->load->library('form_validation');
          $this->form_validation->set_rules( [
            ['field' => 'emp_name', 'label' => 'Name', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'emp_gender', 'label' => 'Gender', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'position', 'label' => 'Position', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'id_number', 'label' => 'ID Number', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
              ['field' => 'phy_address', 'label' => 'Address', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
              ['field' => 'phone', 'label' => 'Phone Number', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
              ['field' => 'workposition', 'label' => 'WorkPosition', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],


           
                   
          ]);
          
         if( $this->form_validation->run() == FALSE ) :
        
        
            $this->load->view('templates/dheader');
		$this->load->view('frontend/add_employee');
		$this->load->view('templates/dfooter');
    
    else:
          $this->load->model('employees');
          
              if( $this->employees->creates() ) : 
              $this->session->set_flashdata( "success",'Employee added successfully' );
              redirect( 'EmployeeController' );
          
          
          else:
        
          $this->session->set_flashdata( "error", 'Error occurred while adding Employee ' );
              redirect( 'EmployeeController/add_employee' );
        endif;

          endif;
          
          
          
          }
         
          
        
	  /*	public function employee_detail()
	{
		$this->load->model('employees');
	 $data['record']=$this->employees->editemployee();
		$this->load->view('templates/dheader');
	    $this->load->view('frontend/employee_details');
		$this->load->view('templates/dfooter');
	}*/
	
	
			public function deleteemployee($id)
	{
	 $this->load->model('employees');
	 $this->employees->deleteemp($id);
	 $this->session->set_flashdata( "success","employee details  has been deleted successfully" );
     redirect(base_url('Admincontent/employees'));	
	}


  
	public function employee_detail()
	{ 
  $this->form_validation->set_rules( [
            ['field' => 'emp_name', 'label' => 'Name', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'emp_gender', 'label' => 'Gender', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'position', 'label' => 'Position', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'id_number', 'label' => 'ID Number', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
              ['field' => 'phy_address', 'label' => 'Address', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
              ['field' => 'phone', 'label' => 'Phone Number', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],


           
                   
          ]);
	  
	  if( $this->form_validation->run() == FALSE ) :
	  $this->load->model('employees');
	 
		$this->data['record']= $this->employees->details($this->uri->segment(3));
		
		$this->load->view('templates/dheader');
		$this->load->view('frontend/employee_details',$this->data);
		$this->load->view('templates/dfooter');
	  else :
	  
		if( $this->employees->edits($this->uri->segment(3)) ) : 
		  $this->session->set_flashdata( "success","employee details  has been edited successfully" );
		  redirect( 'Admincontent/employees' );
		else :
		$this->session->set_flashdata( "error", "Error occurred while updating employee" );
		  redirect( 'Admincontent' );
		endif;
	  endif;  
	  
	}
					  	public function reply_message()
	{ 

	  $this->form_validation->set_rules( [
    ['field' => 'apli_name', 'label' => 'Name', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
    ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
    ['field' => 'phone', 'label' => 'Contact', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
    ['field' => 'from', 'label' => 'From', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
   ['field' => 'message', 'label' => 'Message', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
  
   
           
  ]);
   if( $this->form_validation->run() == FALSE ) :
  
 $this->load->model('employees');
    
 	 $this->data['record']= $this->employees->messdetails($this->uri->segment(3));
			$this->load->view('templates/dheader');
		$this->load->view('frontend/reply',$this->data);
		$this->load->view('templates/dfooter');
	
	  else :
		if( $this->employees->edits($this->uri->segment(3)) ) : 
		  $this->session->set_flashdata( "success","user data has been edited successfully" );
		  redirect( 'Admincontent/message' );
		else :
		  redirect( 'Admincontent/reply_message' );
		endif;
	    	endif;
	  
	}
}

