<!DOCTYPE html>
<html>
<head>
	<title>FIR List</title>
	<style>
  		table {
   		border-collapse: collapse;
   		width: 100%;
   		color: #588c7e;
   		font-family: monospace;
   		font-size: 25px;
   		text-align: left;
     	} 
  		th {
   		background-color: #588c7e;
   		color: white;
    	}
  		tr:nth-child(even) {background-color: #f2f2f2}
 	</style>
</head>
<body>
	<!--*Click on the FIR ID to view the FIR.-->
	<a href="fir_.php">Go Back</a>
	<table>
		<tr>
			<th>FIR ID</th>
			<th>"  "</th>
			<th>Complaint</th>
			<th>"  "</th>
			<th>Date of Incident</th>
			<th>"  "</th>
			<th>Time of Incident</th>
			<th>"  "</th>
			<th>Registration Time</th>
			<th>"  "</th>
			<th>Status</th>
			<th>"  "</th>
			<th>View</th>
		</tr>

		<?php
		include 'db_connection.php';

		session_start();

		$sql = "SELECT * FROM FIR ORDER BY RegistrationTime";
		//echo $sql;
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		   	// output data of each row
		   	while($row = $result->fetch_assoc()) {
		   		$temp1 = $_SESSION[$row["Complaint"]];
		   		$temp2 = $_SESSION["category"];
		   		if( $row["CPhone"] == $_SESSION["user_phone"] OR $_SESSION[$temp1] == $temp2){
		   		if( ($row["Status"] == 0 AND $_SESSION["designation"] == "ASI") OR ($row["Status"] == 1 AND $_SESSION["designation"] == "SI") OR ($row["CPhone"] == $_SESSION["user_phone"])) {
		    echo "<tr><td>" .$row["FID"]. "</td><td></td><td>" . $row["Complaint"] . "</td><td></td><td>" . $row["IncidentDate"]. "</td><td></td><td>" . $row["IncidentTime"] . "</td><td></td><td>" . $row["RegistrationTime"] . "</td><td></td><td>" . '<a href="status_change.php?passFID='.$row["FID"].'">' .$row["Status"]. '</a></td><td></td><td>' . '<a href="viewFIR.php?passFID='.$row["FID"].'">ClickHere</a>' . "</td></tr>";
			}
		}
		}
			echo "</table>";
		} else { 
		echo "0 results"; 
		}
		$conn->close();
		?>

		
	</table>
</body>
</html>