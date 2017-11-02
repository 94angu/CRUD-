<?php 
	if (!Defined('BASEPATH')) exit ('No direct script access allowed');

	class Users extends CI_Controller{

		public function __construct(){
		parent::__construct();
			$this->load->model('user');
        	$this->load->helper('url_helper');
		}

 		public function index(){
 			$data['users'] = $this->user->getUser();
        	$data['title'] = 'User Details';

        	$this->load->view('header', $data);
			$this->load->view('user_details',$data);
		}

		public function registerUser(){
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title']='Register new user';

			$this->form_validation->set_rules('index_no','Index No','required|min_length[5]|max_length[5]');
			$this->form_validation->set_rules('first_name','First Name','required');
			$this->form_validation->set_rules('last_name','Last Name','required');
			$this->form_validation->set_rules('t_no','Telephone No','required|min_length[10]|max_length[10]');

			if($this->form_validation->run()===FALSE){
				$this->load->view('header',$data);
				$this->load->view('registration',$data);
			}else{
				$this->user->insertUser();
				$this->load->view('header',$data);
				$this->load->view('success');
			}
		}

		public function editUser(){
			$id=$this->uri->segment(3);

			if (empty($id)) {
				show_404();

			}

			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title']='Edit User details';
			$data['user_details']=$this->user->getUser($id);

			$this->form_validation->set_rules('first_name','First Name','required');
			$this->form_validation->set_rules('last_name','Last Name','required');
			$this->form_validation->set_rules('t_no','Telephone No','required|min_length[10]|max_length[10]');

			if($this->form_validation->run()===FALSE){
				$this->load->view('header',$data);
				$this->load->view('edit_user',$data);
			}else{
				$this->user->updateUser($id);
				redirect(base_url().'index.php/users');
			}
		}

		public function deleteUser(){
			$id=$this->uri->segment(3);

			if(empty($id)){
				show_404();
			}

			$this->user->deleteUser($id);
			redirect(base_url().'index.php/users');
		}

		public function searchUser(){
			$this->load->helper('form');
			$this->load->library('form_validation');

			$id=$this->input->post('index_no');
	
			$data['title']='Search User';

			$this->form_validation->set_rules('index_no','Index_No','required');

			if($this->form_validation->run()===FALSE){
				$this->load->view('header',$data);
				$this->load->view('search_user',$data);
			}else{
				$data['users']=$this->user->SearchUser($id);
				$this->load->view('header',$data);
				$this->load->view('search_user',$data);
				$this->load->view('user_details',$data);
			}

		}
	}

	

 ?>

 