<?php

class Register_model extends CI_Model {
	var $race = null;
	var $contact = null;
	var $participants = null;

	public function __construct() {
	}

	function get_session() {
		$sessionKey = get_class($this);
		
		foreach ($this as $key => $value) {
			$this->$key = $this->CI->session->userdata($sessionKey . '$' . $key);
		}
	}

	function set_session() {
		$sessionKey = get_class($this);

		foreach ($this as $key => $value) {
			$this->CI->session->set_userdata(
				$sessionKey . '$' . $key,
				$value
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
}

?>
