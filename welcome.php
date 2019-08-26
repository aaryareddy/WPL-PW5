<?php
	session_start ();

	$email	= '';
	$name	= '';

	if (!empty($_SESSION ['name']) && strlen ($_SESSION ['name']) > 0){
		$name	= 1;
	}

	if ($name == 1){
		echo 'Welcome, '." " . $_SESSION ['name']. '!';
	}
	else{
		header('Location:login.html');
	}

	echo '<br><a href="welcome.php">Refresh homepage</a><br>';
	echo ' ';
	echo ' ';
	echo ' ';
	echo '<a href="logout.php"> Logout </a>';
?>
