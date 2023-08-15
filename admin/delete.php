 <?php
  include 'dbcon.php';
 $id= $_GET['id'];
 $deletequery = "delete from coronacase where id= $id";
 $query = mysqli_query($con,$deletequery);
 if($query){
	 ?>
	 <script>
	 alert("Deleted successfully");
	 </script>
	 <?php 
 }else{
	 	 ?>
	 <script>
	 alert("Deletion failed");
	 </script>
	 <?php
 }
 
 header('location:adminmainpage.php');
 ?>