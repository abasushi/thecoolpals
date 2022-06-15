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
	public function stationforms()
	{
		$this->form_validation->set_rules('stationArrive','StationArrive','required');
		if($this->form_validation->run()==FALSE){
		$this->load->model('stations_model');
		$data['time']=$this->stations_model->get_posts();
		print_r($data['time']);
		$this->load->view('stations/stationforms',$data);

	}else{
		$this->stations_model->insert_time();
		$this->session->set_flashdata('post_added','New post was added');
		redirect(base_url()); 
	}
}
}
