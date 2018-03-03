<?php
	echo "<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\"/>";
	$user = $_POST["username"];
	$pass = $_POST["password"];
	$largefruit = $_POST["lfruit"];
	$smallfruit = $_POST["sfruit"];
	$normfruit = $_POST["fruit"];
	$shipping = $_POST["ship"];

	echo "<p>Welcome " . $user . "! Don't forget your password is " . $pass . ". Here is your receipt:<p><br>";
	echo "<table border = \"1\">";
		echo "<tr>";
			echo "<th></th>";
			echo "<th>Quantity</th>";
			echo "<th>Cost Per Item</th>";
			echo "<th>Sub Total</th>";
		echo "</tr>";
		echo "<tr>";
			echo "<th>Large Grapefruit</th>";
			echo "<td>$largefruit</td>";
			echo "<td>$1000</td>";
			echo "<td>$" . ($largefruit * 1000) . "</td>";
		echo "</tr>";
		echo "<tr>";
                        echo "<th>Small Grapefruit</th>";
                        echo "<td>$smallfruit</td>";
                        echo "<td>$0.01</td>";
                        echo "<td>$" . ($smallfruit * 0.01) . "</td>";
                echo "</tr>";
		echo "<tr>";
                        echo "<th>Normal-Sized Grapefruit</th>";
                        echo "<td>$normfruit</td>";
                        echo "<td>$1.50</td>";
                        echo "<td>$" . ($normfruit * 1.50) . "</td>";
                echo "</tr>";
		echo "<tr>";
			echo "<th>Shipping</th>";
			echo "<td colspan=\"2\">$shipping day shipping</td>";
			if($shipping == 1)
			{
				echo "<td>$50.00</td>";
			}
			else if($shipping == 3)
			{
				echo "<td>$5.00</td>";
			}
			else
			{
				echo "<td>$0.00</td>";
			}
		echo "</tr>";
		echo "<tr>";
			echo "<th colspan=\"3\">Total Cost</th>";
			if($shipping == 1)
                        {
                               	echo "<th>$" . (50 + ($largefruit * 1000) + ($smallfruit * 0.01) + ($normfruit * 1.50)) . "</th>";
                        }
                        else if($shipping == 3)
                        {
                               	echo "<th>$" . (5 + ($largefruit * 1000) + ($smallfruit * 0.01) + ($normfruit * 1.50)) . "</th>";
                       	}
                        else
                        {
                                echo "<th>$" . (($largefruit * 1000) + ($smallfruit * 0.01) + ($normfruit * 1.50)) . "</th>";
                        }
		echo "</tr>";
	echo "</table>";
?>
