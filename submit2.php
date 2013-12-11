<?php
	error_reporting(E_ALL);

	require 'facebook-php-sdk/src/facebook.php';
	 session_start();
	// $facebook = new Facebook(array(
 //  		'appId'  => '468911266555371',
 //  		'secret' => '441b4b75c7b6614fb205ef59c4e844b6',
	// ));

	//echo $user;
	if(!isset($_SESSION))
	{
		Header("Location: ./register.html");
		exit;
	}

	if($_SERVER['REQUEST_METHOD']== 'GET')
	{
		Header("Location: ./j.php");
	}
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
			$teamname = $_POST['teamname'];
			$college = $_SESSION['college'];
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
			$email4	 = $_POST['email4'];
			$phone4  = $_POST['phone4'];
		//$con=mysql_connect("localhost","root","");
       $con=mysql_connect("localhost","sushant","wnccsushant");
			 mysql_select_db('interiittech',$con);
			// Check connection

			$sql="INSERT INTO marathon (`institute`, `teamname`, `member1`, `phone1`, `email1`, `member2`, `phone2`, `email2`, `member3`, `phone3`, `email3`,`member4`, `phone4`, `email4`) VALUES ('$college','$teamname','$member1','$phone1','$email1','$member2','$phone2','$email2','$member3','$phone3','$email3','$member4','$phone4','$email4')";

			if (!mysql_query($sql,$con))
			  {
			  die('Error: ' . mysql_error($con));
			  }
			Header("Location: ./j.php");
			mysql_close($con);	}
?>
