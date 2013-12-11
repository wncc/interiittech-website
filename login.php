<?php
session_start();
	error_reporting(E_ALL);
	//init_set('display_errors','On');

	if($_SERVER['REQUEST_METHOD']== 'GET')
	{
		Header("Location: ./register.html");
		exit;
	}
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$username = $_POST['username'];
		$pass = $_POST['password'];
		//$con=mysql_connect("localhost","root","");
       $con=mysql_connect("localhost","sushant","wnccsushant");
		mysql_select_db('interiittech',$con);
		$sql="SELECT `name`, `pass` FROM `iit` WHERE name='$username' and pass='$pass'";
		$_SESSION['college'] = $username;
		if (!mysql_query($sql,$con))
		  {
		    die('Error: ' . mysql_error($con));
		  }
		$result = mysql_query($sql);
		while($row = mysql_fetch_array($result))
		{
			Header("Location: ./j.php");
			exit;
		}
		Header("Location: ./register.html");
		mysql_close($con);	
	}
?>