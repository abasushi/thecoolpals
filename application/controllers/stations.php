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
}
