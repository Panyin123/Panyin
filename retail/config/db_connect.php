<?php

session_start();

$db = mysqli_connect("localhost","root","","retail");

if (isset($_POST['register'])) {
	$first_name = mysql_real_escape_string($_POST['first_name']);
	$last_name = mysql_real_escape_string($_POST['last_name']);
	$Email = mysql_real_escape_string($_POST['Email']);
	$Email2 = mysql_real_escape_string($_POST['Email2']);
	$password2 = mysql_real_escape_string($_POST['password2']);

	if($password == $password2){
        $password = md5($password);
        $sql = "INSERT into users(first name,last name,Email,password) VALUES('first_name','last_name','$Email',
        '$Email2','$password','$password2')";
        mysqli_query($db,$sql);
        $_session['message'] = "You are now logged in";
        $_session['first_name'] = "$first_name";
        header("location:home.php");
	}else{
        $_session['message'] = "The two passwords do not match";
	}

}

?>