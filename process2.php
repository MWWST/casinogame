<?php
session_start();
// var_dump($_SESSION['activities']);
if (!isset($_SESSION['$activities'])){
	$activities = array();
	$_SESSION['activities'] = $activities;
	array_push($_SESSION['activities'], "test");
	// var_dump($_SESSION['activities']);
}

else if (isset($_SESSION['$activities'])) {
	array_push($activities, "test2");
	var_dump($_SESSION['activities']);
	var_dump($activities);
}


?>
