<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muthoot official</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

  </head>
  <body>
    <!-- header section -->
    <!-- <section id="home" class=" header">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6"><img src="assets/images/logo.png" class="img-responsive"></div>
          <div class="col-md-6 col-sm-6 col-xs-6">
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
          </div>
        </div>
      </div>
    </section> -->
    <!-- header section end -->

    <section>
      <div class="video-container">
        <!-- <div class="scroll-more" data-aos="fade-up" data-aos-delay="1000" data-aos-anchor-placement="bottom-bottom">
          <a href="#"><img src="assets/images/down-arrow.svg" alt="scroll" class="arrow-bounce"/></a>
        </div> -->
        <div class="mask"></div>
        <div class="video-caption">
          <!-- <h1 data-aos="fade-up" data-aos-delay="400">Fashion Like Never Before</h1>
          <p data-aos="fade-up" data-aos-delay="600">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
          <?php
          if (isset($_GET['url']) ) {
            $url=$_GET['url'];
          }
          
          ?>
          <a id="mybutton" href="bluesoch.php?url=<?php if(isset($url)) echo $url; ?>" class="btn-main" data-aos="fade-up" data-aos-delay="800">Click to Proceed</a>
          <a id="mybutton1" href="#" class="btn-main" data-aos="fade-up" data-aos-delay="800">Skip to Website</a>
        </div>
        <video poster="video/transparent.png" autoplay loop muted style="background:transparent url('assets/images/.jpg') no-repeat center;">
          <source src="assets/video/muthoot4.mp4" type="video/mp4"> 
        </video>
      </div>
    </section>

    <!-- section video slider -->
    <!-- <section>
      
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

                    <div class="carousel-inner">
            <div class="item active">
              <video poster="video/transparent.png" autoplay loop muted width="100%">
                <source src="assets/video/5.mp4" type="video/mp4"> 
              </video>
            </div>

            <div class="item">
              <video poster="video/transparent.png" autoplay loop muted width="100%">
                <source src="assets/video/5.mp4" type="video/mp4"> 
              </video>
            </div>
          
            <div class="item">
              <video poster="video/transparent.png" autoplay loop muted width="100%">
                <source src="assets/video/5.mp4" type="video/mp4"> 
              </video>
            </div>
          </div>

         
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      
    </section>  -->
    <!-- section video slider end -->

    <!-- banner section -->
    <!-- <section class="banner">
      <div class="container bluesoch-cont">
        <div class="inner-box">
          <h1 class="bluesoch">BLUE SOCH.</h1>
          <p class="bluesoch-para">
            Blue is the colour of Sea & Sky, all pervasive & encompassing. Blue Soch is an idea of Hope, It fuels your vision and turns them into a reality. Blue Soch is anyone who dares to dream big. It is a doorway to opportunities without distinguishing between big or small. Dreams & success. Blue Soch enables you to think without boundaries.
          </p>
        </div>
      </div>
    </section> -->
    <!-- banner section end -->

    <!-- about section -->
    <!-- <section id="why" class="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="about-col">
              <img src="assets/images/about.jpg" alt="" class="about-image img-responsive">
                <div class="about-content">
                  <h2 class="about-hed">THE PHILOSOPHY</span></h2>
                  <h2 class="about-hed">WHY BLUE SOCH?</span></h2>
                  <div class="title-bdr"></div>
                     <p class="about-para">The self-belief shown by our customers has been ingrained in our new philosophy - Blue is Belief. It comes from the observation that the colour blue does not discriminate. The blue sky and the blue ocean encourage everyone to soar high or discover endless opportunities.</p>
                  </div>
                  <div class="title-bdr"></div>
                     <p class="about-para">Blue Soch enables you to think without boundaries. Blue Soch is an idea of Hope, Dreams & success. It fuels your vision and turns them into a reality. Blue Soch is anyone who dares to dream big. It is a doorway to opportunities without distinguishing between big or small.</p>
                    <a class="btn btn-default btn-style btn-color" href="#">CONTINUE TO WEBSITE</a>
                  </div>
              </div>
            </div>
            <div class="col-lg-5">
              
            </div>
        </div>
      </div>
    </section> -->
    <!-- about section end -->

    <!-- about section mobile -->
    <!-- <section id="why" class="mobile-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="assets/images/about.jpg" alt="" class="img-responsive">
          </div>
          <div class="col-md-6 text-mobile">
            <h2 class="about-hed-mobile">WHY BLUE SOCH?</span></h2>
            <p class="about-para-mobile">Blue Soch enables you to think without boundaries. Blue Soch is an idea of Hope, Dreams & success. It fuels your vision and turns them into a reality. Blue Soch is anyone who dares to dream big. It is a doorway to opportunities without distinguishing between big or small.</p>
            <a class="btn btn-default btn-style btn-color" href="#">CONTINUE TO WEBSITE</a>
          </div>
        </div>
      </div>
    </section> -->
    <!-- about section mobile end -->

    <!-- why bluesoch section -->
    <!-- <section id="product" class="why-sec">
      <div class="container">
        <div class="col-md-6">
          <div class="why-blue">
            <h2 class="why-hed">PRODUCTS</h2>
            <p class="why-para">Your tomorrow doesn't have to be dectated by your today. Because with determination and hard work, you can move mountains. This is the Blue Soch. Like millions of indians, all of us at Muthoot Pappachan Group also believe in it. This belief helps us empower our customers towards a better tomorrow, with various financial products and services. That's why, Blue is Belief</p>
            <div class="muthoot-products">
              <p><a class="blue-text" href="www.muthootfincorp.com">Muthoot Fincorp</a> | <a class="blue-text" href="http://muthootcap.com/">Muthoot Capital</a> | <a class="footer-text" href="http://www.muthoothousing.com/">Muthoot Housing Ltd</a></p>
              <p><a class="blue-text" href="www.muthootmicrofin.com">Muthoot Microfin</a> | <a class="blue-text" href="www.muthoot.com">Muthoot Corporate</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <img src="assets/images/why.png" class="img-responsive center-block why-img">
        </div>
      </div>
    </section> -->
    <!-- why bluesoch section end -->
    <!-- <img src="assets/images/soch.png" class="soch-back"> -->

    <!-- video section -->
    <!-- <section class="video-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row video-row">
              <div class="col-md-6 col-sm-6  video-box-left">
                <div class="video-box">
                  <video width="250" controls class="center-block" poster="assets/images/poster.jpg">
                    <source src="assets/video/9.mp4" type="video/mp4">
                  </video>
                  <h3 class="video-name">Lorem ipsum dolor sit amet</h3>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 video-box-right">
                <div class="video-box">
                  <video width="250" controls class="center-block" poster="assets/images/poster.jpg">
                    <source src="assets/video/9.mp4" type="video/mp4">
                  </video>
                  <h3 class="video-name">Lorem ipsum dolor sit amet</h3>
                </div>
              </div>
            </div>
            <div class="row video-row">
              <div class="col-md-6 col-sm-6 video-box-left">
                <div class="video-box">
                  <video width="250" controls class="center-block" poster="assets/images/poster.jpg">
                    <source src="assets/video/9.mp4" type="video/mp4">
                  </video>
                  <h3 class="video-name">Lorem ipsum dolor sit amet</h3>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 video-box-right">
                <div class="video-box">
                  <video width="250" controls class="center-block" poster="assets/images/poster.jpg">
                    <source src="assets/video/9.mp4" type="video/mp4">
                  </video>
                  <h3 class="video-name">Lorem ipsum dolor sit amet</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="video-inn">
              <h2 class="video-hed">VIDEO</h2>
              <p class="video-para">Blue Soch believes that the customer is the hero, with Muthoot Pappachan Group providing an impetus for their drive and determination to succeed.</p>
              
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- video section -->
   <!--  <img src="assets/images/blue.png" class="blue-back"> -->
    <!-- muthoot logos section -->
    <!-- <section class="muthoot-logos">
      <div class="container">
        <div class="row">
          <h3 class="muthoot-hed">OUR PRODUCTS</h3>
          <div class="col-md-3 muthoot-group-logo">
            <div class="muthoot-groups-color">
              <img src="assets/images/products/logo-muthoot-fincorp.png" class="img-responsive center-block">
              <h4 class="product-name">Muthoot Fincorp</h4>
              <a class="to-site" href="www.muthootfincorp.com">VISIT</a>
            </div>
          </div>
          <div class="col-md-3 muthoot-group-logo">
            <div class="muthoot-groups-color">
              <img src="assets/images/products/muthoot-real-estate.png" class="img-responsive center-block">
              <h4 class="product-name">Muthoot Real Estate</h4>
              <a class="to-site" href="http://www.muthootrealestate.com/">VISIT</a>
            </div>
          </div>
          <div class="col-md-3 muthoot-group-logo">
            <div class="muthoot-groups-color">
              <img src="assets/images/products/chits.png" class="img-responsive center-block">
              <h4 class="product-name">Muthoot Chits</h4>
              <a class="to-site" href="http://www.muthootchits.com/">VISIT</a>
            </div>
          </div>
          <div class="col-md-3 muthoot-group-logo">
            <div class="muthoot-groups-color">
              <img src="assets/images/products/housing-finance.png" class="img-responsive center-block">
              <h4 class="product-name">Muthoot Housing Finance</h4>
              <a class="to-site" href="http://www.muthoothousing.com/">VISIT</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 muthoot-group-logo">
            <div class="muthoot-groups-color">
              <img src="assets/images/products/football.png" class="img-responsive center-block">
              <h4 class="product-name">Muthoot Football Academy</h4>
              <a class="to-site" href="http://www.muthootfootball.com/">VISIT</a>
            </div>
          </div>
          <div class="col-md-3 muthoot-group-logo">
            <div class="muthoot-groups-color">
              <img src="assets/images/products/microfin-color.png" class="img-responsive center-block">
              <h4 class="product-name">Muthoot Microfin</h4>
              <a class="to-site" href="www.muthootmicrofin.com">VISIT</a>
            </div>
          </div>
          <div class="col-md-3 muthoot-group-logo">
            <div class="muthoot-groups-color">
              <img src="assets/images/products/capital-color.png" class="img-responsive center-block">
              <h4 class="product-name">Muthoot Capital</h4>
              <a class="to-site" href="http://muthootcap.com/">VISIT</a>
            </div>
          </div>
          <div class="col-md-3 muthoot-group-logo">
            <div class="muthoot-groups-color">
              <img src="assets/images/products/muthoot_logo-color.png" class="img-responsive center-block">
              <h4 class="product-name">Muthoot Corporate</h4>
              <a class="to-site" href="www.muthoot.com">VISIT</a>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- muthoot logo section end  -->
    <!-- contact section -->
    <!-- <section id="contact" class="contact-sec">
      <div class="container">
        <div class="row">
          <div class="htc__contact__form__wrap"  data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
            <h3 class="muthoot-hed">CONTACT US</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <div class="contact-form-wrap">
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
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- contact section end -->
    <!-- footer section -->
    <!-- <section class="footer">
      <div class="container">
        <div class="row">
          <img src="assets/images/logo-white.png" class="img-responsive center-block">
        </div>
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="row footer-second">
              <div class="col-md-6 col-sm-6">
                <h4 class="footer-text-1">Muthoot BLUE SOCH</h4>
              </div>
              <div class="col-md-6 col-sm-6 social">
                <a href="#"><i class="fa fa-google-plus-square icons"></i></a>
                <a href="#"><i class="fa fa-twitter-square icons"></i></a>
                <a href="#"><i class="fa fa-instagram icons"></i></a>
                <a href="#"><i class="fa fa-facebook-square icons"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row footer-3">
          <div class="col-md-10 col-md-offset-1">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <p><a class="footer-text" href="www.muthootfincorp.com">Muthoot Fincorp</a></p>
                <p><a class="footer-text" href="http://www.muthootrealestate.com/">Muthoot Real Estate</a></p>
                <p><a class="footer-text" href="www.muthoot.com">Muthoot Corporate</a></p>
              </div>
              <div class="col-md-4 col-sm-4">
                <p><a class="footer-text" href="http://muthootcap.com/">Muthoot Capital</a></p>
                <p><a class="footer-text" href="www.muthootmicrofin.com">Muthoot Microfin</a></p>
                <p><a class="footer-text" href="http://www.muthoothousing.com/">Muthoot Housing Ltd</a></p>
              </div>
              <div class="col-md-4 col-sm-4">
                <p><a class="footer-text" href="http://www.muthootchits.com/">Muthoot Chits</a></p>
                <p><a class="footer-text" href="http://www.mytravelmuthoot.com/">Muthoot Travel</a></p>
                <p><a class="footer-text" href="http://www.muthootfootball.com/">Muthoot Football Academy </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- footer section end -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- <script>
      $(document).ready(function() {   
            var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
            });
        });
    </script> -->
    <!-- <script>
           $(document).ready(function() {
  
  var scrollLink = $('.scroll');
  
  
  scrollLink.click(function(e) {
    e.preventDefault();
    $('body,html').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000 );
  });
  
  
  $(window).scroll(function() {
    var scrollbarLocation = $(this).scrollTop();
    
    scrollLink.each(function() {
      
      var sectionOffset = $(this.hash).offset().top - 20;
      
      if ( sectionOffset <= scrollbarLocation ) {
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
      }
    })
    
  })
  
})
        </script> -->
        <!-- <script>
  $(document).ready(function() {    $('#mybutton').delay(8000).fadeIn(2200);
  });
</script>
<script>
  $(document).ready(function() {    $('#fade-btn').delay(8000).fadeIn(2200);
  });
</script>
<script>
  $(window).ready(function() {
    $('#loading').hide();
});
</script> -->
<!-- script>
  $(document).ready(function(){
$("#show").wait(function(){
  delay 0500  $("proceed").show();
});
</script> -->
<script>
    $(document).ready(function() {
      $('#mybutton').hide().delay(3000).fadeIn(2200);
});
     $(document).ready(function() {
      $('#mybutton1').hide().delay(3000).fadeIn(2200);
});
    </script>
<script src="js/jquery-1.11.0.min.js"></script>
  </body>
</html>