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
	      
<div class="pos-l-b mh-100 pl-0 h-100 col-13">
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
        <a class="nav-link" href="manage.php">Manage Admin</a>
      </li>
  
	 
      
    </ul>
     
    </div>
  </div></div>
   
	   
	   </div>
	</div>
  

	<div class="col-lg-9  col-md-7 col-12 order-lg-2 order-1">
	<div class="rightside  w-200 h-100 d-flex justify-content-right align-items-center">
	

 <div class="container mx-0  center-div ">
    
	<div class="container text-center p-5 m-0 main-div">
       
         
          <?php
          $connect = mysqli_connect("localhost", "root", "", "coronadb"); //Connect PHP to MySQL Database
          $query = '';
          $table_data = '';
          $filename = "https://api.covid19api.com/summary";
          $data = file_get_contents($filename); //Read the JSON file in PHP
          $array = json_decode($data, true); //Convert JSON String into PHP Array
          foreach($array['Countries'] as $row) //Extract the Array Values by using Foreach Loop
          {
          $table_data .= '
            <tr>
       <td>'.$row["Country"].'</td>
       <td>'.$row["CountryCode"].'</td>
       <td>'.$row["TotalConfirmed"].'</td>
	   <td>'.$row["TotalDeaths"].'</td>
	   <td>'.$row["NewConfirmed"].'</td>
	   <td>'.$row["NewDeaths"].'</td>
      </tr>
           '; //Data for display on Web page
          }
         
     echo '<h3 class="text-danger">Covid-19 Global info</h3><a href="save.php" class="btn inline m-1 btn-primary">Save Data</a><br />';
     echo '
      <table class="table text-center">
        <tr>
         <th width="45%">Country</th>
         <th width="10%">Code</th>
         <th width="45%">TotalConfirmed</th>
		 <th width="10%">TotalDeaths</th>
		 <th width="10%">NewConfirmed</th>
		 <th width="10%">NewDeaths</th>
        </tr>
     ';
     echo $table_data;  
     echo '</table>';
          




          ?>
     <br />
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
      
 