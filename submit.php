<?php
	error_reporting(E_ALL);
	init_set('display_errors','On');

	require 'facebook-php-sdk/src/facebook.php';

	$facebook = new Facebook(array(
  		'appId'  => '468911266555371',
  		'secret' => '441b4b75c7b6614fb205ef59c4e844b6',
	));

	$user = $facebook->getUser();
	echo $user;
	if(!$user)
	{
		Header("Location: ./register.html");
		exit;
	}

	if($_SERVER['REQUEST_METHOD']== 'GET')
	{
		Header("Location: ./register.html");
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if($_POST['submit'] == 1)
		{
			//submitted data:
			$teamname = $_POST['teamname'];
			$college = $_POST['college'];
			$member1 = $_POST['member1'];
			$email1	 = $_POST['email1'];
			$phone1  = $_POST['phone1'];
			$member2 = $_POST['member2'];
			$email2 = $_POST['email2'];
			$phone2  = $_POST['phone2'];
			$member3 = $_POST['member3'];
			$email3	 = $_POST['email3'];
			$phone3  = $_POST['phone3'];
			$member4 = $_POST['member4'];
			$email4 = $_POST['email4'];
			$phone4  = $_POST['phone4'];
		}
	}

