<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed.');

class MY_Input extends CI_Input
{
	function is_post() {
		return $_SERVER['REQUEST_METHOD'] == 'POST';
	} 
}
?>
