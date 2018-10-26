<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sales extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Sales_model');
		$this->load->library('session');
	    if($this->session->userdata('salesdetails'))
			{
			$admindetails=$this->session->userdata('salesdetails');
			
			$this->load->view('html/header');
			
			}
	}


	public function index()
	{	
		
		if(!$this->session->userdata('salesdetails'))
		{	 
		$data['login_list']=$this->Sales_model->employee_list_data();
		//echo'<pre>';print_r($data);exit;
	     $this->load->view('html/login',$data);
	
  }else{
	  
	  redirect('Sales/form');
  }
	}
  public function loginpost()
	{
		if(!$this->session->userdata('salesdetails'))
		{
						
			$post=$this->input->post();
			$data['login_list']=$this->Sales_model->employee_list_data();
			//echo '<pre>';print_r($data);exit;
			$login_deta=array('emp_username'=>$post['emp_username'],'emp_password'=>md5($post['emp_password']));
			//echo '<pre>';print_r($login_deta);exit;
			$check_login=$this->Sales_model->login_details($login_deta);
			//echo '<pre>';print_r($login_deta);exit;
				$this->load->helper('cookie');
				if(count($check_login)>0){
				$login_details=$this->Sales_model->get_employee_details($check_login['emp_id']);
				//echo '<pre>';print_r($login_details);exit;
				$this->session->set_userdata('salesdetails',$login_details);
				redirect('sales');
			}else{
				$this->session->set_flashdata('error',"Invalid Email Address or Password!");
				redirect('sales');
			}
		}else{
			//$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
	}
	
	public function logout()
	{
		$userinfo = $this->session->userdata('salesdetails');
        $this->session->unset_userdata($userinfo);
		$this->session->sess_destroy('salesdetails');
		$this->session->unset_userdata('salesdetails');
        redirect('');
	}
  
     public function form(){
	  if($this->session->userdata('salesdetails'))
			{
				$admindetails=$this->session->userdata('salesdetails');	
	        
	             $this->load->view('sales/index');
			
	  
         }else{
			  $this->session->set_flashdata('error','Please login to continue');
			redirect('');
		 }
  }
  
  public function formpost(){
	  if($this->session->userdata('salesdetails'))
			{
	     $post=$this->input->post();
	  //echo'<pre>';print_r($post);exit;
	  
	     $save_data=array(
				'f_name'=>isset($post['f_name'])?$post['f_name']:'',
				'f_number'=>isset($post['f_number'])?$post['f_number']:'',
				'f_email'=>isset($post['f_email'])?$post['f_email']:'',
				'f_bname'=>isset($post['f_bname'])?$post['f_bname']:'',
				'f_bnature'=>isset($post['f_bnature'])?$post['f_bnature']:'',
				'f_dbusiness'=>isset($post['f_dbusiness'])?$post['f_dbusiness']:'',
				'status'=>1,
				'create_at'=>date('Y-m-d H:i:s'),
	           );
	  $save=$this->Sales_model->save_sales_details($save_data);	
	             if(count($save)>0){
					$this->session->set_flashdata('success',"sales details sucessfully added");	
					 redirect('sales/form');	
					}else{
						$this->session->set_flashdata('error',"techechal probelem occur ");
						 redirect('sales/form');
					}
	  
	         }else{
			  $this->session->set_flashdata('error','Please login to continue');
			redirect('');
		 }
  }
  
	public function report(){
	  if($this->session->userdata('salesdetails'))
			{
				$admindetails=$this->session->userdata('salesdetails');	
	        
			$data['reports_list']=$this->Sales_model->reports_list_data();
			 //echo'<pre>';print_r($data);exit;
	             $this->load->view('sales/reports',$data);
			
	  
           }else{
			  $this->session->set_flashdata('error','Please login to continue');
			redirect('');
		 }
  }
  
  public function pay(){
	  if($this->session->userdata('salesdetails'))
			{ 
	  
	  $this->load->view('sales/payment');
	  
	  
         }else{
			  $this->session->set_flashdata('error','Please login to continue');
			redirect('');
		 }
  } 
  
   
  
}
?>
