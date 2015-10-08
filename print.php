<?php 

// if($count != 0) {
// echo "Started printing<br>";
		// echo $count,"<br>";
// echo $result;
	// $print_count = 1;

		while($row = mysql_fetch_row($result)) {
			$results[] = $row;
		}
		// echo count($results);
		if (isset($results[0])) {
			# code...
			echo strtoupper($value),"<br>";
			echo "No of results: ",ceil(count($results)/2);
			if(count($results) == 0) {
				// echo "<span class='empty-error'>No data available</span>";
			} else {
				echo "<table><tr><th>Name</th><th>Manufacturer</th><th>Unit</th><th>Price</th></tr>";
				for ($i=0; $i < count($results) / 2; $i++) { 
					echo "<tr><td>".$results[$i][0]."</td><td>".$results[$i][1]."</td><td>".$results[$i][2]."</td><td>Rs.".$results[$i][3]."/-</td></tr>";
				}
				echo "</table>";
				unset($results);
			}
		} else {
			$err_count++;
			// if ($print_count == 1) {
			// }
		}
		if ($err_count == $no_of_tables) {
			echo "<span class='empty-error'>No data available</span>";
		}
		// print_r($results);
	// }
 ?>