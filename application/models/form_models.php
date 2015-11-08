<?php
class form_models extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	
	public function submit_form($data){
		$this->db->insert("form_beasiswa",$data);
	}
}