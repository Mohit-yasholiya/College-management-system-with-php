<?php
if(isset($_GET['msg']))
{
echo $_GET['msg'];
}
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></head>
<table width=100% height=100% border="1">
<tr height=5%><td>
<table width=100% height=100% background="n.jpg" >
<tr><td width=20%><b><a href="login.php">Admin login</a></b></td></tr><td align="right"><b>EMAIL-IMSEC@GMAIL.COM</b></td></tr>
</table>
<tr height=40%><td>
<table width=100% height=100% background="n.jpg">
<tr><td width=100% align=center background="4.jpg" style="font-family:comic sans ms;"><big><marquee><h1>IMS ENGINEERING COLLEGE GHAZIABAD</h1></marquee></big></td></tr>
</table></td></tr>
<tr><td background=m.jpg>
<div class="container">
  <h2 align=center>ADMIN LOGIN</h2>
  <form action="checkses.php" method=post align=center border=1>
    <div class="form-group">
      <label for="id">ID:</label>
      <input type="text" class="form-control" id="text" name="uid">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pass">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>