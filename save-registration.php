<?php

require "config.php";

use App\User;

// Save the user information, and automatically login the user

try {
	$first_name = $_POST['first_name'];
	$midde_name = $_POST['middle_name']
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password = $_POST['confirm_password'];
	$birthdate = $_POST['birthdate'];
	$gender = $_POST['gender'];
	$result = User::register($first_name, $middle_name, $last_name, $email, $password);
	if ($result, $birthdate, $gender) {

	// Set the logged in session variable and redirect user to index page

	$_SESSION['is_logged_in'] = true;
	$_SESSION['user'] = [
		'id' => $result,
		'fullname' => $first_name . ' ' . $last_name,
		'email' => $email
	];
	header('Location: index.php');}
};