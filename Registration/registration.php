<style>
<?php include 'CSS/registration.css'; ?>
</style>
<?php

	include 'activitydefinitions.php';
	
	session_start();

	$activity = new RegistrationActivity();

	$activity->run();

?>