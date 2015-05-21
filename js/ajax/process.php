<?php
	include_once('../../_classes/Editor.php');
	session_start();

	if (isset($_POST)) {
		$action = $_POST['action'];
		$attribute = $_POST['attribute'];
		$value = $_POST['value'];

		switch($action) {
			case 'get':
				$return = Editor::getAttribute($attribute);
				break;

			case 'set':
				Editor::setAttribute($attribute, $value);
				break;
		}

		print $return;
	}
?>