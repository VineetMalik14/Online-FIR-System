

<!DOCTYPE html>
<html>
<head>
	<title>FIR</title>
	<style>
  		table {
   		width: 100%;
   		font-size: 25px;
   		text-align: left;
     	} 
     	button {
     		width: 70%;
     		text-align: center;
     		background-color: #efefef;
     	}
 	</style>
	<script>
		function work() {
			document.getElementById("print").style.visibility = "hidden";
			window.print();
			document.getElementById("print").style.visibility = "visible";
		}
	</script>
</head>
<body>
	<?php
	include 'db_connection.php';
	session_start();

	$FID = $_GET["passFID"];
	$sql = "SELECT * FROM FIR WHERE FID = '".$FID ."' ";
	$result = $conn->query($sql);
	if ($row = $result->fetch_assoc()) {
		if ($row["Status"] != "2"){
			echo "FIR not approved.";
		}
		else{
		echo "<table>";
		echo "<tr><td></td> <td><b>First Investigation Report</b></td> <td></td> </tr> <tr><td><br></td></tr>";
		echo "<tr><td><b>No:   </b></td><td>" . $row["FID"] . "</td></tr>";
		echo "<tr><td><b>Name: </b>      </td><td> " . $row["Name"] . "  </td></tr>";
		echo "<tr><td><b>Age:  </b>      </td><td>" . $row["Age"] ."     </td></tr>";
		echo "<tr><td><b>Address:  </b>  </td><td>" . $row["Address"] . "</td></tr>";
		echo "<tr><td><b>Complaint:</b>  </td><td>" . $row["Complaint"]."</td></tr>" ;
		list($c, $d) = explode("$", $_SESSION[$row["Complaint"]]);
		echo "<tr><td><b>Section:  </b>  </td><td>" . $c . "</td></tr>";
		echo "<tr><td><b>Date of Incidence: </b></td><td>" . $row["IncidentDate"]."</td><td>";
		echo "<b>Time: </b></td><td>" . $row["IncidentTime"] ."</td></tr>";
		$rt = $row["RegistrationTime"];
		list($a, $b) = explode(" ", $rt);
		echo "<tr><td><b>Date of Registration: </b></td><td> " . $a . "</td><td>";
		echo "<b>Time: </b></td><td>" . $b ."</td></tr> <tr><td><br></td></tr>";
		echo "<tr><td></td> <td><button id = 'print' onclick='work();'><b>Print FIR</b></button></td> <td></td> </tr>";
		echo "</table>";
		}  
	}	
	?>

</body>
</html>