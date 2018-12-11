<?php
function showdetails($branch,$roll)
{
$con = mysqli_connect('localhost','root',"",'insertdb');
$sql="SELECT * FROM `userdata` WHERE `roll`='$roll' AND `branch`='$branch'";
$run = mysqli_query($con,$sql);
if(mysqli_num_rows($run)>0)
{
$data=mysqli_fetch_assoc($run);
?>
<table width=70% border=1 align=center bgcolor=blue>
<tr><th colspan="3">Student details</th></tr>
<tr><td rowspan="6"><img src="img/<?php echo $data['image'];?>" style="max-height : 150px; max width: 120px:"/></td>
<th>Name</th>
<td><?php echo $data['name'];?></td></tr>
<tr>
<th>Branch</th>
<td><?php echo $data['branch'];?></td></tr>
<tr>
<th>Roll no</th>
<td><?php echo $data['roll'];?></td></tr>
<tr>
<th>City</th>
<td><?php echo $data['city'];?></td></tr>
<tr>
<th>Mobile no.</th>
<td><?php echo $data['mob'];?></td></tr>
<tr>
<th>Email</th>
<td><?php echo $data['email'];?></td></tr>
</table>
<?php
}
else
{
	echo "<script>alert('no student found');</script>";
}
}
?>