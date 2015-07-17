<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['titulo'] = "Login";

	}

	public function index()
	{
		$this->data['mensagem'] = "Login de acesso";
		if(isset($_POST)){
			$this->verificaLogin($_POST);
		}
		
		$this->load->view('login', $this->data);
	}

	public function home()
	{
		$this->load->view('login');
	}

	public function verificaLogin($data)
	{
		echo '<pre>';
		var_dump($data);
		$this->load->view('usuario', $this->data);
	}
}
