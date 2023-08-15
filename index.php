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
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home </a><span class="sr-only">(current)</span>
      </li>
	  
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#tbval">WorldCoronaLive</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="PakistanCoronaLive.php">PakistanCoronaLive</a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link" href="vaccine.php">Vaccination</a>
      </li>
	   <li class="nav-item ">
        <a class="nav-link" href="admin/adminlogin.php" data-toggle="tooltip" data-placement="bottom" title="Login as Admin"><i class="fas fa-users-cog"></i></a>
      </li>
      
    </ul>
    
  </div>
</nav>

<div class="main_header">
  <div class="row w-100 h-100">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
	   <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center ">
	       <img src="image/emoji.png" width="250" height="250">
	   
	   </div>
	</div>
	<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
	<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
	<h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="image/corna.png "></span>na Virus</h1>
	
	</div>
	
	</div>
  
  </div>

</div>

<!--////////////corona update section\\\\\\\\\-->

<section class="corona_update container-fluid">
    <div class="mb-3">
	<h3 class="text-uppercase text-center">Covid-19 Updates</h3>
	<div class="shadow rounded m-5">
	<table class="table  text-center" id="tstat">
	<tr>
	<th>TotalConfirmed Global</th>
	<th>New Confirmed Global</th>
	<th>Total Deaths Global</th>
	<th>New Deaths</th>
	<th class="text-danger">Last Updated</th>
	</tr>
	</table>
	</div>
	<label class="float-right">
       <b> Search:</b>  <input type="text" id="Search" onkeyup="myFunction()" placeholder="Search a country">
    </label>
	</div>
     <div class="table-responsive">
	
	 <table class="table table-striped text-center" id="tbval">
	 <tr>
	     <th>Country</th>
		 <th>Country Code</th>
		 <th>TotalConfirmed</th>
		 
		 <th>TotalDeaths</th>
		 <th>NewConfirmed</th>
		 <th>NewDeaths</th>
		 
	 </tr>
	 </table>
	 </div>
</section>

<!--************** about section ***************-->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mb-5 mt-4">
	   <h1> About COVID-19</h1>
	
	</div>
	<div class="row pt-5">
	    <div class="col-lg-5 cpl-md-6 col-12 ml-5 about_res">
		   <img src="image/aboutc.jpg" class="img-fluid">
	    </div>
		
		<div class="col-lg-6 col-md-6 col-12">
		<h2>What is COVID-19 (Corona-Virus)</h2>
		<p>Coronavirus disease 2019 (COVID-19) is defined as illness caused by a novel coronavirus now called severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2; formerly called 2019-nCoV), which was first identified amid an outbreak of respiratory illness cases in Wuhan City, Hubei Province, China.</p>
		<p>Coronaviruses are a family of viruses that can cause respiratory illness in humans. They are called “corona” because of crown-like spikes on the surface of the virus. Severe acute respiratory syndrome (SARS), Middle East respiratory syndrome (MERS) and the common cold are examples of coronaviruses that cause illness in humans.</p>
		</div>
		
	</div>

</div>


<!-- ************ CORONA SYMPTOMS ******** -->
<div class="container-fluid pt-5 pb-5" id="sympid">
    <div class="section_header text-center mb-5 mt-4">
	   <h1> CoronaVirus Symptoms</h1>
	      <div class="container">
		      <div class="row">
			    <div  class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="image/cough.png" class="img-fluid" width="100" height="100">
				<figcaption> Cough </figcaption>
				</figure>
				</div>
				
				 <div  class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="image/nosy.png" class="img-fluid" width="100" height="100">
				<figcaption> Runny nose </figcaption>
				</figure>
				</div>
				
				 <div  class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="image/fever.png" class="img-fluid" width="100" height="100">
				<figcaption> Fever </figcaption>
				</figure>
				</div>
				
				 <div  class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="image/cold.png" class="img-fluid" width="100" height="100">
				<figcaption> Cold </figcaption>
				</figure>
				</div>
				
				 <div  class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="image/tiredness.png" class="img-fluid" width="100" height="100">
				<figcaption> Tiredness </figcaption>
				</figure>
				</div>
				
				 <div  class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="image/breathing.png" class="img-fluid" width="100" height="100">
				<figcaption> Difficulty breathing(Severe cases) </figcaption>
				</figure>
				</div>
			  
			  
		      </div>
		  </div>
	</div>
