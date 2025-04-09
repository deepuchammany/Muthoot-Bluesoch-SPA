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
    <?php
$servername = "localhost";
$username = "mthbluco_bluesoc";
$password = "s;PDT+fuxc+?";
$database="s;PDT+fuxc+?";
      ?>
    <!-- header section -->
    <section id="home" class=" header">
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
                  <li><a class="menu nav-link" href="index.php">HOME</a></li>
                  <li><a class="menu nav-link" href="index.php#why">WHY BLUE SOCH</a></li>
                  <li><a class="menu nav-link" href="index.php#product">PRODUCTS</a></li>
                  <li><a class="menu nav-link" href="index.php#contact">CONTACT</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div style="padding-top: 120px;">
    </div>
    <?php
    session_start();
    if ($_POST) {
      $name=$_POST['name'];
      $email=$_POST['password'];

      if($name!=''){
      // Create connection
      $con = mysqli_connect($servername, $username, $password,$database);

      // Check connection
      if (!$con) {
          die("Connection failed: " . mysqli_connect_error());
      }
      $query=mysqli_query($con,"SELECT * from login WHERE username='$name' LIMIT 1 ");
      if ($query) {
        $row=mysqli_fetch_array($query);
        $_SESSION['name']=$row['username'];
      }
      mysqli_close($con);
      }
    }

    if(!(isset($_SESSION['name'])) ){

    ?>
      <div class="container">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" align="center">
        <h2>Login</h2>
        <form method="POST" action="" >
          <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" class="form-control" placeholder="Name" name="name" id="usr" required="">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Password" name="password" id="pwd" required="">
          </div>
          <input type="submit" name="submit" value="Login" class="btn btn-primary">
        </form>
        </div>
      </div><br>
      <?php
    }
    else { ?>
      
<div class="container">
  <div align="right">
      <button type="button" class="btn btn-primary" onclick="sign_out()">Sign out</button>
  </div>
  <h2>Client Messages</h2>
  <p>The following clients have sent messages:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>State</th>
        <th>City</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
      <?php
        
      $con = mysqli_connect($servername, $username, $password,$database);

      // Check connection
      if (!$con) {
          die("Connection failed: " . mysqli_connect_error());
      }
      $query=mysqli_query($con,"SELECT * from messages");
      if ($query) {
        while ($row=mysqli_fetch_array($query)) {
          $name=$row['name'];
          $email=$row['email'];
          $phone=$row['phone'];
          $state=$row['state'];
          $city=$row['city'];
          $subject=$row['subject'];
          $message=$row['message'];
          echo '
              <tr>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$phone.'</td>
                <td>'.$state.'</td>
                <td>'.$city.'</td>
                <td>'.$message.'</td>
              </tr>';
        }
      }
      mysqli_close($con);
      ?>
    </tbody>
  </table>
</div>
<?php
    }
    ?>
    <!-- footer section -->
    <section class="footer">
      <div class="container">
        <div class="row"><!-- first footer row -->
          <img src="assets/images/logo-white.png" class="img-responsive center-block">
        </div><!-- first footer row end -->
        <div class="row"><!-- second footer row -->
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
        </div><!-- second footer row end-->
        <div class="row footer-3"><!-- third footer row -->
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
        </div><!-- third footer row end-->
      </div>
    </section>
    <!-- footer section end -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrajs/p.min.js"></script>
   <!--  <script>
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
    <script type="text/javascript">
      function sign_out(){
        $.ajax({
            type: "GET",
            url: "sign_out.php",
            success: function(result){
                window.location.href='messages.php';
              }
        });
      }
    </script>
    <script>
           $(document).ready(function() {
  
  var scrollLink = $('.scroll');
  
  // Smooth scrolling
  scrollLink.click(function(e) {
    e.preventDefault();
    $('body,html').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000 );
  });
  
  // Active link switching
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
        </script>
        <script type="text/javascript">
      $("#button-right").click(function(){
      $("#vid1").hide();
    });
    </script>
  </body>
</html>