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
          
     <style>
   
   .box
   {
    width:800px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:0;
   }
  </style>
  <?php include 'link\links.php' ; ?>
<link rel="stylesheet" type="text/css" href="style1.css">
      </head>  
      <body>  
	   <nav class="navbar navbar-dark  nav_style">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button><a class="navbar-brand  pl-0" >Dash Board</a>
	
	<ul class="">
	
	<li class="nav-item dropdown  ">
        <a class="nav-link dropdown-toggle"  id="navbarDropdown" title="Admin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <label class="m-1">Admin</label><i class="fas fa-users-cog "></i>
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
	      
<div class="pos-l-b mh-100 pl-0 h-100 col-13">
  <div class="collapse mb-0 pb-5 " id="navbarToggleExternalContent">
    <div class="bg-dark  nav_style p-5"><ul class="navbar-nav nav ml-auto p-5 my-5 text-center text-capitalize">
     
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
        <a class="nav-link" href="manage.php">Manage Admin</a>
      </li>
  
	 
      
    </ul>
     
    </div>
  </div></div>
   
	   
	   </div>
	</div>
  

	<div class="col-lg-9 mt-0 col-md-7 col-12 order-lg-2 order-1">
	<div class="rightside mt-0 w-200 h-100 d-flex justify-content-right align-items-center">
	

 <div class="container mx-0  center-div ">
    
	<div class="container text-center p-5 m-0 main-div">
	<h3 class="text-danger">Analytical View of Corona Virus Tracker Website</h3>
<div class="card-deck mt-5">
  <div class="card">
    
    <div class="card-body bg-light">
      <h5 class="card-title"><?php
                    $con = mysqli_connect('localhost','root','');

                    $db = mysqli_select_db($con,'coronadb');

                    $selectquery = "select * from coronacase";
 
                    $query = mysqli_query($con, $selectquery);
                    $num = mysqli_num_rows($query);
					echo $num;?></h5>
      <p class="card-text"><b>Total Users Contacted</b></p>
     
    </div>
  </div>
  <div class="card">
    
    <div class="card-body bg-light">
      <h5 class="card-title"><?php
                    $con = mysqli_connect('localhost','root','');

                    $db = mysqli_select_db($con,'coronadb');

                    $selectquery = "select * from admintable";
 
                    $query = mysqli_query($con, $selectquery);
                    $num = mysqli_num_rows($query);
					echo $num;?></h5>
      <p class="card-text"><b>Total no. of Admins</b></p>
      
    </div>
  </div>
  <div class="card">
    
    <div class="card-body bg-light">
      <h5 class="card-title"><?php
                    $con = mysqli_connect('localhost','root','');

                    $db = mysqli_select_db($con,'coronadb');

                    $selectquery = "select * from gstat";
 
                    $query = mysqli_query($con, $selectquery);
                    $num = mysqli_num_rows($query);
					echo $num;?></h5>
      <p class="card-text"><b> Total Covid-19 Countries Recorded</b> </p>
      
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
      
 