</div>

<!-- ************ corona prevention ******** -->
<div class="container-fluid sub_section pt-5 pb-5 " id="preventid">
    <div class="section_header text-center mb-5 mt-4">
	   <h1> 6 Steps Prevention Against Coronavirus</h1>
	   </div>
	   
	   <div class="container" >
	      <div class="row">
	         <div class="col-lg-4 col-md-4 col-12 mt-5">
	            <div class="row">
				  <div class="col-lg-4 col-md-4 col-12">
				    <figure class="text-center">
				       <img src="image/handwash.png" class="img-fluid" width="80" height="80">
				    </figure>
				
				  </div>
				   <div class="col-lg8 col-md-8 col-12">
				 <p>Wash your hands regularly for 20 seconds,with soap and water or alcohol-based hand rub.</p>
				</div>
				</div>
			 </div>
			 
			    <div class="col-lg-4 col-md-4 col-12 mt-5">
	            <div class="row">
				  <div class="col-lg-4 col-md-4 col-12">
				    <figure class="text-center">
				       <img src="image/mask.png" class="img-fluid" width="80" height="80">
				    </figure>
				
				  </div>
				   <div class="col-lg8 col-md-8 col-12">
				 <p>Use mask ,cover your nose and mouth with a dispossible tissue when you cough or sneeze.</p>
				</div>
				</div>
			 
			 </div>
			 
			    <div class="col-lg-4 col-md-4 col-12 mt-5">
	            <div class="row">
				  <div class="col-lg-4 col-md-4 col-12">
				    <figure class="text-center">
				       <img src="image/distanc.png" class="img-fluid" width="80" height="80">
				    </figure>
				
				  </div>
				   <div class="col-lg8 col-md-8 col-12">
				 <p>Avoid close contact (1 meter or 3 feet) with people who are unwell.</p>
				</div>
				</div>
			 
			 </div>
			 
			    <div class="col-lg-4 col-md-4 col-12 mt-5">
	            <div class="row">
				  <div class="col-lg-4 col-md-4 col-12">
				    <figure class="text-center">
				       <img src="image/stay.png" class="img-fluid" width="80" height="80">
				    </figure>
				
				  </div>
				   <div class="col-lg8 col-md-8 col-12">
				 <p>Stay home and self-isolate from others in the house if you feel unwell.</p>
				</div>
				</div>
			 
			 </div>
			 
			    <div class="col-lg-4 col-md-4 col-12 mt-5">
	            <div class="row">
				  <div class="col-lg-4 col-md-4 col-12">
				    <figure class="text-center">
				       <img src="image/news.png" class="img-fluid" width="80" height="80">
				    </figure>
				
				  </div>
				   <div class="col-lg8 col-md-8 col-12">
				 <p>Stay informed by watching news & follow the recommended practices.</p>
				</div>
				</div>
			 
			 </div>
			 
			    <div class="col-lg-4 col-md-4 col-12 mt-5">
	            <div class="row">
				  <div class="col-lg-4 col-md-4 col-12">
				    <figure class="text-center">
				       <img src="image/medical.png" class="img-fluid" width="80" height="80">
				    </figure>
				
				  </div>
				   <div class="col-lg8 col-md-8 col-12">
				 <p>If you have fever,cough and difficulty breathing seek medical care immedietly.</p>
				</div>
				</div>
			 
			 </div>
	      </div>
	   </div>
</div>	

