<?php

class Register extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('register_model');
	}

	public function index($race_link) {
		$this->register_model->set_race_by_link($race_link);

		$data['register_model'] = $this->register_model;

		$this->load->view('templates/header', $data);
		$this->load->view('register/index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function number_participants() {
		$participants = array();
		$adults = $this->input->post('adults');
		$children = $this->input->post('children');

		if (is_numeric($adults)) {
			for ($i = 0; $i < intval($adults); $i++) {
				$p = array(
					"type" => "adult",
 					"firstname" => "",
					"lastname" => "",
					"birthdate" => "");

				$participants[] = $p;
			}
		}

		if (is_numeric($children)) {
			for ($i = 0; $i < intval($children); $i++) {
				$p = array(
					"type" => "child",
 					"firstname" => "",
					"lastname" => "",
					"birthdate" => "");

				$participants[] = $p;
			}
		}

		$this->register_model->set_participants($participants);

		$this->load->helper('url');
		
		redirect('/register/contact');
	}

	public function contact() {
		$data['register_model'] = $this->register_model;

		$this->load->view('templates/header', $data);
		$this->load->view('register/contact', $data);
		$this->load->view('templates/footer', $data);
	}

	public function participants() {
		$data['register_model'] = $this->register_model;

		$this->load->view('templates/header', $data);
		$this->load->view('register/participants', $data);
		$this->load->view('templates/footer', $data);
	}
}
?>
