<?php
	function security($string) {
		return htmlentities($string, ENT_QUOTES, 'utf-8', false);
	}
?>