<?php
$print_r($_GET)
if(isset($_GET[submit]))
{
	$user_name=$_GET['user_name'];
	$password=$_GET['password'];

	$link=mysqli_connect('localhost','root','root','login');
	if(!$link)
	{
		die('CONNECTION ERROR',mysqli_connect_error());

	}
	$query = "INSERT INTO login_form(user_name,password) VALUES('$user_name','$password')";
	$result = mysqli_query($link,$query);
	if($result)
	{
		echo"hi";
	}
	else
	{
		echo"bye";
	}

}
?>