<?php
	echo "<table border = \"1\" style='border-collapse: collapse'>";
		for($row=0; $row <= 100; $row++) {
			if($row == 0)
				echo "<td></td>";
			else
				echo "<td>$row</td>";
		}
		for($row=1; $row <= 100; $row++) {
			echo "<tr> \n";
			echo "<td>$row</td>";
			for($col=1; $col <= 100; $col++) {
				$p = $col * $row;
				echo "<td>$p</td> \n";
			}
			echo "</tr>";
		}
	echo "</table>";
?>
