<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['titulo'] = "Login de acesso ao sistema";

	}

	public function index()
	{
		$this->load->view('login');
	}

	public function home()
	{
		$this->load->view('login');
	}

	public function verificaLogin()
	{
		$this->load->view('login');
	}
}
