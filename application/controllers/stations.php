<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stations extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Stations_Model');
	}
	
	public function station()
	{
		$stationId=$this->input->get('id');
		$result['data']=$this->Stations_Model->displayrecordsById($stationId);
		$this->load->view('stations/station',$result);
	}

	public function stationforms(){
		$result['data']=$this->Stations_Model->display_records();
		$this->load->view('stations/stationforms',$result);
	}
	//display data and update data for controllers
	public function updatedata()
	{
		$stationId=$this->input->get('id');
		$result['data']=$this->Stations_Model->displayrecordsById($stationId);
		$this->load->view('stations/update_records',$result);
			if($this->input->post('update'))
			{
				$stationHours=$this->input->post('stationHours');
				$stationMinutes=$this->input->post('stationMinutes');
				$stationSeconds=$this->input->post('stationSeconds');
				$this->Stations_Model->update_records($stationHours,$stationMinutes,$stationSeconds,$stationId);
				
				echo "time changed successfully";
			}
	}
}
