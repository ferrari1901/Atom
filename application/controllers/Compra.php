<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compra extends CI_Controller {


	public function __consruct()
	{
		parent::__construct();
		$this->data['titulo'] = "Finalizar compra";
	}

	public function index()
	{
		$this->load->view('compra');
	}
}
