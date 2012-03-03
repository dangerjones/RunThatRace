<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed.');

	function formatted_race_date($races_item = FALSE) {
		if (!$races_item) {
			echo "ERROR: formatted_race_date needs a parameter representing the race";
		}
		$date = DateTime::createFromFormat('Ymd', $races_item['day']);
		return $date->format('D M d');
	} 
?>
