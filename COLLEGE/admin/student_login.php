<html><body>
<table width=100% height=100% >
<tr height=5%><td>
<table width=100% height=100% background="n.jpg" >
<tr><td width=20%><b><a href="login.php">Admin login</a></b></td></tr><td align="right"><b>EMAIL-IMSEC@GMAIL.COM</b></td></tr>
</table>
<tr height=40%><td>
<table width=100% height=100% background="imgg.jpg">
<tr><td width=100% align=center background="4.jpg" style="font-family:comic sans ms;"><big><marquee><h1>IMS ENGINEERING COLLEGE GHAZIABAD</h1></marquee></big></td></tr>
</table></td>
<tr><td>
<form method="POST" action="student_login.php">
<table border=1 align=center WIDTH=30% HEIGHT=30%>
<tr><td colspan="2" align="center">Student Portal</td></tr>
<tr><td align="left">Choose Branch</td>
<td>
<select name="Branch">
<option value="CSE">CSE</option>
<option value="IT">IT</option>
<option value="ME">ME</option>
<option value="CE">CE</option>
<option value="EE">EE</option>
<option value="EC">EC</option>
</select>
</td> 
</tr>
<tr><td>Enter roll</td>
<td><input type="text" name="rollno" required></td>

</tr>
<tr><td colspan="2"><input type="submit" name="submit" value="show info"</td></tr></table>
</form></td></tr></body></html>
<?php
if(isset($_POST['submit']))
{
    $branch= $_POST['Branch'];
	$roll= $_POST['rollno'];
	$con = mysqli_connect('localhost','root',"",'insertdb');
	include('function.php');
	showdetails($branch,$roll);
	
}



?>