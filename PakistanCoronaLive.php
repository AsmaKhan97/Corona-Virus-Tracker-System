<!DOCTYPE html>
<html>
<head>
<title></title>
   <?php include 'link\links.php' ; ?>
   <?php include 'css\style.php' ; ?>
</head>
<body onload="fetch()">
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary nav_style p-3 col-12!important">
  <a class="navbar-brand pl-5" href="#">CoronaVirus Tracker</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home </a><span class="sr-only">(current)</span>
      </li>
	  
      <li class="nav-item">
        <a class="nav-link" href="index.php#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#sympid">symptoms</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="index.php#preventid">Prevention</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="index.php#contactid">Contact</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="index.php#tbval">WorldCoronaLive</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="PakistanCoronaLive.php">PakistanCoronaLive</a>
<li class="nav-item ">
        <a class="nav-link" href="vaccine.php">Vaccination</a>
      </li>	  
	  
       <li class="nav-item ">
        <a class="nav-link" href="admin/adminlogin.php" data-toggle="tooltip" data-placement="bottom" title="Login as Admin"><i class="fas fa-users-cog"></i></a>
      </li>
    </ul>
    
  </div>
</nav>

<div class="container-fluid mb-0"   style="padding: 0; margin: 0;  width: 100%; height:3600px; overflow: hidden;" >
<iframe class="responsive-iframe " src="https://covid.gov.pk/stats/pakistan"  style="position: relative; left: -70px; top: -240px" frameborder="no" height="3800px" width="1500px">
</iframe>
</div>









     <div class="container scrolltop float-right pr-5">
	   <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn" title="Back to top"></i>
	 </div> 
<!--------------upper footer-------->
<footer class="footer ">
  	 <div class="container ">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>About Us</h4>
  	 			<p>It acts as a portal for the public to keep track of the latest news development about the COVID-19, alongside collecting data for further analysis. All the contents are handpicked and filtered to ensure that sources are reliable with minimal hoaxes, in the best benefit of the public.
				</p>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Navigate</h4>
  	 			<ul>
  	 				<li><a href="index.php">Home</a></li>
  	 				<li><a href="vaccine.php">Vaccination</a></li>
  	 				<li><a href="#aboutid">About Covid-19</a></li>
  	 				<li><a href="#sympid">Symptoms</a></li>
  	 				<li><a href="#preventid">Prevention</a></li>
					<li><a href="#tbval">World stats</a></li>
					<li><a href="PakistanCoronaLive.php">Pakistan stats</a></li>
					<li><a href="#contactid">Contact Us</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Useful Links</h4>
  	 			<ul>
  	 				<li><a href="https://nims.nadra.gov.pk/nims/">NIMS</a></li>
  	 				<li><a href="https://www.nadra.gov.pk/">Nadra</a></li>
  	 				<li><a href="index.php#aboutid">COVID_19</a></li>
					<li><a href="https://ncoc.gov.pk/">NCOC</a></li>
  	 				
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>


<!--/////////footer////////-->
<footer class="">
     <div class="footer_style text-white text-center container-fluid">
	 <p>Copyright</p>
	 </div>
</footer>

<script type="text/javascript"> 

mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};
function scrollFunction(){
	if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
		mybutton.style.display ="block";
		
	} else {
		mybutton.style.display =" none";
	}
}
function topFunction(){
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0 ;
}






</script>
</body>
</html>