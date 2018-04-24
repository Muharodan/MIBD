<?php 
	include('connection.php');
	$query = "SELECT * FROM usergroups";
	if(isset($_GET['iSubmit'])){
		$name = $_GET['iName'];
			$add="INSERT INTO usergroups(name) VALUES ('$name')";
			$sql->query($add);
			
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body>
<table>
<tr>
	<th>Role</th>
	</tr>
	<?php
	if($result = $sql->query($query)){
		while($row = $result->fetch_array()){
	echo "<tr>";
	echo "<td>".$row['name']."</td>";
	echo "</tr>";
}	
}
	?>
	</table>
	<br>
	<form method="get" action="userGroup.php">
<fieldset>
<legend>Add New Role</legend>
<input type="text" name="iName">
<button type="submit" name="iSubmit">ADD</button>
</fieldset>
</table>	
</body>
</html>