<table border="1px">
	<tr>
		<?php
			echo "BẢNG CỬU CHƯƠNG"."<br/>";
			for ($i=1; $i < 10; $i++) { 
				echo "<td>";
				for ($j=1; $j <=10; $j++) { 
					echo "$i x $j = ".($i*$j)."<br/>";
					echo "<br/>";
				}
				echo "</td>";
			}
		?>
	</tr>
</table>