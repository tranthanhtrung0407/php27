<?php
	for($i=0;$i<8;$i++){
		for($j=0;$j<8;$j++){
			if ($i<=$j) {
				echo "*";
			} else {
				echo "&nbsp&nbsp";
			}
		}
		echo "<br>";
	}
?>