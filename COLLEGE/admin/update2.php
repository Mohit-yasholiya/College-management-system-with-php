<?php
session_start();
if($_SESSION['usrid']==""&&$_SESSION['psw']=="")
{
	header('location:login.php');
}
?>
<?php
$con = mysqli_connect('localhost','root',"",'insertdb');
$sid = $_GET['sid'];
$sql="SELECT * FROM `userdata` WHERE `id`='$sid'";
$run = mysqli_query($con,$sql);
$data = mysqli_fetch_assoc($run);


?>
<html>
<body>
<table width=100% height=20% bgcolor=pink>
<tr width=100% height=90><td ALIGN=CENTER><H1><B>STUDENT MANAGMENT SYSTEM</B></h1></td></tr>
<TR WIDTH=100% HEIGHT=10%><td align=center>ADMIN PANEL</td><TD ALIGN=RIGHT><A href=logout.php>logout</A></TD></TR>
</table>
<form action="update3.php".php" method="POST" enctype="multipart/form-data">
<table align="center" bgcolor=blue border=1>
<tr><td> Name :</td><td><input type="text" name="name" value=<?php echo $data['name'];?>></td></tr>
<tr><td> Branch :</td><td><input type="text" name="branch" value=<?php echo $data['branch']; ?>></td></tr>
<tr><td> Roll no :</td><td><input type="num" name="roll" value=<?php echo $data['roll']; ?>></td></tr>
<tr><td> City :</td><td><input type="text" name="city" value=<?php echo $data['city']; ?>></td></tr>
<tr><td> Mob no :</td><td><input type="num" name="mob" value=<?php echo $data['mob']; ?>></td></tr>
<tr><td> Email :</td><td><input type="email" name="mail" value=<?php echo $data['email']; ?>></td></tr>
<tr><td> Image :</td><td><input type="file" name="simg"></td></tr>
<input type="hidden" name="sid" value="<?php echo $data['id'];?>"
<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</table>
</form>
</body>