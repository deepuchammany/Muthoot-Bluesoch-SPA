<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Muthoot Blue Soch</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="CSS-only Responsive Layout with Smooth Transitions" />
        <meta name="keywords" content="css3, transitions, animations, css-only, navigation, smooth scrolling, full width, full height, window width, window height" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
		<!-- <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css'> -->
		<!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> --> 
        <link rel="stylesheet" type="text/css" href="css/demo2.css" />
        <link rel="stylesheet" type="text/css" href="css/styleone.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/jquery.simpleTicker.css" />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<style type="text/css">
			.st-container > input {
			    z-index: 0;
			}
		</style>
		<!--[if lte IE 8]>
			 <link rel="stylesheet" type="text/css" href="css/simple.css" />
		<![endif]-->
    </head>
    <body>
<?php
    if ($_POST) {
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$phone=$_POST['phone'];
$state=$_POST['state'];
$city=$_POST['city'];
if($name!=''){
$servername = "localhost";
$username = "root";
$password = "";
$database="bluesoch";
// Create connection
$con = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$query=mysqli_query($con,"INSERT INTO messages (name,email,phone,state,city,subject,message) 
VALUES ('$name','$email','$phone','$state','$city','$subject','$message')");
if ($query) {
  echo '
            <div class="alert alert-success" id="message" style="padding-top: 120px;">
              <strong>Your message has been recorded</strong> We will get back to you shortly...
            </div>';
}
mysqli_close($con);
}
}
?>
    	<div class="svg-wrap">
			<svg width="64" height="64" viewBox="0 0 64 64">
				<path id="arrow-left-1" d="M46.077 55.738c0.858 0.867 0.858 2.266 0 3.133s-2.243 0.867-3.101 0l-25.056-25.302c-0.858-0.867-0.858-2.269 0-3.133l25.056-25.306c0.858-0.867 2.243-0.867 3.101 0s0.858 2.266 0 3.133l-22.848 23.738 22.848 23.738z" />
			</svg>
			<svg width="64" height="64" viewBox="0 0 64 64">
				<path id="arrow-right-1" d="M17.919 55.738c-0.858 0.867-0.858 2.266 0 3.133s2.243 0.867 3.101 0l25.056-25.302c0.858-0.867 0.858-2.269 0-3.133l-25.056-25.306c-0.858-0.867-2.243-0.867-3.101 0s-0.858 2.266 0 3.133l22.848 23.738-22.848 23.738z" />
			</svg>
		</div>


        <div class="container">
		
			<!-- Codrops top bar -->
            <!-- <div class="codrops-top">
                <a href="http://tympanus.net/Tutorials/CSS3ImageAccordion/">
                    <strong>&laquo; Previous Demo: </strong>Image Accordion with CSS3
                </a>
                <span class="right">
                    <a href="http://tympanus.net/codrops/2012/06/12/css-only-responsive-layout-with-smooth-transitions/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div> --><!--/ Codrops top bar -->
			
			<div class="st-container">
				<?php if (isset($_GET['url'])) {
					$url=$_GET['url'];
				}
				?>
				<input type="radio" name="radio-set" id="st-control-1"/>
				<a href="#st-panel-1">HOME</a>
				<input type="radio" name="radio-set" id="st-control-2"/>
				<a href="#st-panel-2">WHY BLUE SOCH</a>
				<input type="radio" name="radio-set" id="st-control-3"/>
				<a href="#st-panel-3">PRODUCTS</a>
				<input type="radio" name="radio-set" id="st-control-4"/>
				<a href="#st-panel-4">CONTACT</a>
				<input type="radio" name="radio-set" id="st-control-5"/>
				<a href="http://<?php if(isset($url)) echo $url; ?>" target="_blank" id="continue">Continue to Website</a>
				<!-- <div class="">
					<div class="navbar-header">
		              <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
		            </div>
		            <div class="navbar-inverse side-collapse in">
		              <nav role="navigation" class="navbar-collapse">
		                <ul class="nav navbar-nav">
		                  <li><a class="menu active nav-link scroll" href="#home">HOME</a></li>
		                  <li><a class="menu nav-link scroll" href="#why">WHY BLUE SOCH</a></li>
		                  <li><a class="menu nav-link scroll" href="#product">PRODUCTS</a></li>
		                  <li><a class="menu nav-link scroll" href="#contact">CONTACT</a></li>
		                </ul>
		              </nav>
		            </div>
		        </div> -->
				<div class="st-scroll">
				
					<!-- Placeholder text from http://hipsteripsum.me/ -->
					
					<!-- <section class="st-panel one color-5" id="st-panel-1">
						<div class="st-deco one" data-icon=""><img src="assets/images/logo.png" class="muthoot-logo"></div>
					        <div class="scroll-more" data-aos="fade-up" data-aos-delay="1000" data-aos-anchor-placement="bottom-bottom">
					          <img src="images/down-arrow.svg" alt="scroll" class="arrow-bounce"/>
					        </div>
					        <div class="mask"></div>
					        <div class="video-caption">
					          <h1 data-aos="fade-up" data-aos-delay="400">Fashion Like Never Before</h1>
					          <p data-aos="fade-up" data-aos-delay="600">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					          <a href="#" class="btn-main" data-aos="fade-up" data-aos-delay="800">Know More</a>
					        </div>
					        <section class="color-5">
								<nav class="nav-slit">
									<a class="prev" href="#" id="button-left">
										<span class="icon-wrap"><svg class="icon" width="22" height="22" viewBox="0 0 64 64"><use xlink:href="#arrow-left-1"></svg></span>
										<div>
											<h3>City Lights</h3>
											<img src="images/5.png" alt="Previous thumb"/>
										</div>
									</a>
									<a class="next" href="#"  id="button-right">
										<span class="icon-wrap"><svg class="icon" width="22" height="22" viewBox="0 0 64 64"><use xlink:href="#arrow-right-1"></svg></span>
										<div>
											<h3>Street Hills</h3>
											<img src="images/6.png" alt="Next thumb"/>
										</div>
									</a> 
									<video poster="video/transparent.png" autoplay loop muted style="background:transparent url('assets/images/poster.jpg') no-repeat center;" id="vid1" class="testvideo">
									          <source src="assets/video/3.mp4" type="video/mp4"> 
									        </video>
									<video poster="video/transparent.png" autoplay loop muted style="background:transparent url('assets/images/poster.jpg') no-repeat center;" id="vid1" class="testvideo">
									          <source src="assets/video/5.mp4" type="video/mp4"> 
									        </video>
									    
								</nav>


							</section>


					</section>-->
	<section class="st-panel one" id="st-panel-1">
		<!-- <div class="st-deco one" data-icon=""><img src="assets/images/logo.png" class="muthoot-logo"></div> -->
				<div class="carousel slide article-slide" id="article-photo-carousel">

<div class="carousel-inner cont-slider">

    <div class="item active">
    	<div class="vid-container">
      
									     <iframe id="vid0" width="100%" class="myiframeclass" height="100%" src="https://www.youtube.com/embed/YfxTSQtnTyo?enablejsapi=1&version=3&playerapiid=ytplayer&autoplay=1&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen allowscriptaccess="always"></iframe>
									      
	    </div>
    </div>
    <!-- <div class="item">
    	<div class="vid-container">
      									<iframe width="100%" height=100% src="https://www.youtube.com/embed/iEzQuthz4wQ?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="-webkit-transform:scale(1.1);-moz-transform-scale(1.1);" id="vid1"></iframe>
									    </div>
    </div> -->
    <div class="item">
    	<div class="vid-container">
      									<iframe id="vid1" width="100%" class="myiframeclass" height="100%"" height="480" src="https://www.youtube.com/embed/snmee85iJdQ?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen allowscriptaccess="always" ></iframe>
									    </div>
    </div>
    <!-- <div class="item">
    	<div class="vid-container">
										<iframe width="100%" height=100% src="https://www.youtube.com/embed/qlZvEfrYTP8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="-webkit-transform:scale(1.1);-moz-transform-scale(1.1);" id="vid3"></iframe>									
									    </div>
    </div> -->
  </div>
  <!-- Wrapper for slides -->
  <!-- <div class="carousel-inner cont-slider">

    <div class="item active">
    	<div class="vid-container">
      <video poster="video/transparent.png" controls autoplay loop style="background:transparent url('assets/images/poster.jpg') no-repeat center;" id="vid0" max-height="100%" class="testvideo">
									          <source src="assets/video/3.mp4" type="video/mp4"> 
									        </video>
	    </div>
    </div>
    <div class="item">
    	<div class="vid-container">
      <video poster="video/transparent.png" controls loop style="background:transparent url('assets/images/poster.jpg') no-repeat center;" id="vid1" class="testvideo">
									          <source src="assets/video/4.mp4" type="video/mp4"> 
									        </video>
									    </div>
    </div>
    <div class="item">
    	<div class="vid-container">
      <video poster="video/transparent.png" controls loop style="background:transparent url('assets/images/poster.jpg') no-repeat center;" id="vid2" class="testvideo">
									          <source src="assets/video/6.mp4" type="video/mp4"> 
									        </video>
									    </div>
    </div>
    <div class="item">
    	<div class="vid-container">
      <video poster="video/transparent.png" controls loop style="background:transparent url('assets/images/poster.jpg') no-repeat center;" id="vid3" class="testvideo">
									          <source src="assets/video/7.mp4" type="video/mp4"> 
									        </video>
									    </div>
    </div>
  </div> -->


  <!-- Indicators -->
  <ol class="carousel-indicators cat">
    <li class="video-link active" data-slide-to="0" data-target="#article-photo-carousel">
      <img alt="" src="img/Thumb01.jpg">
    </li>
    <!-- <li class="video-link" data-slide-to="1" data-target="#article-photo-carousel">
      <img alt="" src="img/Thumb02.jpg">
    </li> -->
    <li class="video-link" data-slide-to="1" data-target="#article-photo-carousel">
      <img alt="" src="img/Thumb03.jpg">
    </li>
    <!-- <li class="video-link" data-slide-to="3" data-target="#article-photo-carousel">
      <img alt="" src="img/Thumb04.jpg">
    </li> -->
  </ol>



 <!-- <a class="left carousel-control" href="#article-photo-carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#article-photo-carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> -->

</div>
</section>

					<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100" src="assets/images/poster.jpg" alt="First slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="assets/images/poster.jpg" alt="Second slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="assets/images/poster.jpg" alt="Third slide">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div> -->


					
					<section class="blue-sec" id="st-panel-2">
						<!-- <div class="st-deco two" data-icon=""><img src="assets/images/logo.png" class="muthoot-logo"></div> -->
						<div class="container bluesoch">
					        <div class="row">
								


								<!-- <div class="ui-newsticker">
								  <ul class="ui-newsticker-list">
								     <li class="ui-newsticker-item">
								      <h2 class="poem-hed">EMPOWERING HUMAN AMBITION</h2>
								    </li> 
								    <li class="ui-newsticker-item">
								      And also. Firmament and Give. Sea replenish gathered give in for whose tree their a said multiply abundantly give years.
								    </li>
								    <li class="ui-newsticker-item">
								      And also. Firmament and Give. Sea replenish gathered give in for whose tree their a said multiply abundantly give years.
								    </li>
								  </ul>
								</div> -->
									<div id="ticker-slide" class="ticker">
									<ul>
									<li><h2 class="poem-hed">BLUE IS BELIEF</h2></li>
									<li><h2 class="poem-hed">ಮಾನವ ಅಮ್ಬಿಶನ್ ಅನ್ನು ನಿವಾರಿಸುವುದು</h2></li>
									<li><h2 class="poem-hed">मानव महत्वाकांक्षा को बढ़ावा देना</h2></li>
									<li><h2 class="poem-hed">മാനവശേഷി വർദ്ധിപ്പിക്കുക</h2></li>
									<li><h2 class="poem-hed">மனிதவள மேம்பாட்டிற்கு உதவுதல்</h2></li>
									<li><h2 class="poem-hed">అత్యవసర మానవ సమ్మేళనం</h2></li>
									<li><h2 class="poem-hed">હ્યુમન ઍમ્બિશનનું સશક્તિકરણ</h2></li>
									<li><h2 class="poem-hed">হিউম্যান অ্যাম্বাসেডর</h2></li>
									</ul>
								</div><!--/#ticker -->

					          <div class="col-md-10 col-md-offset-1">
					          	<div class="row">
						          	<div class="col-md-4 col-md-offset-2">
						          		<p class="blue-poem">
						          			Blue is the color of sky and sea.<br>
											It is all pervasive.<br>
											It is all encompassing.<br>
											The sky does not distinguish between the big and small.<br>
											It opens out opportunities for everybody.<br>
											The sea is the same for everyone.<br>
											it doesn't change depending on who steps into it.<br>
											It is calm and sure of itself and you.<br>
											It will be there no matter what.<br>
											Blue does not ask to be believe in.<br>
										</p>
									</div>
									<div class="col-md-4">
										<p class="blue-poem">
						          			The belief that we can fly higher<br><br>

											The belief that there is so much more to achieve.<br><br>

											The belief that we can truly make a diference<br>
											bring dignity and independence to millions of Indians.<br><br>

											The belief that<br>
											we have just touched the sky and<br>
											there is an ocean of opportunity before us.
										</p>
									</div>
						        </div>
					          </div>
					        </div>
					    </div>
					</section>
					<img src="assets/images/blue.png" class="img-responsive blue-img">
					
					<section id="st-panel-3">
						<!-- <div class="st-deco two" data-icon=""><img src="assets/images/logo.png" class="muthoot-logo"></div> -->
						<div class="container pro-duct">
							<div class="row">
								<div class="row inner-box-1">
						          <div class="col-md-6 bluesoch-left">
						            <h2 class="about-hed-one">Our Blue Soch</span></h2>
						            <p class="about-para-one">Blue Soch enables you to think without boundaries. Blue Soch is an idea of Hope, Dreams & success. It fuels your vision and turns them into a reality. Blue Soch is anyone who dares to dream big. It is a doorway to opportunities without distinguishing between big or small.</p>
						            <a class="btn btn-default btn-style btn-color" href="#">CONTINUE TO WEBSITE</a>
						          </div>
						          <div class="col-md-6">
						            <img src="assets/images/about.jpg" alt="" class="img-responsive image-about">
						          </div>
						        </div>
							</div>
					        <div class="row">
					        	   <div class="col-md-6">
						            <img src="assets/images/about-one.jpg" alt="" class="img-responsive">
						        </div>
					        	<div class="col-md-6 bluesoch-left">
						          	<h2 class="about-hed-two">Addressing your lifecycle needs</span></h2>
						            <p class="about-para-one">Your tomorrow doesn't have to be dectated by your today. Because with determination and hard work, you can move mountains. This is the Blue Soch. Like millions of indians, all of us at Muthoot Pappachan Group also believe in it. This belief helps us empower our customers towards a better tomorrow, with various financial products and services. That's why, Blue is Belief</p>
						            <div class="row">
						            	<div class="col-md-6 col-sm-6 col-xs-6 point-box-1">
							                <p class="muthoot-points"><a class="sub-points" href="http://www.muthootfincorp.com/product-services/gold-loan">Gold Loans</a><br><a class="sub-points" href="http://www.muthootfincorp.com/product-services/sme-loan">Small Business Loans</a><br><a class="sub-points" href="http://www.muthoot.com/pdf/Chit_Agreement_Variola.pdf">Chits</a><br><a class="sub-points" href="http://www.muthootfincorp.com/product-services/home-loans">Home Loans</a><br><a class="sub-points" href="http://muthootcap.com/">Two-wheeler Loans</a><br><a class="sub-points" href="http://www.muthootfincorp.com/product-services/forex">Forex</a></p>
							            </div>
							            <div class="col-md-6 col-sm-6 col-xs-6">
							                <p class="muthoot-points"><a class="sub-points" href="http://www.muthootmicrofin.com/">Micro Finance</a><br><a class="sub-points" href="http://www.muthootfincorp.com/product-services/money-transfer-service">International Money Transfers</a><br><a class="sub-point"s href="http://www.muthootfincorp.com/product-services/travel-services">Travel Services</a><br><a class="sub-points" href="http://www.muthoot.com/ourbusinesses/preciousmetals">Precious Metals</a><br><a class="sub-points" href="#">Life, Health & General Insurance</a></p>
							            </div>
						            </div>
						        </div>
						    </div>
						    <div class="row " id="muthoot-grops">
						    	<h2 class="muthoot-comp">COMPANIES</h2>
						    	<a class="mothoot-grps" href="http://www.muthootfincorp.com/">MUTHOOT FINCORP</a> <a class="mothoot-grps" href="http://muthootcap.com/">MUTHOOT CAPITAL</a> <a class="mothoot-grps" href="http://www.muthoothousing.com/">MUTHOOT HOUSING FINANCE</a> <a class="mothoot-grps" href="http://www.muthootmicrofin.com/">MUTHOOT MICROFIN</a> <a class="mothoot-grps" href="#">MUTHOOT RISK INSURANCE AND BROKING SERVICES</a>
						    </div>
						    <div class="row " id="muthoot-grops-mobile" style="display: none;" align="center">
						    	<h2 class="muthoot-comp">COMPANIES</h2>
						    	<a class="mothoot-grps" href="http://www.muthootfincorp.com/">MUTHOOT FINCORP</a><br><br><a class="mothoot-grps" href="http://muthootcap.com/">MUTHOOT CAPITAL</a><br><br><a class="mothoot-grps" href="http://www.muthoothousing.com/">MUTHOOT HOUSING FINANCE</a><br><br><a class="mothoot-grps" href="http://www.muthootmicrofin.com/">MUTHOOT MICROFIN</a><br><br><a class="mothoot-grps" href="#">MUTHOOT RISK INSURANCE AND BROKING SERVICES</a>
						    </div>
					       <!-- <img src="assets/images/image-one.png" class="img-responsive center-block" class="pro-img"> -->
					    </div>
					</section>
					<img src="assets/images/soch.png" class="img-responsive soch-img">
					<section class="contact-sec" id="st-panel-4">
						<!-- <div class="st-deco two" data-icon=""><img src="assets/images/logo.png" class="muthoot-logo"></div> -->
						<div class="container">
					        <div class="row">
					        	<div class="htc__contact__form__wrap"  data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
						            <h3 class="muthoot-hed">CONTACT US</h3>
						            <div class="cont-text">
						            	<p>We are more than happy to assist with any queries. Please feel free to provide us the following information for a call back</p>
						            </div>
						        </div> 
					        	<div class="col-md-6">
						          	<!-- <div class="contact-form-wrap">
						              	<form id="contact-form" action="#" method="post">
							                <div class="single-contact-form name">
							                  <div class="contact-box name_email">
							                    <input type="text" name="name" placeholder="Your Name*">
							                    <input type="email" name="email" placeholder="Your Email *">
							                  </div>
							                </div>
							                <div class="single-contact-form">
							                  <div class="contact-box subject">
							                    <input type="text" name="subject" placeholder="Subject*">
							                  </div>
							                </div>
							                <div class="single-contact-form">
							                  <div class="contact-box message">
							                    <textarea name="message"  placeholder="Message"></textarea>
							                  </div>
							                </div>
							                <div class="contact-btn">
							                  <button type="submit" class="htc__btn btn--theme">Submit</button>
							                </div>
						              	</form>
						            </div> -->
						            <div class="container-contact100">
										<div class="wrap-contact100">
											<form class="contact100-form validate-form" action="" method="post">
												
												<div class="wrap-input100 validate-input" data-validate="Name is required">
													<input class="input100" id="name" type="text" name="name" placeholder="Name" required="">
													<label class="label-input100" for="name">
														<span class="lnr lnr-user"></span>
													</label>
												</div>

												<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
													<input class="input100" id="email" type="text" name="email" placeholder="Email" required="">
													<label class="label-input100" for="email">
														<span class="lnr lnr-envelope"></span>
													</label>
												</div>

												<div class="wrap-input100 validate-input" data-validate = "Phone is required">
													<input class="input100" id="phone" type="text" name="phone" placeholder="Phone" required="">
													<label class="label-input100" for="phone">
														<span class="lnr lnr-phone-handset"></span>
													</label>
												</div>

												<!-- <div class="wrap-input100 validate-input" data-validate = "State is required">
													<input class="input100" id="phone" type="text" name="State" placeholder="State">
													<label class="label-input100" for="State">
														<span class="lnr lnr-location"></span>
													</label>
												</div> -->
												<!-- <div id="selection">
							                        <select id="listBox" name="state" onchange='selct_district(this.value)' required=""></select>
							                        <select id='secondlist' name="city" required=""></select>
							                      </div>
							                      <div id="dumdiv" align="center" style="display: none; font-size: 10px;color: #dadada;">
							                        <a id="dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;" href="http://www.hscripts.com">&copy;h</a>
							                      </div> -->
							                      <div id="selection">
												<div class="wrap-input100 validate-input" data-validate = "State is required">
											        <select id="listBox" class="input100" type="text" required="" onchange='selct_district(this.value)' name="state" placeholder="State">
											            <option>Your State...</option>
											            <!-- <option value="Kerala">Kerala</option>
											            <option value="Tamilnadu">Tamilnadu</option>
											            <option value="Karnataka">Karnataka</option> -->
											        </select>
											        <label class="label-input100" for="State">
														<span class="lnr lnr-location"></span>
													</label>
											    </div>

												<!-- <div class="wrap-input100 validate-input" data-validate = "City is required">
													<input class="input100" id="phone" type="text" name="city" placeholder="City">
													<label class="label-input100" for="City">
														<span class="lnr lnr-location"></span>
													</label>
												</div> -->

												<div class="wrap-input100 validate-input" data-validate = "City is required">
											        <select id='secondlist' class="input100" id="phone" type="text" name="city" placeholder="City" required="">
											            <option>Select City</option>
											            <!-- <option value="Kochi">Kochi</option>
											            <option value="Chennai">Chennai</option>
											            <option value="Bangalore">Bangalore</option> -->
											        </select>
											        <label class="label-input100" for="State">
														<span class="lnr lnr-location"></span>
													</label>
											    </div>
											</div>
						                      <div id="dumdiv" align="center" style="display: none; font-size: 10px;color: #dadada;">
						                        <a id="dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;" href="http://www.hscripts.com">&copy;h</a>
						                      </div>
												<div class="wrap-input100 validate-input" data-validate = "Message is required">
													<textarea required="" class="input100" name="message" placeholder="Your message..."></textarea>
												</div>

												<div class="container-contact100-form-btn">
													<div class="wrap-contact100-form-btn">
														<div class="contact100-form-bgbtn"></div>
														<button class="contact100-form-btn">
															Submit
														</button>
													</div>
												</div>

												<h4 class="number">You may call us on our toll-free number <a href="tel:1800 102 1616">1800 102 1616</a></h4>

											</form>

										</div>
									</div>
						        </div>
						        <div class="col-md-6">
						        	<img src="assets/images/about.jpg" class="img-responsive center-block about-image-cont">
						        </div>
					        </div>
					    </div>
					</section>
					
					<!-- <section class="st-panel" id="st-panel-5">
						<div class="st-deco" data-icon="Ç"></div>
						<h2>Passion</h2>
						<p>Fixie ad odd future polaroid dreamcatcher, nesciunt carles bicycle rights accusamus mcsweeney's mumblecore nulla irony.</p>
					</section> -->

				</div><!-- // st-scroll -->
				
			</div><!-- // st-container -->
			
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.vticker.js"></script>

    <!-- <script language="Javascript" src="js/jquery.js"></script> -->
    <script type="text/JavaScript" src='js/state.js'></script>
	<script src="js/jquery.simpleTicker.js"></script>
	
	<script>
	$(function(){
	  $.simpleTicker($("#ticker-fade"),{'effectType':'fade'});
	  $.simpleTicker($("#ticker-roll"),{'effectType':'roll'});
	  $.simpleTicker($("#ticker-slide"),{'effectType':'slide'});
	  $.simpleTicker($("#ticker-one-item"),{'effectType':'fade'});
	});
	</script>

	<script type="text/javascript">
		$.simpleTicker($("#demo"),{
		  speed : 1200,
		  delay : 6000,
		  easing : 'swing',
		  effectType : 'slide'
		});
	</script>

    <script>
			// For Demo purposes only
			[].slice.call( document.querySelectorAll('nav > a') ).forEach( function(el) {
				el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			} );
		</script>


		<script>

		$('.cat').css('opacity', '0.1');
		
		$(".cat").hover(

		function(){
	    $(".cat").fadeTo("slow" , 1);
		},
  		function() { // Mouse out
    	$(".cat").fadeTo("slow" , 0.1);
  		}
		);
		// $('.video-link').click(function(){
  //       var no=$(this).attr('data-slide-to');
  //       // alert(no);
  //       // for (var i = 0; i <= 3; i++) {
  //       //   if (i==no) {continue;}
  //       //   $('#vid'+i).stopVideo();
  //       // }
  //       // $('#vid'+no).get(0).play();
  //   });

 $('a.stop-video').click(function(){
	$('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
});

//global stop button click handler
$('.video-link').click(function(){

        var no=$(this).attr('data-slide-to');
    $('.myiframeclass').each(function(i){
    	$(this)[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
    });
});
	</script>
	
	
	</body>
</html>