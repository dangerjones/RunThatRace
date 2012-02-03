<?php

class Register_model extends CI_Model {
	var $race = null;
	var $contact = null;
	var $participants = null;
	var $session_keys = null;

	public function __construct() {
		$session_keys = array(
			'race' => get_class($this) . '/race',
			'contact' => get_class($this) . '/contact',
			'participants' => get_class($this) . '/participants',
		);

		$this->session_keys = $session_keys;

		$this->load->library('session');

		$this->get_session();
	}

	function get_session() {
		$sessionKey = get_class($this);
		
		foreach ($this->session_keys as $key => $value) {
			$this->$key = $this->session->userdata($value);
		}
	}

	function set_session() {
		$sessionKey = get_class($this);

		foreach ($this->session_keys as $key => $value) {
			$this->session->set_userdata(
				$value,
				$this->$key
			);
		}
	}

	public function get_contact() {
		return $this->contact;
	}

	public function set_contact($c) {
		$this->contact = $c;
		
		$this->set_session();
	}

	public function get_participants() {
		return $this->participants;
	}

	public function set_participants($p) {
		$this->participants = $p;

		$this->set_session();
	}

	public function get_race() {
		return $this->race;
	}

	public function set_race($r) {
		$this->race = $r;

		$this->set_session();
	}

	public function set_race_by_link($race_link = FALSE) {
		$this->load->model('races_model');
		
		$this->race = $this->races_model->get_race_by_link($race_link);

		$this->set_session();
	}
}

?>
