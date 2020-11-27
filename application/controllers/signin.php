<?php
require 'application/config/connection.php';
require_once 'application/config/functions.php';

session_start();

if (isset($_SESSION['is_logged_in'])) {
	header('Location:pages/dashboard.php');
}

$message = "";

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$data = ['email' => $email, 'password' => $password];

	$query = "SELECT * FROM user WHERE email=:email AND password=:password";
	$result = $function->signin($query, $data);

	if (!empty($result)) {
		$_SESSION['user'] = $result;
    $_SESSION['is_logged_in'] = true;
    header('Location:pages/dashboard.php');

	} else {
		// $message = '
		// <div class="col-md-12 bs-callout bs-callout-danger">
		// <h4>Login Failed</h4>
		// The email or password you’ve entered is incorrect.
		// </div>
		// ';
echo "mali sya";
	}
}
