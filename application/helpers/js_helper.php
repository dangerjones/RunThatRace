<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed.');
	$js = '';

	function defer_js($script) {
		global $js;
		$js .= $script;
	} 

	function get_deferred_js() {
		global $js;
		return $js;
	}
?>
