<?php

	/*
	Check for the page that has beedn requested, or designate 'home' if
	no page has been specified.
	*/
	if(isset($_POST['action'])) {
		$action = $_POST['action'];
	}
	else if(isset($_GET['action'])) {
		$action = $_GET['action'];
	}
	else {
		$action = 'home';
	}

	if($action == 'home') {
		include('view/home.php');
	}
	else if($action == 'about') {
		include('view/about.php');
	}
	else if($action == 'faq') {
		include('view/faq.php');	
	}
	else if($action == 'store') {
		include('view/store.php');
	}
	else if($action == 'contact') {
		include('view/contact.php');	
	}

?>
