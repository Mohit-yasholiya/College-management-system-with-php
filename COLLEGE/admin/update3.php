<?php
$name = $_POST['name'];
$branch = $_POST['branch'];
$rolln = $_POST['roll'];
$cit = $_POST['city'];
$num = $_POST['mob'];
$email = $_POST['mail'];
$id=$_POST['sid'];

$con = mysqli_connect('localhost','root',"",'insertdb');

$query = "UPDATE `userdata` SET `name` = '$name', `branch` = '$branch', `roll` = '$rolln', `city` = '$cit', `mob` = '$num', `email` = '$email' WHERE `id` = '$id';";

$run = mysqli_query($con,$query);

if($run == true){
 ?>
<script>
alert("data updated successfully");
window.open('update.php','_self');
</script>
<?php
}
?>