<!-- ************ contact us ******** -->
<div class="container-fluid pt-5 pb-5 " id="contactid">
    <div class="section_header text-center mb-5 mt-4">
	   <h1> Contact Us ASAP</h1>
	   </div>
	   <div class=""container">
	      <div class="row">
	         <div class="col-lg-8 offset-lg-2 col-12"> 
 <form action="" method="POST">
  <div class="form-group">
    <label >User Name</label>
    <input type="text" class="form-control" name="username" placeholder="Name" autocomplete="off">
  </div>
  
    <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" name="email" placeholder="Example@example.com" autocomplete="off" required>
  </div>
  
  <div class="form-group">
    <label >Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="034---------" autocomplete="off" required>
  </div>
  
  
   
  <div class="form-group">
                <label>Select Symptoms</label><br>
				<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
				<label class="custom-control-label" for="customcheckbox1">Cold</label>
				</div>
				
				<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
				<label class="custom-control-label" for="customcheckbox2">fever</label>
				</div>
				
				<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
				<label class="custom-control-label" for="customcheckbox3">Difficulty In Breath</label>
				</div>
				
				<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="weak">
				<label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>
				</div>
				
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Tell us how do you feel</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="msg"rows="3"></textarea>
  </div>
  
       <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  
</form>
	   </div>
	   </div>
	   </div>
</div>	
<!--////////////////////top cursor////////////////-->
 
     <div class="container scrolltop float-right pr-5">
	   <i class="fa fa-arrow-up"  title="Back to top" onclick="topFunction()" id="myBtn"></i>
	 </div> 
<!--/////////upper footer////////-->
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
<footer >
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



function fetch(){
	$.get("https://api.covid19api.com/summary",
	function(data){
		//console.log(data['Countries'].length);
		var tstat = document.getElementById('tstat');
		for(var j=1;j<2;j++){
			var y = tstat.insertRow();
			
			y.insertCell(0);
			tstat.rows[j].cells[0].innerHTML = data['Global']['TotalConfirmed'];
			
			y.insertCell(1);
			tstat.rows[j].cells[1].innerHTML = data['Global']['NewConfirmed'];
			
			y.insertCell(2);
			tstat.rows[j].cells[2].innerHTML = data['Global']['TotalDeaths'];
			
			y.insertCell(3);
			tstat.rows[j].cells[3].innerHTML = data['Global']['NewDeaths'];
			
			y.insertCell(4);
			tstat.rows[j].cells[4].innerHTML = data['Global']['Date'];
		}
		
		var tbval = document.getElementById('tbval');
		for(var i=1;i<(data['Countries'].length+1);i++){
			var x = tbval.insertRow();
			
			x.insertCell(0);
			tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
			tbval.rows[i].cells[0].style.background = '#a29bfe';
			tbval.rows[i].cells[0].style.color = '#fff';
			
			x.insertCell(1);
			tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['CountryCode'];
			
			
			x.insertCell(2);
			tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
			
			
			x.insertCell(3);
			tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
			
			
			x.insertCell(4);
			tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
			
			
			x.insertCell(5);
			tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewDeaths'];
			
			
			
			
		}
	}
	
	);
}
 function myFunction() {
var input, filter, table, tr, td, i ;
input = document.getElementById("Search");
filter = input.value.toUpperCase();
table = document.getElementById("tbval");
tr = table.getElementsByTagName("tr"),
th = table.getElementsByTagName("th");

// Loop through all table rows, and hide those who don't match the        search query
for (i = 1; i < tr.length; i++) {
            tr[i].style.display = "none";
            for(var j=0; j<th.length; j++){
        td = tr[i].getElementsByTagName("td")[j];      
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter.toUpperCase()) > -1)                               {
                tr[i].style.display = "";
                break;
            }
        }
    }
}
 }





</script>
</body>
</html>

<?php
 include 'dbcon.php';
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$symp = $_POST['coronasym'];
	$msg = $_POST['msg'];
	
	$chk = "";
	foreach($symp as $chk1){
		$chk.= $chk1.",";
		
	}
	$insertquery = "insert into coronacase(username, email, mobile, symp, message) values('$username','$email','$mobile','$chk','$msg')";
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
?>