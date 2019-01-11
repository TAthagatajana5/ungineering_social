<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
    
    public function login_submit()
	{
		$this->load->view('welcome_message');
	}
    
    public function regidter_form()
	{
		$this->load->view('welcome_message');
	}
    
    public function register_submit()
	{
		$this->load->view('welcome_message');
	}
    
    public function logout_submit()
	{
		$this->load->view('welcome_message');
	}
}
