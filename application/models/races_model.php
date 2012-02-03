<?php

class Races_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();
	}

	public function get_races($searchName = FALSE, $searchMonth = FALSE, $searchState = FALSE, $searchEventType = FALSE) {
		$this->db->order_by('day', 'asc');

		if ($searchName === FALSE && $searchMonth === FALSE && $searchState === FALSE && $searchEventType === FALSE) {
			$query = $this->db->get('races');

			return $query->result_array();
		}
		
		if ($searchName !== FALSE) {
			$this->db->like('titleLowerCase', $searchName);
			$query = $this->db->get('races');

			return $query->result_array();
		}

		if (empty($searchMonth) === FALSE) {
			$this->db->where('month', $searchMonth);
		}

		if (empty($searchState) === FALSE) {
			$this->db->where('state', $searchState);
		}

		if (empty($searchEventType) === FALSE) {
			$this->db->where('eventType', $searchEventType);
		}

		$query = $this->db->get('races');

		return $query->result_array();
	}

	public function get_race_by_link($link = FALSE) {
		$query = $this->db->get_where('races', array('link' => $link));
		return $query->row_array();
	}
}

?>
