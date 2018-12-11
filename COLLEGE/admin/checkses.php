<?php
$U=$_POST['uid'];
$P=$_POST['pass'];
if($U=='admin'&&$P=='123456789')
{
	session_start();
	$_SESSION['usrid']=$U;
	$_SESSION['psw']=$P;
	
	header("Location:admindash.php");
}
else
{
	header("Location:login.php?msg=userid or password not correct");
}
?>