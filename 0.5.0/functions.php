<?php 
 $beer = $_POST[beer];
 $abvc = $_POST[abvc];
 $size = $_POST[size];
 $cost = $_POST[cost];
unset($_POST[submit]);
class brand {
	var $brand;
		function set_name($new_brand) {
			$this->brand = $new_brand;
		}
		function get_name() {
			return $this->brand;
		}
}

?>