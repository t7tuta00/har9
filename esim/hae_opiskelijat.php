<?php
	require "connection.php";
	$sql = "SELECT etunimi, sukunimi FROM opiskelija";

	$resultObject = $db->query($sql);

	foreach ($resultObject as $row) {
		echo $row['etunimi'].' '.$row['sukunimi'].'<br/>';
	}
	?>
