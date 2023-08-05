<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contents extends CI_Model {

    protected $is_logged_in;	
	
	public function __construct() 
	{		
		parent::__construct();
		$this->datetime=date("Y-m-d H:i:s");
        $this->id=1;//$this->session->userdata('id');
		$this->table="messages";
		
	}	
    public function creates()
    {
        
        $this->db->trans_begin();
        if($this->db->insert( $this->table, [
            'Name' => $this->input->post("name"),
            'Email' => $this->input->post("email"),
             'Contact' => $this->input->post("contact"),
             'Gender' => $this->input->post("gender"),
          'Message' => $this->input->post("message"),
             'DateCreated' => $this->datetime,
             
          
      
                
        ] )){
              $id = $this->db->insert_id();

          
                   
            if ($this->db->trans_status() === FALSE)
             {
                        $this->db->trans_rollback();
                        return false;
                }
                else
                {
                        $this->db->trans_commit();
                           return true;
            }
            }else{
                return false;
            }
            }

              public function lists()
    {
        $rows = [];
        $this->db->select('t.*' )
                ->from($this->table .' t')  
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
    