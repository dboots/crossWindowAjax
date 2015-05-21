<?php
	class Editor {
		public static function setAttribute($attribute, $value) {
			unset($_SESSION[$attribute]);
			$_SESSION[$attribute] = $value;
		}

		public static function getAttribute($attribute) {
			return $_SESSION[$attribute];
		}
	}
?>