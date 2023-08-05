<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontent extends CI_Controller {

		public function __construct()
	{
  		parent::__construct();
		
		if( $this->session->userdata('is_logged_in') !=1  ){
      
                   redirect('login');
             }
  
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
  $this->load->model('Admincontents');
	 $this->data['totalemployees'] =$this->Admincontents->totalemployees();
            $this->data['totalusers'] =$this->Admincontents->totalusers();
            
            $this->data['totalvacancies'] =$this->Admincontents->totalvacancies();
			            $this->data['totalvacanciesapplied'] =$this->Admincontents->totalvacanciesapplied();
									            $this->data['totalmessages'] =$this->Admincontents->totalmessages();

            $this->data['totalplans'] =$this->Admincontents->totalplans();
            $this->data['totalachievements'] =$this->Admincontents->totalachievements();

	$this->load->view('templates/dheader', $this->data);
		$this->load->view('frontend/dashboard');
		$this->load->view('templates/dfooter');
	}
    	public function employees()
	{
     $this->load->model('employees');
    $this->data['records']= $this->employees->lists();
	$this->load->view('templates/dheader', $this->data);
		$this->load->view('frontend/employee');
		$this->load->view('templates/dfooter');
	}
     	public function Vacancies()
	{
	  $this->load->model('vacancies');
	  $this->data['records']= $this->vacancies->lists();
	  
	$this->load->view('templates/dheader', $this->data);
		$this->load->view('frontend/vacancy');
		$this->load->view('templates/dfooter');
	}
       	public function vacancy_details()
	{
	  $this->form_validation->set_rules( [
    ['field' => 'title', 'label' => 'Title', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
    ['field' => 'p_description', 'label' => 'item_name', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
    ['field' => 'no_people', 'label' => 'price', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
  
   
           
  ]);
	  
	  if( $this->form_validation->run() == FALSE ) :
	 $this->load->model('vacancies');
	 	  $this->data['records']= $this->vacancies->lists();
     
		$this->data['record']= $this->vacancies->details($this->uri->segment(3));
	
			$this->load->view('templates/dheader');
		$this->load->view('frontend/edit_vacancy',$this->data);
		$this->load->view('templates/dfooter');
	  else :
	  
		if( $this->vacancies->edits($this->uri->segment(3)) ) : 
		  $this->session->set_flashdata( "success","vacancy data has been edited successfully" );
		  redirect( 'Admincontent/vacancies' );
		else :
		  redirect( 'Admincontent/vacancy_details' );
		endif;
	  endif;  
	  
	}
	
       	public function achieves()
	{

	 $this->load->model('Achievements');
	  $this->data['records']= $this->Achievements->lists();
	$this->load->view('templates/dheader', $this->data);
		$this->load->view('frontend/achieve');
		$this->load->view('templates/dfooter');
	}


		public function Systemusers()
	{
		  $this->load->model('users');

	  $this->data['records']= $this->users->lists();
	$this->load->view('templates/dheader', $this->data);
		$this->load->view('frontend/user');
		$this->load->view('templates/dfooter');
	}





		public function add_user()
	{
	 $this->load->library('form_validation');
          $this->form_validation->set_rules( [
            ['field' => 'emp_name', 'label' => 'Name', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'emp_gender', 'label' => 'Gender', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'id_number', 'label' => 'ID Number', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
          
            ['field' => 'phone', 'label' => 'Phone Number', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'position', 'label' => 'Position', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
          
            ['field' => 'phy_address', 'label' => 'Address', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],

           
                   
          ]);
		   if( $this->form_validation->run() == FALSE ) :
            $this->data['title'] = "Rental | Car_Rental";
            $this->data['page'] = 'Customer';
            $this->data['sub_title']="Add";

	    $this->load->view('templates/dheader', $this->data);
		$this->load->view('frontend/adduser');
		$this->load->view('templates/dfooter');
		 else :
		   $this->load->model('users');
            if( $this->users->creates() ) : 
              $this->session->set_flashdata( "success",'user added successfully' );
              redirect( 'Admincontent/Systemusers' );
            else :
              $this->session->set_flashdata( "error", 'Error occurred while adding user ' );
              redirect( 'Admincontent/add_user' );
            endif;
            
          endif; 
	}



	//public function user_details()
	//{
//	$this->load->view('templates/dheader');
	//	$this->load->view('frontend/userdetails');
	//	$this->load->view('templates/dfooter');
	//}
		public function update()
	{
	$this->load->view('templates/dheader');
		$this->load->view('frontend/userdetails');
		$this->load->view('templates/dfooter');
	}
		
	    public function postvac()
        {
          $this->load->library('form_validation');
          $this->form_validation->set_rules( [
            ['field' => 'title', 'label' => 'Title', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'p_description', 'label' => 'item_name', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'no_people', 'label' => 'No Of People', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
          
           
                   
          ]);
          
          if( $this->form_validation->run() == FALSE ) :
            $this->data['title'] = "Rental | Car_Rental";
            $this->data['page'] = 'Customer';
            $this->data['sub_title']="Add";
          
		    $this->load->model('vacancies');
	  $this->data['records']= $this->vacancies->lists();
    	$this->load->view('templates/dheader', $this->data);
		$this->load->view('frontend/vacancy');
		$this->load->view('templates/dfooter');
          else :
		   $this->load->model('vacancies');
            if( $this->vacancies->creates() ) : 
              $this->session->set_flashdata( "success",'Vacancy added successfully' );
              redirect( 'Admincontent/vacancies' );
            else :
              $this->session->set_flashdata( "error", 'Error occurred while adding item ' );
              redirect( 'Admincontent/vacancies' );
            endif;
            
          endif;  
          
        }




	public function user_details()
	{ 
  $this->form_validation->set_rules( [
    ['field' => 'emp_name', 'label' => 'Name', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'emp_gender', 'label' => 'Gender', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'id_number', 'label' => 'ID Number', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
          
            ['field' => 'phone', 'label' => 'Phone Number', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'position', 'label' => 'Position', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
          
            ['field' => 'phy_address', 'label' => 'Address', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],

           
  ]);
	  
	  if( $this->form_validation->run() == FALSE ) :
	  $this->load->model('users');
	 
		$this->data['record']= $this->users->details($this->uri->segment(3));
		
			$this->load->view('templates/dheader');
		$this->load->view('frontend/edit_user',$this->data);
		$this->load->view('templates/dfooter');
	  else :
	  
		if( $this->users->edits($this->uri->segment(3)) ) : 
		  $this->session->set_flashdata( "success","user data has been edited successfully" );
		  redirect( 'Admincontent/Systemusers' );
		else :
		  redirect( 'Admincontent' );
		endif;
	  endif;  
	  
	}


public function edit_archieve()
	{ 
  $this->form_validation->set_rules( [
    ['field' => 'achievement', 'label' => 'achievement', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
    ['field' => 'ach_description', 'label' => 'Description', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
    ['field' => 'date_ach', 'label' => 'date', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
  
   
           
  ]);
	  
	  if( $this->form_validation->run() == FALSE ) :
	  $this->load->model('achievements');
	 
		$this->data['record']= $this->achievements->details($this->uri->segment(3));
		
			$this->load->view('templates/dheader');
		$this->load->view('frontend/edit_achieve',$this->data);
		$this->load->view('templates/dfooter');
	  else :
	    $this->load->model('achievements');
		if( $this->achievements->edits($this->uri->segment(3)) ) : 
		  $this->session->set_flashdata( "success","user data has been edited successfully" );
		  redirect( 'Admincontent/achieves' );
		else :
		  redirect( 'Admincontent' );
		endif;
	  endif;  
	  
	}
		public function user_edit($id)
	{
	 $this->load->model('users');
	 $data['edituser']=$this->users->edituser($id);
	 	$this->load->view('templates/dheader');
		$this->load->view('frontend/user_edit',$data);
		$this->load->view('templates/dfooter');
	
	}
		public function plans()
	{
	 $this->load->model('Plans');
	 $this->data['records']= $this->Plans->lists();
	$this->load->view('templates/dheader', $this->data);
		$this->load->view('frontend/plans');
		$this->load->view('templates/dfooter');
	}


			public function plan_check()
	{

		$this->load->library('form_validation');
          $this->form_validation->set_rules( [
            ['field' => 'plan', 'label' => 'plan', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'plan_description', 'label' => 'plan_description', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'duration', 'label' => 'duration', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
          
           
                   
          ]);
          
          if( $this->form_validation->run() == FALSE ) :
            $this->data['title'] = "Rental | Car_Rental";
            $this->data['page'] = 'Customer';
            $this->data['sub_title']="Add";
			 $this->load->model('plans');
          $this->data['records']= $this->plans->lists();
    	$this->load->view('templates/dheader', $this->data);
		$this->load->view('frontend/plans');
		$this->load->view('templates/dfooter');
          else :
		   $this->load->model('plans');
		   
            if( $this->plans->creates() ) : 
              $this->session->set_flashdata( "success",'plan added successfully' );
              redirect( 'Admincontent/Plans' );
            else :
              $this->session->set_flashdata( "error", 'Error occurred while adding plan ' );
              redirect( 'Admincontent/Plans' );
            endif;
            
          endif;  
	}



public function plan_details()
	{ 
  $this->form_validation->set_rules( [
    ['field' => 'plan', 'label' => 'item_id', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
    ['field' => 'plan_description', 'label' => 'item_name', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
    ['field' => 'duration', 'label' => 'price', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
  
   
           
  ]);
	  
	  if( $this->form_validation->run() == FALSE ) :
	  $this->load->model('plans');
	 
		$this->data['record']= $this->plans->details($this->uri->segment(3));
		
			$this->load->view('templates/dheader');
		$this->load->view('frontend/edit_plan',$this->data);
		$this->load->view('templates/dfooter');
	  else :
	  
		if( $this->plans->edits($this->uri->segment(3)) ) : 
		  $this->session->set_flashdata( "success","Plan data has been edited successfully" );
		  redirect( 'Admincontent/plans' );
		else :
		$this->session->set_flashdata( "error", "Error occurred while adding plan" );
		  redirect( 'Admincontent/plan_details' );
		endif;
	  endif;  
	  
	}


	 	public function add_achieve()
	{

	
	$this->load->view('templates/dheader', $this->data);
		$this->load->view('frontend/add_achieve');
		$this->load->view('templates/dfooter');
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
          
    	$this->load->view('templates/dheader', $this->data);
		$this->load->view('frontend/add_achieve');
		$this->load->view('templates/dfooter');
          else :
		   $this->load->model('Achievements');
            if( $this->Achievements->creates() ) : 
              $this->session->set_flashdata( "success",'Achievement added successfully' );
              redirect( 'Admincontent/achieves' );
            else :
              $this->session->set_flashdata( "error", 'Error occurred while adding Achievement ' );
              redirect( 'Admincontent/add_achieve' );
            endif;
            
          endif;  
          
        }

			public function delete_archieve($id)
	{
	 $this->load->model('achievements');
	 $this->achievements->deleteachievement($id);
	 	 $this->session->set_flashdata( "success","Achievement  has been deleted successfully" );

     redirect(base_url('Admincontent/achieves'));	
	}
				public function deletevacancy($id)
	{
	 $this->load->model('vacancies');
	 $this->vacancies->deletevacancys($id);
	 	 $this->session->set_flashdata( "success","Vacancy details  has been deleted successfully" );

     redirect(base_url('Admincontent/vacancies'));	
	}
		public function delete_user($id)
	{
	 $this->load->model('users');
	 $this->users->deleteuser($id);
	 	 $this->session->set_flashdata( "success","user details  has been deleted successfully" );

     redirect(base_url('Admincontent/Systemusers'));	
	}
	public function deleteplan($id)
	{
	 $this->load->model('plans');
	 $this->plans->deleteplans($id);
     redirect(base_url('Admincontent/plans'));	
	}
	public function message()
	{ 
	 $this->load->model('employees');
    $this->data['records']= $this->employees->listsmess();
	$this->load->view('templates/dheader', $this->data);
		$this->load->view('frontend/message');
		$this->load->view('templates/dfooter');	
	}

		public function applications()
	{ 
	 $this->load->model('services');
    $this->data['records']= $this->services->listserv();
	$this->load->view('templates/dheader', $this->data);
		$this->load->view('frontend/applications_received');
		$this->load->view('templates/dfooter');	
	}



				  	public function reply_applicant()
	{ 
  $this->form_validation->set_rules( [
    ['field' => 'apli_name', 'label' => 'Name', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
    ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
    ['field' => 'phone', 'label' => 'Contact', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
    ['field' => 'from', 'label' => 'From', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
   ['field' => 'message', 'label' => 'Message', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
  
   
           
  ]);
	  
	  if( $this->form_validation->run() == FALSE ) :
	 $this->load->model('services');
 	 $this->data['record']= $this->services->applidetails($this->uri->segment(3));
			$this->load->view('templates/dheader');
		$this->load->view('frontend/reply_appli',$this->data);
		$this->load->view('templates/dfooter');
	  else :
	  
		if( $this->services->edits($this->uri->segment(3)) ) : 
		  $this->session->set_flashdata( "success","user data has been edited successfully" );
		  redirect( 'Admincontent/reply_applicant' );
		else :
		  redirect( 'Admincontent' );
		endif;
	  endif;  
	  
	}
					  	public function reply_message()
	{ 
  
 $this->load->model('employees');
    
 	 $this->data['record']= $this->employees->messdetails($this->uri->segment(3));
			$this->load->view('templates/dheader');
		$this->load->view('frontend/reply',$this->data);
		$this->load->view('templates/dfooter');
	
	  
		if( $this->services->edits($this->uri->segment(3)) ) : 
		  $this->session->set_flashdata( "success","user data has been edited successfully" );
		  redirect( 'Admincontent/message' );
		else :
		  redirect( 'Admincontent' );
		endif;
	    
	  
	}


}
