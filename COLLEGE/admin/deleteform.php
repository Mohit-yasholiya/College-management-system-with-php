<?php
$con = mysqli_connect('localhost','root',"",'insertdb');
$id = $_REQUEST['sid'];

$qry="DELETE FROM `userdata` WHERE `id`='$id'";
$run= mysqli_query($con,$qry);
if($run == true){
 ?>
<script>
alert('data inserted successfully');
window.open('delete.php','_self');
</script>
<?php
}
else
{
  echo("Error: ".mysqli_error($con));
}
?>