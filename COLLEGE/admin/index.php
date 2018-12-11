<table width=100% height=100% border="1">
<tr height=5%><td>
<table width=100% height=100% background="images1.jpg" >
<tr><td width=20%><b><a href="login.php">Admin login</a></b></td></tr><td align="right"><b>EMAIL-IMSEC@GMAIL.COM</b></td></tr>
</table>
<tr height=20%><td>
<table width=100% height=97% background="n.jpg">
<tr><td width=100% align=center background="n.jpg" style="font-family:comic sans ms;"><big><h1><marquee>IMS ENGINEERING COLLEGE GHAZIABAD</marquee></h1></big></td></tr>
</table></td></tr>
<tr height=10%><td>
<table width=100% height=100% bgcolor=yellow>
<tr><td><b><a href=#>HOME</a></b></td><td><b><a href=#>ABOUT US</a></b></td><td><b><a href=#>COURSE</a></b></td><td align=center><b><a href=#>GALLERY</a></b></td><td align=center style="font-family:comic sans ms;"><b><marquee>WELCOME</marquee></b></td><td align=left><b><a href=#>EVENTS</a></b></td><td align=right><b><a href=login.php>ADMIN LOGIN</a></b></td><td align=right><a href=student_login.php><b>STUDENT LOGIN</b></a></td>
</table>
<tr height=50%><td>
<table width=100% height=100% bgcolor=yellow border=1>
<tr><td width=10% bgcolor=yellow>
<table width=100% height=100% border="1">
<tr><td align=center><b><a href=#>B.TECH</a></b></td></tr>
<tr><td align=center><b><a href=#>MTECH</A></b></td></tr>
<tr><td align=center><b><A HREF=#>MCA</A></b></td></tr>
<tr><td align=center><b><A HREF=#>BCA</a></b></td></tr>
<tr><td align=center><b><A HREF=#>BBA</a></b></td></tr>
<tr><td align=center><b><A HREF=#>MBA</A></b></td></tr>
</table>
<td width=90% background=images1.jpg align=center ><img src=2.jpg width=100% HEIGHT=90% ><B>DIRECTOR MESSAGE.....</b><BR><b>......................................</B><br><b>................</B><br></td></tr>
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