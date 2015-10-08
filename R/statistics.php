<html>

<head>
    <title>Statistics</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Codesteins</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="../apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="nav-bar">
        <div class="nav-bar-container">
            <div class="logo">
                <img src="../tile.png">
            </div>
            <ul class="nav-bar-list pull-left">
                <li class="nav-bar-list-item">
                    <a href="../index.php">Home</a>
                </li>
                <!-- <li class="nav-bar-list-item">
                    <a href="">About</a>
                </li> -->
                <li class="nav-bar-list-item">
                    <a href="statistics.php">Statistics</a>
                </li>
                <!-- <li class="nav-bar-list-item">
                    <a href="">Why?</a>
                </li> -->
            </ul>
        </div>
    </div>
    <div class="container">
    	<div>
    		<h1>Search for medicine statistics in Bangalore.</h1>
    	</div>
    	<br>
        <form class="stat-form" action="statistics.php" method="GET">
            <label>Medicine Name</label><br>
            <input class="stat-bar" type="text" name="med" autofocus placeholder="Enter the drug name" value=<?php if (isset($_GET['med'])) {echo "'".$_GET['med']."'";} ?>><br><br>
            <input class="submit-btn" type="submit" value="Get the graph">
        </form>
        <div>
        	<h1>The following tables are the top 10 medicines consumed in different regions of Bangalore.</h1>
        </div><br>
        <div class="top-list-div">
        	<?php 
	include_once("../config.php");



        		// if (isset($_GET['med'])) {
					// $name = $_GET['med'];
					$conn = mysql_connect(DB_HOST,DB_USER) or die(msql_error());
					mysql_select_db("Alldrugs") or die(mysql_error());
					$query = "SELECT medName FROM allmeds ORDER BY LocA DESC LIMIT 10";
					// echo $query;
					$result = mysql_query($query) or die(mysql_error());
					while($row = mysql_fetch_array($result)) {
						$top_list[] = $row;
					}
				// }
					// print_r($top_list);
					echo "<center><ul class='top-list' style='display: inline-block;'><li class='loc'>Bangalore(North)</li>";
					$i = 0;
					while ($i < 10) {
						echo "<li>".$top_list[$i]['medName']."</li>";
						$i++;
					}
					echo "</ul>";
					unset($top_list);
					$top_list = array();


//----------------------------------------------------------

					$query1 = "SELECT medName FROM allmeds ORDER BY LocB DESC LIMIT 10";
					// echo $query;
					$result1 = mysql_query($query1) or die(mysql_error());
					while($row1 = mysql_fetch_array($result1)) {
						$top_list[] = $row1;
					}
				// }
					// print_r($top_list);
					echo "<ul class='top-list' style='display: inline-block;'><li class='loc'>Bangalore(South)</li>";
					$i = 0;
					while ($i < 10) {
						echo "<li>".$top_list[$i]['medName']."</li>";
						$i++;
					}
					echo "</ul>";
					unset($top_list);
					$top_list = array();
//----------------------------------------------------------

					$query2 = "SELECT medName FROM allmeds ORDER BY LocC DESC LIMIT 10";
					// echo $query;
					$result2 = mysql_query($query2) or die(mysql_error());
					while($row2 = mysql_fetch_array($result2)) {
						$top_list[] = $row2;
					}
				// }
					// print_r($top_list);
					echo "<ul class='top-list' style='display: inline-block'><li class='loc'>Bangalore(Central)</li>";
					$i = 0;
					while ($i < 10) {
						echo "<li>".$top_list[$i]['medName']."</li>";
						$i++;
					}
					echo "</ul>";
					unset($top_list);
//----------------------------------------------------------
					$top_list = array();

					$query3 = "SELECT medName FROM allmeds ORDER BY LocD DESC LIMIT 10";
					// echo $query;
					$result3 = mysql_query($query3) or die(mysql_error());
					while($row3 = mysql_fetch_array($result3)) {
						$top_list[] = $row3;
					}
				// }
					// print_r($top_list);
					echo "<ul class='top-list' style='display: inline-block;'><li class='loc'>Bangalore(West)</li>";
					$i = 0;
					while ($i < 10) {
						echo "<li>".$top_list[$i]['medName']."</li>";
						$i++;
					}
					echo "</ul></center>";
					unset($top_list);


        	 ?>
        </div>
    </div>
    <!-- <div class="graphs"></div> -->
    <?php
	if (isset($_GET['med'])) {
		$name = $_GET['med'];
		$conn = mysql_connect(DB_HOST,DB_USER) or die(msql_error());
		mysql_select_db("Codesteins") or die(mysql_error());
		$query = "SELECT sno,medName FROM allmeds WHERE medName LIKE '%".$name."'";
		// echo $query;
		$result = mysql_query($query) or die(mysql_error());
		$arr = mysql_fetch_array($result) or die(mysql_error());
		// echo $arr[0];
		// echo type($arr);
		// print_r($arr);
		echo "<div style='text-align: center;'><h1>The graph below shows the sales of ".strtoupper($arr[1])."</h1></div>";
			// echo $arr['sno'];
		if (empty($arr)) {
			# code...
			echo "<span class='empty-error'>No matches found. Please check the name you've entered.</span>";

		}

		if (isset($arr['sno'])) {
			$val = $arr['sno'];
			// echo $arr['sno'];
			// echo "Rscript /Applications/MAMP/htdocs/codesteins/r/med_name_loc_bar.R  $val";
	    	$rtn = exec("./script.sh $val"); 
		    sleep(1);
		    // echo $rtn,"<br>";
	    	echo "<div class='graphs'><center><img src='./".$val.".png'></center></div>";	
			// sleep(2);
		} else {
			echo "<span class='empty-error'>No matches found. Please check the name you've entered.</span>";
		}
	}	
 ?>
</body>

</html>
