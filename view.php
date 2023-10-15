<!DOCTYPE html>
<html>

<head>
	<title>Available Properties</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			font-family: Arial, sans-serif;
		}

		td,
		th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		th {
			background-color: #ADD8E6;
		}

		.header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 20px;
			background-color: #5f9ea0;
			color: white;
			font-size: 20px;
			font-weight: bold;
		}

		.header-button {
			background-color: white;
			color: #663399;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
		}

		.header-button:hover {
			background-color: #663399;
			color: white;
		}

		.header-home {
			color: white;
			font-size: 30px;
			cursor: pointer;
		}

		.header-home:hover {
			color: #dddddd;
		}
	</style>
</head>

<body>
	<div class="header">
		<div>
			<a href="index.html" class="header-home">&#8962;</a>
		</div>
		<div class="header-title">Your Task</div>
		<div>
			<a href="form.html" class="header-home">Add Task</a>
		</div>
	</div>
	<?php
	// Open the lp.txt file in read mode (r)
	$handle = fopen('form.txt', 'r');

	// Create an empty array to store the LP details
	$lp_details = array();

	// Loop through each line in the file until the end of the file is reached
	while (!feof($handle)) {
		// Get the details for each LP
		$heading = fgets($handle);
		$eltype = fgets($handle);
		$timef = fgets($handle);
		$datef = fgets($handle);
		$timet = fgets($handle);
		$datet = fgets($handle);
		$description = fgets($handle);

		// Add the LP details to the array
		array_push($lp_details, array(
			"heading" => $heading,
			"eltype" => $eltype,
			"timef" => $timef,
			"datef" => $datef,
			"timet" => $timet,
			"datet" => $datet,
			"description" => $description,
		)
	);
	}

	// Close the file
	fclose($handle);

	// Display the LP details in a table
	echo "<table>";
	echo "<tr><th>Event</th><th>Type</th><th>Time from</th><th>to</th><th>Description</th></tr>";
	foreach ($lp_details as $lp) {
		echo "<tr>";
		echo "<td>" . $lp['heading'] . "</td>";
		echo "<td>" . $lp['eltype'] . "</td>";
		echo "<td>" . $lp['timef'] . $lp['datef'] . "</td>";
		echo "<td>" . $lp['timet'] . $lp['datet'] . "</td>";
		echo "<td>" . $lp['description'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
</body>

</html>