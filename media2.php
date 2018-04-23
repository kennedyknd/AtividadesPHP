<?php

	$media = $_POST['media'];
	
	if ($media >= 7 ) {
		echo "Aprovado";
	} else {
		echo "Reprovado";
	}

?>