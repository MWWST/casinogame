<?php 
session_start();
	$activities = array();
// var_dump($_SESSION['counter']);
if (isset($_SESSION['counter'])){
	if(isset($_POST['action']) && $_POST['action'] == 'farmgold') 
	{
		$_SESSION['counter']+=rand(0,10);
		$_SESSION['activities'][] = "You entered a farm and earned" .$_SESSION['counter'] . date('m-d-Y');
		header('location: index.php');
		die();
	}

	if(isset($_POST['action']) && $_POST['action'] == 'cavegold') 
	{
		$_SESSION['counter']+=rand(5,10);
		$_SESSION['activities'][] = "You entered a CAVE and earned" .$_SESSION['counter'] . date('m-d-Y');
		header('location: index.php');
		die();
	}
	if(isset($_POST['action']) && $_POST['action'] == 'housegold') 
	{
		$_SESSION['counter']+=rand(2,5);
		$_SESSION['activities'][] = "You entered a HOUSE and earned" .$_SESSION['counter'] . date('m-d-Y');
		header('location: index.php');
		die();
	}
	if(isset($_POST['action']) && $_POST['action'] == 'casinogold') 
	{
		$_SESSION['counter']+=rand(-50,50);
		$_SESSION['activities'][] = "You entered a CASINO and earned" .$_SESSION['counter'] . date('m-d-Y');
		header('location: index.php');
		die();
	}
}

else {
	$counter=0;
	$_SESSION['counter'] = $counter;
	$_SESSION['activities'][] = "You entered a farm and earned" .$_SESSION['counter'] . date('m-d-Y');
	header('location: index.php');
	// die();
}

// if  (count($activities>0)){
// $_SESSION['activities'][] = $activities;
// header('location: index.php');


// 	}

	// if(isset($_POST['action']) && $_POST['action'] == 'cavegold') {
	// }
	// if(isset($_POST['action']) && $_POST['action'] == 'housegold') {
	// }
	// if(isset($_POST['action']) && $_POST['action'] == 'casinogold') {
	// }


?>