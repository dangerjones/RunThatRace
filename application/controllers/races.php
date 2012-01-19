<?php

class Races extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('races_model');
	}

	public function index() {
		$data['races'] = $this->races_model->get_races();

		$data['title'] = 'Races';

		$this->load->view('templates/header', $data);
		$this->load->view('races/index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function view($link = FALSE) {
		$data['races'] = $this->races_model->get_race_by_link($link);

		$data['title'] = 'Races';

		$data['requested_link'] = $link;

		$this->load->view('templates/header', $data);
		$this->load->view('races/view', $data);
		$this->load->view('templates/footer', $data);
	}

	public function search() {
		$searchEventType = $this->input->post('searchEventType');
		$searchState = $this->input->post('searchState');
		$searchMonth = $this->input->post('searchMonth');
		$searchName = $this->input->post('searchName');

		$data['races'] = $this->races_model->get_races(
			$searchName,
			$searchMonth,
			$searchState,
			$searchEventType);

		$data['title'] = 'Races';

		$this->load->view('templates/header', $data);
		$this->load->view('races/index', $data);
		$this->load->view('templates/footer', $data);
	}
}
?>
