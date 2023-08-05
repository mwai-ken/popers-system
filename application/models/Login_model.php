<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    protected $is_logged_in;	
	
	public function __construct(){
			
			$this->table="users";
			$this->datetime=date("Y-m-d H:i:s");
		  //  $this->id=1;//$this->session->userdata('id');
		     $this->id=$this->session->userdata('id');
		    $this->first_name="";//$this->session->userdata('first_name');
		    
		}
        function validate()
        {
            //isert data ----produce my sql query
            // $this->db->insert("tbl_user", $data)

          $arr['email']  = $this->input->post('email');
          $arr['password'] = $this->input->post('password');
      
        return $this->db->get_where('users', $arr)->row();
      
       
        }

        public function loginings()
        {
            $row = array();
            $this->db->select( '*' );
            $this->db->from($this->table );
            $this->db->where( array('email'=> $this->input->post( "email" )),'AND' );
            $query = $this->db->get();
            if($query->row()){
                $row = $query->row();
                $query->free_result();
            }
            ;
            return( $row );	
        }
        public function is_logged_in()	
        {
            if( !isset( $this->is_logged_in ) or $this->is_logged_in != true  )		
                return false;
            else 
                return true;		
        }
      
	public function lists()
		{
			$rows = [];
			$this->db->select('*' )
					->from('positions' )  
					->order_by('id','desc');
			//$this->db->where( array('t.Status'=>1),'AND');
			$query = $this->db->get();
			if($query->result()){
				$rows = $query->result();	
				$query->free_result();	
			}
			return( $rows );
		}
}
