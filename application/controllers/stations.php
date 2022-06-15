<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stations extends CI_Controller {

	public function baclaran()
	{
		$data = array();
		$data = $this->input->post();
		$this->load->model('stations_model');
		$this->load->view('stations/baclaran');
	}

    public function edsa()
	{
		$this->load->view('stations/edsa');
	}
    
    public function libertad()
	{
		$this->load->view('stations/libertad');
	}
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Stations_Model');
	}
	public function stationforms(){
		
		$this->load->view('stations/stationforms'); 
		if($this->input->post('save')){
			  $data['stationArrive']=$this->input->post('stationArrive');
			  $response=$this->Stations_Model->saverecords($data);
			  if($response==true){
				echo"saved";
			  }
			  else{
				echo"error";
			  }
		}
	}
	public function stationview()
	{
		$this->load->model('Stations_Model');
		$data['time']=$this->Stations_Model->get_posts();
		print_r($data['time']);
		$this->load->view('stations/stationview',$data);
	}	
}
