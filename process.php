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