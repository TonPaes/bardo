

<?php
	$db = mysqli_connect('localhost', 'root','root','teste');
	if(! $db ) {
		die('Could not connect: ' . mysqli_connect_error());
	}
	$query = "SET character_set_results=utf8";
	$utfencode = $db->query($query); 
?>
