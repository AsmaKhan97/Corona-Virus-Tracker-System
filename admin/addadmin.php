<?php
 include 'dbcon.php';
if(isset($_POST['submit'])){
	$adminid = $_POST['admin'];
	$password = $_POST['password'];
	
	$insertquery = "insert into admintable(admin,pass) values('$adminid','$password')";
	$query = mysqli_query($con, $insertquery);
	if($con){
	?>
	<script>
	alert("insertion successful");
	</script>
	<?php
} else {
	?>
	<script>
	alert(" insertion failed");
	</script>
	<?php
}
}
header('location:manage.php');
?>