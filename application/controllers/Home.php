<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Stations_Model');
	}

	public function index()
	{
		$result['data']=$this->Stations_Model->display_records();
		$this->load->view('index',$result);
	}
	 
}
