<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function employee_list_data(){
	$this->db->select('employee.*')->from('employee');
		$this->db->where('employee.status !=',2);
        return $this->db->get()->result_array();
	}
	
	public function login_details($data){
		$sql = "SELECT * FROM employee WHERE (emp_username ='".$data['emp_username']."' AND emp_password='".$data['emp_password']."' AND status=1)";
		return $this->db->query($sql)->row_array();	
	}
	public function get_employee_details($emp_id){
		$this->db->select('employee.emp_id,employee.emp_username')->from('employee');		
		$this->db->where('emp_id', $emp_id);
		$this->db->where('status', 1);
        return $this->db->get()->row_array();	
	}		
	public function save_sales_details($data){
	$this->db->insert('sales_details',$data);
	return $this->db->insert_id();
		
	}
		public function reports_list_data(){
		$this->db->select('sales_details.*')->from('sales_details');		
		$this->db->where('status', 1);
        return $this->db->get()->result_array();	
	}		
		
	public  function check_email_already($f_email){
		$this->db->select('*')->from('sales_details');
		$this->db->where('sales_details.f_email',$f_email);
		return $this->db->get()->row_array();
	}	
	
  }