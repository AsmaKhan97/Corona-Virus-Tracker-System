 <?php 
 session_start();
 if(!isset($_SESSION['user'])){
     header('location:adminlogin.php');
 }
 ?>
  
 <!DOCTYPE html>
 <html>
 <head>
 <title></title>
 <?php include 'link\links.php' ; ?>
<link rel="stylesheet" type="text/css" href="style1.css">
 </head>
 <body>

 <nav class="navbar navbar-dark  nav_style">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	<ul class="">
	
	<li class="nav-item dropdown  ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" title="Admin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <label class="m-1">Admin </label><i class="fas fa-users-cog "></i>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown ">
          
          <a class="dropdown-item bg-danger" href="logout.php">Log Out</a>
        </div>
      </li>
	  </ul>
  </nav>
  <div class="main_header ">
  <div class="row  w-100 h-300">
    <div class="col-lg-3   col-md-3 col-12 order-lg-1 order-2">
	   <div class="leftside  w-300 h-200  ">
	      
<div class="pos-l-b mh-100 pl-0 col-13">
  <div class="collapse mb-0 pb-0 " id="navbarToggleExternalContent">
    <div class="bg-dark  nav_style p-5"><ul class="navbar-nav nav ml-auto pr-5p py-5 my-5 text-center text-capitalize">
     <li class="nav-item">
        <a class="nav-link" href="adminpanel.php">Dash Board</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminmainpage.php">Contact details</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="stat.php">Global Statistics</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="#preventid"></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#contactid"></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#sympid"></a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="#preventid"></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="manage.php">Manage Admin</a>
      </li>
	 
      
    </ul>
     
    </div>
  </div></div>
   
	   
	   </div>
	</div>
  

	<div class="col-lg-9  col-md-7 col-12 order-lg-2 order-1">
	<div class="rightside  w-200 h-100 d-flex justify-content-center align-items-center">
	

 <div class="container mx-0  center-div ">
    
	<div class="container text-center p-5 m-0 main-div">
	
	<!---<a href="display.php">Check details</a>--->
             <div class="table-responsive ">
			 <table class="table text-center">
			    <thead>
				   <tr><th>ID</th>
				      <th>Name</th>
					  <th>Email ID</th>
					  <th>Contact No.</th>
					  <th>Symptoms</th>
					  <th>Description</th>
					  <th>Operation</th>
				   </tr>
				</thead>
				<tbody>
				<?php
                    $con = mysqli_connect('localhost','root','');

                    $db = mysqli_select_db($con,'coronadb');

                    $selectquery = "select * from coronacase";
 
                    $query = mysqli_query($con, $selectquery);
                    $num = mysqli_num_rows($query);
                   
					
                    while($res = mysqli_fetch_array($query)){
	                ?>
					 <tr>
					    <td><?php echo $res['id']; ?></td>
						<td><?php echo $res['username']; ?></td>
						<td><?php echo $res['email']; ?></td>
						<td><?php echo $res['mobile']; ?></td>
						<td><?php echo $res['symp']; ?></td>
						<td><?php echo $res['message']; ?></td>
						
						
						<td><a href="delete.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
					</tr>
                    
					<?php }
                    ?>
				   
				</tbody>
			 </table>
			 </div>
	</div>
	
	   
		
 </div>
	</div>
	
	</div>
  
  </div>

</div>
 
 </body>
 </html>
 <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>