<?php 
	include_once("config.php");
	// $tables = array('0' => 221 );
	$count = 0;
	$print_count = 0;
	$conn = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die(mysql_error());
	if($conn) {
		mysql_select_db("drugs") or die(mysql_error());
		$table_result = mysql_query("show tables");
		if($table_result) {
			$tables = array();
			$i = 0;
			// $count1 = 0;
			while($row = mysql_fetch_row($table_result)) {
				$tables[$i] = $row[0];
				$i++;

			}
		}
	}
	if(isset($_GET['comp'])) {
		// $query = "SELECT name, manu, cap FROM  WHERE name LIKE '%$val%'";	
		$comp = $_GET['comp'];
		$count = 0;
		$tables_query = "SHOW TABLES";
		$tables_query_result = mysql_query($tables_query);
		// if($tables_query_result) {
			$tables = array();
			$i = 0;
			while($row = mysql_fetch_row($tables_query_result)) {
				$tables[$i] = $row[0];
				$i++;
			}
			$no_of_tables = $i;
		$matched_arrays = preg_grep('/'.$comp.'/', $tables);
		// print_r($matched_arrays);
		$i = 0;
		$no_of_matched = count($matched_arrays);
		// echo $no_of_matched;
		// print_r($matched_arrays);
		if($no_of_matched != 0) {
		$err_count = 0;

			foreach ($matched_arrays as $key => $value) {
				$tab_name = $value;
				// echo strtoupper($tab_name);
				// echo "<br>";
				$query = "SELECT DISTINCT name, manu, unit, price FROM ".$value;
				// echo $query;
				$result = mysql_query($query) or die(mysql_error());
				if ($no_of_matched != 0) {
					// $count++;
					// $print_count++;
					include("./print.php");
				} else {
					// echo "<span class='empty-error'>No data available</span>";
				}
			}
		} else {
			echo "<span class='empty-error'>No data available</span>";
		}
	} elseif(isset($_GET['name'])) {
		$name = $_GET['name'];
		$tables_query = "SHOW TABLES";
		$tables_query_result = mysql_query($tables_query);
		// if($tables_query_result) {
			$tables = array();
			$i = 0;
			while($row = mysql_fetch_row($tables_query_result)) {
				$tables[$i] = $row[0];
				$i++;
			}
			$no_of_tables = $i;
		// }
		// print_r($tables);
		$err_count = 0;
		foreach ($tables as $key => $value) {
			$query = "SELECT DISTINCT name, manu, unit, price FROM ".$value." WHERE name LIKE '%$name%'";
			$result = mysql_query($query) or die(mysql_error());
			$count++;
			include("print.php");
		}
	}
			// include_once("print.php");
 ?>