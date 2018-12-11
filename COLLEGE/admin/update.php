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
<table align="center">
<form action="update.php" method="POST">
<tr><td> Roll no :</td><td><input type="num" name="roll"></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form></table>
<table align="center" width="80%" border="1 style="margin-top:10px;">
<tr bgcolor='red'>
<th>Name</th>
<th>Branch</th>
<th>City</th>
<th>Mob</th>
<th>Email</th>
<th>Image</th>
<th>Edit</th>
</tr>
<?php
if(isset($_POST['submit']))
{
	$roll = $_POST['roll'];
	$con = mysqli_connect('localhost','root',"",'insertdb');
	$sql= "SELECT * FROM `userdata` WHERE `roll`= $roll";
	$run = mysqli_query($con,$sql);
	if(mysqli_num_rows($run)<1)
	{
		echo "<tr><td colspan='7'>No record found </td></tr>";
	}
	else
	{
		$count=0;
		while($data=mysqli_fetch_assoc($run))
		{
			$count++;
			?>
			<tr>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['branch']; ?></td>
            <td><?php echo $data['city']; ?></td>
            <td><?php echo $data['mob']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><img src="../img/<?php echo $data['image']; ?>"style="max-width:100px;"/></td>
			<td><a href="update2.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
            </tr>
			
			<?php
		}
	}
}
?>
</table>
