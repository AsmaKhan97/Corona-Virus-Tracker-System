<!DOCTYPE html>
<html>
<head>
<title></title>
   <?php include 'link\links.php' ; ?>
   <?php include 'css\style.php' ; ?>
<style>
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.text-center {
    text-align: center!important;
}
.link2 {
    color: rgb(0, 173, 239);
    font-size: 14px;
    font-weight: bold;
    word-break: break-all;
}
.col-12, .col-md-6{
	position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
.mb-5, .my-5 {
    margin-bottom: 3rem!important;
}
h2 {
    font-size: 24px;
    line-height: 38px;
    margin-bottom: 25px;
    font-weight: 700;
}
.certificate-block {
    background-color: #f5f5f5;
    height: 100%;
    width: 100%;
    padding: 20px;
    border-radius: 15px;
}
h1, h3, h4, h5, h6 {
    color: #333232;
    font-family: Roboto, sans-serif;
}
.h2, h2 {
    font-size: 2rem;
	color:#ff7675;
	
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}
h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
.h2 {
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
	color:#ff7675;
}

.p-0 {
    padding: 0!important;
}
.m-0 {
    margin: 0!important;
}
.mb-2 {
	border-radius: 10px;
	
}

.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
*, ::after, ::before {
    box-sizing: border-box;
}

div {
    display: block;
}
body {
    font-family: Poppins, sans-serif;
    font-size: 14px;
}
body {
    background-color: #fff;
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #7c7c7c;
    padding: 0;
    margin: 0;
    overflow-x: hidden;
}


</style>
   
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
	  <li class="nav-item ">
        <a class="nav-link" href="PakistanCoronaLive.php">PakistanCoronaLive</a>
      </li>
	   
      <li class="nav-item active">
        <a class="nav-link" href="vaccine.php">Vaccination</a>
      </li>
	   <li class="nav-item ">
        <a class="nav-link" href="admin/adminlogin.php" data-toggle="tooltip" data-placement="bottom" title="Login as Admin"><i class="fas fa-users-cog"></i></a>
      </li>
    </ul>
    
  </div>
</nav>

<!-------------------------------main section----------------------->
<div class="container">
    <h2 class=" mb-5 mt-5 text-center">Registration/Vaccination Procedure for Eligible Citizens</h2>
    <div class="row m-0 p-0">
        <div class=" card-group col-12 col-md-6   mb-5">
            <div class="card bg-light  card-guidlines mx-sm-1 p-3 mt-2">
                <div class="card  bg-danger  shadow text-info p-3 my-card card-1">
                    <!-- <img class="banner-logo-3" src="images/covid/covid/Registration.png" alt=""> -->
                </div>
                <div class="card-body text-info text-center mt-3">
                    <h3>All 12+ Citizens</h3>

                    <p class="card-p"> Register yourself by sending your CNIC no to 1166 (free sms) from any mobile no
                        or visit
                        <a href="http://nims.nadra.gov.pk/">http://nims.nadra.gov.pk/ </a> and just walk-in to nearest
                        centre for vaccination.
                    </p>

                    <p class="card-p mb-0">Only Pfizer vaccine will be administered to age group 12 to 18 years (Free of
                        Cost for un vaccinated)</p>
                    <p class="card-p mb-0" style="color: #17a2b8">*Note. Ensure that your 1st dose entry is made in NIMS
                        by vaccination centre.</p>
                </div>
                <div class="card-footer bg-danger  card-1 mt-0">
                </div>
            </div>
        </div>
        <div class=" card-group col-12 col-md-6    mb-5">
            <div class="card  bg-light card-guidlines mx-sm-1 p-3 mt-2 ">
                <div class="card  bg-danger shadow text-info p-3 my-card card-5">
                    <!-- <img class="banner-logo" src="images/covid/covid/50+.png" alt=""> -->
                </div>
                <div class="text-info card-body text-center mt-3">
                    <h3>Additional / Booster Dose - Eligibility for Citizens</h3>
                    <h5 style="text-align:left !important">The following categories of individuals are eligible for a single additional Covid-19 vaccine:- </h5>
			<ul class="ml-3">
                        <li><span style="color: #17a2b8">1:</span> Immunocompromised persons of all eligible age
                            groups
                        </li>
                        <li><span style="color: #17a2b8">2:</span> Citizens, 18 years of age and above</li>
                        <li><span style="color: #17a2b8">3:</span> Healthcare workers</li>
                    </ul>
                    <p class="text-center card-p">Should have received the last vaccine more than 6 months ago. Wait for
                        28 days, if recovered from a recent Covid-19 infection.</p>
                    <p class="text-center card-p">Sinopharm, Sinovac, Pfizer or Moderna vaccines can be used as booster.</p>
                </div>
                <div class="card-footer bg-danger  card-5 mt-0">
                </div>
            </div>
        </div>

        <div class="card-group col-12 col-md-6    mb-5">
            <div class="card bg-light card-guidlines mx-sm-1 p-3 mt-2 ">
                <div class="card bg-danger   shadow text-info p-3 my-card card-2">
                    <!-- <img class="banner-logo" src="images/covid/covid/50+.png" alt=""> -->

                </div>
                <div class="text-info card-body text-center mt-3"><h3>2nd Dose</h3>
                    <p class="card-p mb-0">Message to Citizens will be sent automatically 48/24 hours before the due
                        date from 1166. </p>
                    <p class="card-p mb-0 text-danger">*Note. Standard gap between two doses is <strong>28 days</strong>
                        for all types of vaccines.</p>
                       <ul class="ml-3">
                            <li class="text-center" style="color: #17a2b8">Sinopharm and Pfizer : 21 days</li>
                            <li class="text-center" style="color: #17a2b8">CoronaVac-SinoVac : 28 days</li>
                            <li class="text-center" style="color: #17a2b8">AstraZeneca : 84 days</li>
                      </ul> 
                </div>
                <div class="card-footer bg-danger  card-2 mt-0">
                </div>
            </div>
        </div>
        <div class="card-group col-12 col-md-6   mb-5">
            <div class="card bg-light card-guidlines mx-sm-1 p-3 mt-2">
                <div class="card  bg-danger  shadow text-info p-3 my-card card-3">
                    <!-- <img class="banner-logo-3" src="images/covid/covid/Registration.png" alt=""> -->
                </div>
                <div class="card-body text-info text-center mt-3">
                    <h3>Citizens Travelling Abroad – Additional Dose</h3>

                    <p class="text-center card-p"><span class="text-danger">12-18 years</span> will be free of cost
                        with Pfizer if individual is unvaccinated. However, additional dose(s) will be charged.</p>
                    <p class="text-center card-p"><span class="text-danger">All 18+ yrs.</span> Pfizer or Sinopharm
                        or Sinovac (as per country requirement on payment).</p>
                                       <p class="text-left card-p mb-0">Additional dose(s) of vaccine will be administered at individual’s
                                            risk. In case of children below 18 years of age, at parent’s / guardian’s risk.</p>

                </div>
                <div class="card-footer bg-danger  card-3 mt-0">
                </div>
            </div>
        </div>


    </div>

</div>
<div class="container">
    <div class="col-md-12">
        <h2 class="mb-5 text-center ">Immunization Certificate for COVID-19</h2>
    </div>
    <div class="row  ">
        <div class="col-12 col-md-6 col-lg-6  mt-2 mb-4 ">
            <div class="certificate-block">
                <div class="row ">
                    <div class="col-12 col-md-3">
                        <img class=" mb-2" src="image/nadra.jpg "height="150px" width="110px" alt="nadra" >
                    </div>
                    <div class="col-12 col-md-9">
                        <p class="certificate-heading mb-0">Get Certificate from NADRA Centres</p>
                        <p class="desc mt-0 mb-0"> Visit NADRA Centers for issuance of <span class="bold">Immunization Certificates</span>
                            List of <span class="bold">NADRA Centers</span> with addresses and timings is available on
                        </p>
                        <a class="mb-0 link desc mt-0" href="https://www.nadra.gov.pk" target="_blank">www.nadra.gov.pk</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6  mt-2 mb-4">
            <div class="certificate-block">
                <div class="row ">
                    <div class="col-12 col-md-3">
                        <img class=" mb-2" src="image/nims.png" alt="nims" height="150px" width="110px">
                    </div>
                    <div class="col-12 col-md-9">
                        <p class="certificate-heading  mb-0">Get Online Certificate</p>
                        <p class="desc mt-0 mb-0"> To get online <span class="bold">Immunization Certificates</span>
                            visit </p>
                        <a class="mb-0 mt-0 link2" href="https://nims.nadra.gov.pk/nims/certificate" target="_blank">nims.nadra.gov.pk/nims/certificate</a>
                        <p class="mb-0">For guidelines regarding online certificate download </p>
                        <a class="mb-0 mt-1 click" href="sop/NIMS Online Issuance Certificate Guide V1.1.pdf" target="_blank">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6  mt-2 mb-4 ">
            <div class="certificate-block">
                <div class="row ">
                    <div class="col-12 col-md-3">
                        <img class=" mb-2 white-image" src="image/correction.png" alt="" height="150px" width="110px">
                    </div>
                    <div class="col-12 col-md-9">
                        <p class="certificate-heading mb-0">Data Correction Request</p>
                        <p class="desc mt-0 mb-3"> To Request for <span class="bold">Correction </span> in your data
                            provided for <span class="bold"> Covid Vaccine </span> visit the link given below</p>
                        <a class=" link desc  for-break link2 " href="https://nims.nadra.gov.pk/nims/registerComplaint" target="_blank">nims.nadra.gov.pk/nims/registerComplaint</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6  mt-2 mb-4">
            <div class="certificate-block">
                <div class="row ">
                    <div class="col-12 col-md-3">
                        <img class=" mb-2 white-image" src="image/vaccine.png" alt="" height="150px" width="110px">
                    </div>
                    <div class="col-12 col-md-9">
                        <p class="certificate-heading  mb-0">Vaccine Administered Abroad</p>
                        <p class="desc mt-0 mb-0"> If you have received any <span class="bold">vaccine</span> from
                            abroad, upload its record on </p>
                        <a class="mb-0 mt-0 link2" href="https://nims.nadra.gov.pk/nims/verify-citizen" target="_blank">nims.nadra.gov.pk/nims/verify-citizen</a>
                        <p class="mb-0">For issuance of NIMS Certificate of Pakistan. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12  mt-2 mb-4">
            <div class="certificate-block pass-app">
                <div class="row ">
                    <div class="col-12 col-md-2">
                        <img class="mt-1 white-image" src="image/pass.png" alt="" height="170px" width="170px">
                    </div>
                    <div class="col-12 col-md-10">
                        <p class="certificate-heading  mb-0">PAK Covid-19 Vaccination Pass App</p>
                        <p class="desc mt-2 mb-0">Government of Pakistan has launched the Covid-19 Vaccination Pass App to facilitate the people to carry their digital Covid vaccination certificate. The App allows the users to download the Covid vaccination certificate and save it on the phone. The digital certificate is official proof of COVID-19 vaccination should it be needed domestically or internationally. Using the QR Code, the digital certificate can be verified instantaneously. </p>
                      <p class="mb-0"> iOS Link.<a class="mb-0 mt-0 link2" href=" https://play.google.com/store/apps/details?id=pk.gov.nadra.nims.certificate" target="_blank"> https://play.google.com/store/apps/details?id=pk.gov.nadra.nims.certificate</a></p>
                       <p>Android. <a class="mb-0 mt-0 link2" href="https://play.google.com/store/apps/details?id=pk.gov.nadra.nims.certificate" target="_blank">https://play.google.com/store/apps/details?id=pk.gov.nadra.nims.certificate</a></p>
                  </div>
                </div>
            </div>
        </div>
    </div>
	<div class="container">
    <div class="text-center covid_title mb-3">
        <div class="text mt-2">
            <h2>Guideline for Vaccination</h2></div>
    </div>

    <div class="row ">
        <!-- point 1 -->
        <div class="col-12 col-md-6 covid_col d-flex mb-4 align-items-center">
            <div><img src="image/register.png" height="100px" width="100px"></div>
            <div class="text">
                <h5>Registration</h5>
                <p class="desc">
                    SMS your CNIC no to 1166 from any mobile number or visit
                    <a href="https://nims.nadra.gov.pk">https://nims.nadra.gov.pk</a>
                </p>
            </div>
        </div>
        <!-- point 2 -->
        <div class="col-12 col-md-6 covid_col mb-4 d-flex align-items-center">
            <div><img src="image/walkin.png"  height="100px" width="100px"></div>
            <div class="text">
                <h5> Walk-in to Vaccination Centre.</h5>
                <p class="desc">
                    Just walk-in to nearest center for vaccination

                </p>
            </div>
        </div>


        <!-- point 5 -->
        <div class="col-12 col-md-6 covid_col mb-4 d-flex align-items-center">
            <div><img src="image/counter.png"  height="100px" width="100px"></div>
            <div class="text">
                <h5>VERIFICATION COUNTER</h5>
                <p class="desc">
                    Health Staff will verify CNIC &amp; PIN Code and confirm you entry in NIMS
                </p>
            </div>
        </div>
        <!-- point 6 -->
        <div class="col-12 col-md-6 covid_col mb-4 d-flex align-items-center">
            <div><img src="image/vaccounter.png"  height="100px" width="100px"></div>
            <div class="text">
                <h5>VACCINATION COUNTER</h5>
                <p class="desc">
                    You will be vaccinated upon your turn.
                </p>
            </div>
        </div>
        <!-- point 7 -->
        <div class="col-12 col-md-6 covid_col mb-4 d-flex align-items-center">
            <div><img src="image/sms.png"  height="100px" width="100px"></div>
            <div class="text">
                <h5>CONFIRMATION</h5>
                <p class="desc">
                    You can check your vaccination record by sending CNIC no to 1166
                </p>
            </div>
        </div>
        <!-- point 8 -->
        <div class="col-12 col-md-6 covid_col mb-4 d-flex align-items-center">
            <div><img src="image/monitor.png"  height="100px" width="100px"></div>
            <div class="text">
                <h5>MONITORING</h5>
                <p class="desc">
                    After vaccine administration, you will be required to stay for 30 minutes for monitoring
                </p>
            </div>
        </div>
    </div>


         <div class="row">
              <div class="col-lg-12 col-md-12 cd-sm-12 text-center">
                  <div class="m-3 mt-4">
                      <p class="note">* Note : In case vaccine is 2-dose, message will only be sent once 2nd dose is scheduled as per availability of inventory 48/24 hours before the due date.</p>
                 </div>
              </div>
          </div>

</div>
    
</div>










<!-------------------------------------------------------top cursor----->
     <div class="container scrolltop float-right pr-5">
	   <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn" title="Back to top"></i>
	 </div> 

<!-------------------upper footer----->
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