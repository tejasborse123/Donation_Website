<?php

	if (isset($_POST['submit'])) {
		
		$selected = $_POST['Donate'];
		echo "You Selected : ";

		foreach ($selected as $key => $values) {
			echo $values." , 	";

			include "new.html";
		}

		
	}
	
?>