
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	

    public function __construct() 
  {
    parent::__construct();
    

     
      $this->date=date( 'Y-m-d H:i:s' );
    
    
  }
	public function index()
	{
    	$this->load->view('templates/header');
		$this->load->view('frontend/login');
        $this->load->view('templates/footer');
	}


    	public function logins()
	{
		$this->load->view('templates/dheader');
		$this->load->view('frontend/dashboard');
		$this->load->view('templates/dfooter');
	}
       
       
        public function verify()
      {
      $this->load->library('form_validation');
          $this->form_validation->set_rules( [
            ['field' => 'email', 'label' => 'Name', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'password', 'label' => 'Email', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
          
                   
          ]);
          
        $this->load->model('login_model');
        $check = $this->login_model->validate();
         if($check)
    {
  //   echo "correct credentials "   ;
     // $this->session->set_userdata('is_logged_in');
  $this->load->model("Login_model");
     $data = array( 'is_logged_in' => '1', 'name' => $check->Name,'email'=>$check->Email,'id'=>$check->id,'phone'=>$check->Phone,'position'=>$check->Position,'id_number'=>$check->ID_Number,'logintime'=>$this->date,'Dateregistered'=>$check->DateCreated ,'password_set'=>$check->password_set);
             $this->session->set_userdata( $data );  
    
      //  $this->load->view('templates/dheader', $this->data);
	//	$this->load->view('frontend/dashboard');
	//	$this->load->view('templates/dfooter');

   //  $this->session->set_flashdata( "success","User loged in successfully" );
    redirect( 'Admincontent' );
    }else{
      $this->session->set_flashdata( "error", 'Wrong Email and Password ' );
      redirect('login');
    }
      }
     
    	public function logout()
	{

	      $user_data = $this->session->userdata();
          foreach ($user_data as $key => $value) {
              if ($key != 'is_logged_in' && $key != 'user_id' && $key != 'username' && $key != 'token') {
                  $this->session->unset_userdata($key);
              }
          }
          $this->session->sess_destroy();
     
           redirect('login');

	
	}
    
     	public function forget_password()
	{
		$this->load->view('templates/header');
		$this->load->view('frontend/forget');
		$this->load->view('templates/footer');
	}
     	public function change_pass()
	{
     $this->load->library('form_validation');
          $this->form_validation->set_rules( [
            ['field' => 'currentpassword', 'label' => 'Name', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
            ['field' => 'newpassword', 'label' => 'Email', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],
             ['field' => 'confirmpassword', 'label' => 'Email', 'rules' => 'trim|required', 'errors' => ['required' => 'Please enter the %s.'],],

                   
          ]);
		$this->load->view('templates/dheader');
		$this->load->view('frontend/change_pass');
		$this->load->view('templates/dfooter');
	}


  public function change_password()
{
    $this->load->library('form_validation');
    $this->form_validation->set_rules('current_password', 'Current Password', 'required');
    $this->form_validation->set_rules('new_password', 'New Password', 'required|min_length[6]');
    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[new_password]');

    if ($this->form_validation->run() == FALSE) {
        // Form validation failed, show error messages or redirect back to the form
    } else {
        $current_password = $this->input->post('current_password');
        $new_password = $this->input->post('new_password');

        // Assuming you have a User model with a method to update the password
        $user_id = $this->session->userdata('user_id');
        $this->load->model('User_model');
        $user = $this->User_model->get_user($user_id);

        if ($user && password_verify($current_password, $user->password)) {
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $this->User_model->update_password($user_id, $hashed_password);
            redirect('dashboard');
            // Password updated successfully, show success message or redirect to a success page
        } else {
            // Current password is incorrect, show error message or redirect back to the form
            // redirect('');
        }
    }
}
}
// $this->load->view('templates/dheader');
	// 	$this->load->view('frontend/change_pass');
	// 	$this->load->view('templates/dfooter');