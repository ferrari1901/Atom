<?php
class Usuarios extends CI_MODEL{
	private $table_name = 'usuarios';

	public $nome; //VARCHAR( 90 )
	public $login; //VARCHAR( 120 )
	public $senha; //VARCHAR( 250 )
	public $status; //BOOLEAN

	function __construct()
	{
		parent:: __construct();
	}

	function get_all(){
		$query = $this->db->get($this->table_name);
		return $query->result();
	}
}