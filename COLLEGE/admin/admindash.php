<?php
session_start();
if(isset($_SESSION['usrid']))
{
	echo "";
}
else
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
<table width=30% height=30%>
<tr><td>1-</td><td><a href="adstudent.php">Insert Student  Details</a></td></tr>
<tr><td>2-</td><td><a href="update.php">Update Student  Details</a></td></tr>
<tr><td>3-</td><td><a href="delete.php">Delete Student  Details</a></td></tr>
</table>
</BODY>
</HTML>