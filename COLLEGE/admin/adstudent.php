<?php
session_start();
if($_SESSION['usrid']==""&&$_SESSION['psw']=="")
{
	header('location:login.php');
}
?>
<html>
<body>
<table width=100% height=20% bgcolor=pink>
<tr width=100% height=90><td ALIGN=CENTER><H1><B>STUDENT MANAGMENT SYSTEM</B></h1></td></tr>
<TR WIDTH=100% HEIGHT=10%><td align=center>ADMIN PANEL</td><TD ALIGN=RIGHT><A href=logout.php>logout</A></TD></TR>
</table>
<form action="adstudent.php" method="POST" enctype="multipart/form-data">
<table align="center" bgcolor=blue border=1>
<tr><td>INSERT DATA</td></tr>
<tr><td> Name :</td><td><input type="text" name="name"></td></td></tr>
<tr><td> Branch :</td><td><input type="text" name="branch"></td></tr>
<tr><td> Roll no :</td><td><input type="num" name="roll"></td></tr>
<tr><td> City :</td><td><input type="text" name="city"></td></tr>
<tr><td> Mob no :</td><td><input type="num" name="mob"></td></tr>
<tr><td> Email :</td><td><input type="email" name="mail"></td></tr>
<tr><td> Image :</td><td><input type="file" name="simg"></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	
$name = $_POST['name'];
$branch = $_POST['branch'];
$rolln = $_POST['roll'];
$cit = $_POST['city'];
$num = $_POST['mob'];
$email = $_POST['mail'];
$imagename = $_FILES['simg']['name'];
$tempname = $_FILES['simg']['tmp_name'];

move_uploaded_file($tempname,"../img/$imagename");

$con = mysqli_connect('localhost','root',"",'insertdb');

$query = "INSERT INTO `userdata`(`name`, `branch`, `roll`, `city`, `mob`, `email`, `image`) VALUES ('$name','$branch','$rolln','$cit','$num','$email','$imagename')";

$run = mysqli_query($con,$query);

if($run == true){
 ?>
<script>
alert("data inserted successfully");
</script>
<?php
}else
{
  echo("Error: ".mysqli_error($con));
}
}
?>