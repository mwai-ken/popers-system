
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

		public function __construct()
	{
  		parent::__construct();
		
	
  
  	    $this->load->model("services");
		$this->load->model("plans");
		$this->load->model("vacancies");
		$this->load->model("achievements");
			$this->load->model("users");
		$this->data['parent_page'] = 'User';
		$this->id=$this->session->userdata('id');
		
		
  	}
	
	public function index()
	{
    	$this->load->view('templates/header');
	$this->load->view('frontend/main');
		$this->load->view('templates/footer');
		
	}
    	public function about()
	{
    	$this->load->view('templates/header');
			$this->load->view('content/about');
		$this->load->view('templates/footer');
	
	}
    	public function services()
	{
    	  $this->load->model('services');
	  $this->data['records']= $this->services->lists();
	  
	$this->load->view('templates/header', $this->data);
		$this->load->view('content/service');
		
		$this->load->view('templates/footer');
		
	}
    	public function contacts()
	{
    	$this->load->view('templates/header');
		$this->load->view('content/contact');
		$this->load->view('templates/footer');
		
	}
    	public function application()
	{
    	$this->load->view('templates/header');
		$this->load->view('content/application');
		$this->load->view('templates/footer');
		
	}

		public function add_application()
	{
	 $this->load->library('form_validation');
          $this->form_validation->set_rules( [
            ['field' => 'ap_name', 'label' => 'Name', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'contact', 'label' => 'Contact', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
			 ['field' => 'ap_gender', 'label' => 'Gender', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
           ['field' => 'age', 'label' => 'Message', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
           ['field' => 'address', 'label' => 'Gender', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
          ['field' => 'education_level', 'label' => 'Message', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
          ['field' => 'id_number', 'label' => 'Gender', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
          ['field' => 'citizenship', 'label' => 'Message', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
         ['field' => 'apply_for', 'label' => 'Gender', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
          ['field' => 'ap_reason', 'label' => 'Message', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],

           
                   
          ]);
          
	 if( $this->form_validation->run() == FALSE ) :
	  $this->load->model('services');

	   $this->data['records']= $this->services->lists();
     
		$this->data['record']= $this->services->details($this->uri->segment(3));
	 /*     echo '<pre>';
      print_r( $this->data['record']);
      exit;*/
	$this->load->view('templates/header');
		$this->load->view('content/application',$this->data);
		$this->load->view('templates/footer');
  else :
   $this->load->model('services');
			if( $this->services->creates($this->uri->segment(3)) ) : 
		  $this->session->set_flashdata( "success","Application  has been applied successfully" );
		  redirect( 'content/services' );
		else :
		  redirect( 'Content/add_application' );
		endif;
	  endif;  
	}
	    public function add_achieves()
        {
          $this->load->library('form_validation');
          $this->form_validation->set_rules( [
            ['field' => 'achievement', 'label' => 'achievement', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'ach_description', 'label' => 'ach_description', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'date_ach', 'label' => 'date_ach', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
          
           
                   
          ]);
          
          if( $this->form_validation->run() == FALSE ) :
            $this->data['title'] = "Rental | Car_Rental";
            $this->data['page'] = 'Customer';
            $this->data['sub_title']="Add";
           
    	$this->load->view('templates/dheader',$this->data);
		$this->load->view('content/application');
		$this->load->view('templates/dfooter');
          else :
		   $this->load->model('Achievements');
            if( $this->Achievements->creates() ) : 
              $this->session->set_flashdata( "success",'Vacancy added successfully' );
              redirect( 'Admincontent/achieves' );
            else :
              $this->session->set_flashdata( "error", 'Error occurred while adding item ' );
              redirect( 'Admincontent/add_achieve' );
            endif;
            
          endif;  
	  
	}
		    public function message()
        {
          $this->load->library('form_validation');
          $this->form_validation->set_rules( [
            ['field' => 'name', 'label' => 'Name', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'contact', 'label' => 'Contact', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
			  ['field' => 'gender', 'label' => 'Gender', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
          			  ['field' => 'message', 'label' => 'Message', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],

           
                   
          ]);
          
          if( $this->form_validation->run() == FALSE ) :
            $this->data['title'] = "Rental | Car_Rental";
            $this->data['page'] = 'Customer';
            $this->data['sub_title']="Add";
          
    	$this->load->view('templates/header');
		$this->load->view('content/contact');
		$this->load->view('templates/footer');
          else :
		   $this->load->model('contents');
            if( $this->contents->creates() ) : 
              $this->session->set_flashdata( "success",'message sent successfully' );
              redirect( 'content/contacts' );
            else :
              $this->session->set_flashdata( "error", 'Error occurred while sending message ' );
              redirect( 'content/message' );
            endif;
            
          endif;  
          
        }
}
