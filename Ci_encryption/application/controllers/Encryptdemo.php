<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encryptdemo extends CI_Controller {

	public function __construct()
	{
	parent::__construct();
	$this->load->model('encryptmod');
	$this->load->database();
	$this->load->helper('url_helper');
	$this->load->helper('url');
	$this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('session');
   	$this->load->helper('array');
   	$this->load->library('encryption');

	}

	public function index($page='edit_profile')
	{
		
		$data['title'] = ucfirst($page);

		if($this->input->server("REQUEST_METHOD")==="POST")
		{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[20]');

			if($this->form_validation->run() == FALSE)
			{
				$this->session->set_flashdata('message', 'Please enter Data properly');
	            redirect('encryptdemo/');
			}
			else
			{
				$records['username'] = $this->encryption->encrypt($this->input->post("username"));
				$records['email']= $this->encryption->encrypt($this->input->post("email"));
				$records['password'] = $this->encryption->encrypt($this->input->post("password"));
			}
			$user = $this->encryptmod->register($records);

				if($user)
				{
					echo 2;
					redirect('encryptdemo/display');
				}
				else
				{
					$this->session->set_flashdata('message', 'Please enter Data properly');
	            	redirect('encryptdemo');
				}
		}

		if($this->input->server("REQUEST_METHOD")==="GET")
		{
		$this->load->view('assets/header_2',$data);
		$this->load->view('assets/sidebar',$data);
		$this->load->view('profile/'.$page,$data);
		$this->load->view('assets/footer_2',$data);
		}
	}

	public function display($page="display")
	{
		if(! file_exists(APPPATH.'views/profile/'.$page.'.php'))
		{
			show_404();
		}
		$data['title'] = ucfirst($page);
		$data['user'] = $this->encryptmod->display();

		

		$this->load->view('assets/header_2',$data);
		$this->load->view('assets/sidebar',$data);
		$this->load->view('profile/'.$page,$data);
		$this->load->view('assets/footer_2',$data);
	}


}

