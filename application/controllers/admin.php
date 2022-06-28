<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('Stations_Model');
	}


	public function adminlogin()
	{

		$data = array();
		$data = $this->input->post();

		if (isset($data) && $data != null) {
			$this->load->model('admin_model');

			$return = $this->admin_model->login($data['adminusername'], $data['adminpassword']);
			if (is_bool($return)) {
				echo "Login error";
			} else {

				$_SESSION['adminId'] = $return[0]['adminId'];
				$_SESSION['adminusername'] = $return[0]['adminusername'];



				redirect(base_url() . "admin/dashboard");
			}
		}
		$this->load->view('admin/adminlogin');
	}



	public function dashboard()
	{

		if (isset($_SESSION["adminId"])) {
			$data['admin'] = $_SESSION['adminId'];
			if (isset($data['admin']) && $data['admin'] != null) {

				$result['data'] = $this->Stations_Model->display_records();
				$this->load->model('admin_model');
				$this->load->view('admin/dashboard', $result);
			}
		} else {
			$this->load->view('admin/adminlogin');
		}
	}

	public function updatedata()
	{
		$stationId = $this->input->get('id');
		$result['data'] = $this->Stations_Model->displayrecordsById($stationId);
		$this->load->view('stations/update_records', $result);
		if ($this->input->post('update')) {
			$stationHours = $this->input->post('stationHours');
			$stationMinutes = $this->input->post('stationMinutes');
			$stationSeconds = $this->input->post('stationSeconds');
			$stationHours2 = $this->input->post('stationHours2');
			$stationMinutes2 = $this->input->post('stationMinutes2');
			$stationSeconds2 = $this->input->post('stationSeconds2');
			$this->Stations_Model->update_records($stationHours, $stationMinutes, $stationSeconds, $stationHours2, $stationMinutes2, $stationSeconds2, $stationId);
			
			redirect('admin/dashboard');
		}
	}
}
