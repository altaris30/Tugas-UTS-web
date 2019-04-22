<?php
	
	$a = $_POST['usia'];
	if (!is_numeric($a)) {
			echo "tahu usia kan?";
		}	
	else{
	
		if ($a <-9){
			echo "Entah dimana";
		}
		else if ($a <0) {
			echo "Perut";
			# code...
		}
		else if ($a <= 5 ) {
			echo "Balita";
			# code...
		}
		else if ($a <= 16 ) {
			echo "Anak-anak";
			# code...
		}
		else if ($a <= 50 ) {
			echo "Dewasa";
			# code...
		}
		
		else{
			echo "Tua";
		}
	}
?>