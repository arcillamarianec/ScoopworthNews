<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sports - Scoopworth News</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include('templates.php')?>
</head>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo"><img src="assets/img/snLogo.png" alt="" class="img-fluid"></a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">HOME</a></li>
          <li><a class="nav-link scrollto" href="nationGrid.php">NATION</a></li>
          <li><a class="nav-link  scrollto" href="businessGrid.php">BUSINESS</a></li>
          <li><a class="nav-link  scrollto active" href="sportsGrid.php">SPORTS</a></li>
          <li><a class="nav-link  scrollto" href="entertainmentGrid.php">ENTERTAINMENT</a></li>
          <li><a class="nav-link  scrollto" href="lifestyleGrid.php">LIFESTYLE</a></li>
          <li class="dropdown"><a href="#"><span>ABOUT US</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="aboutUs.php">STAFF</a></li>
              <li><a href="aboutUs1.php">CONTACT US</a></li>
            </ul>
            </li> 
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

<script>
  var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
  </script>

<body>
    <main id="main">

        <!-- ======= Blog Grid ======= -->
        <div id="journal-blog" class="text-left  paddsections">
    		
    	<div class = "article"> 
          <div class="container">
            <div class="section-title text-center">
              <h1 class="category">SPORTS</h1>
            </div>
          </div>
    
          <div class="container">
            <div class="journal-block">
              <div class="row">
    
                <div class="col-lg-4 col-md-6">
                  <div class="journal-info mb-30">
    
                    <div class="journal-txt">
    				<div class="card">
						  <div class="card-image-thirteen"> </div>
						  <div class="card-text"> 
              <a href="s1.php"><img src="assets/Sports/SPORTS1.jpg" alt="s1"></a>
						    <h2> <a href="s1.php"> Hidilyn Diaz's record-breaking lift is a golden moment in PH sports history</a></h2>
						    <p><a href="s1.php"> Hidilyn Diaz would forever be known as the Filipino to achieve what many is calling the 
                      most significant feat in Philippine sports history-winning the country's first ever Olympic gold medal.  </a> </p>
						     <div class = "text"><a href="s1.php"><button><font color = white>Read More</font></button></a></div>
              </div> 
            </div>
                    </div>
                  </div>
                </div>
                
                    
                <div class="col-lg-4 col-md-6">
                  <div class="journal-info mb-30">
              <div class="journal-txt">
    					<div class="card">
						  <div class="card-image-fourteen"> </div>
						  <div class="card-text"> 
              <a href="s2.php"><img src="assets/Sports/SPORTS2.jpg" alt="s2"></a>
						    <h2> <a href="s2.php"> Pacquiao retires from boxing</a></h2>
						    <p><a href="s2.php">Manny Pacquiao, the only eight-division champion in boxing history, has officially called it a 
                      career in boxing after announcing his retirement from the sport on Wednesday. </a> </p>
						    <div class = "text"><a href="s2.php"><button><font color = white>Read More</font></button></a></div>
              </div> 
            </div>
                    </div>
                  </div>
                </div>
       
    
                <div class="col-lg-4 col-md-6">
                  <div class="journal-info mb-30">
    
              <div class="journal-txt">
    					<div class="card">
						  <div class="card-image-fifteen"></div>
						  <div class="card-text"> 
              <a href="s3.php"><img src="assets/Sports/SPORTS3.jpeg" alt="s3"></a>
						    <h2> <a href="s3.php"> Indoor sports venues now allowed under Alert Level 2 in Metro Manila</a></h2>
						    <p class = "particle"><a href="s3.php">Leagues like the PBA and sports that were played recreationally during pre-pandemic times will be 
                      allowed to resume in Metro Manila after it was placed under Alert Level 2. </a> </p>
						    <div class = "text"><a href="s3.php"><button><font color = white>Read More</font></button></a></div>
              </div> 
            </div>
                    </div>
                  </div>
                </div>
                
                
    
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- End Blog Grid -->
    
      </main><!-- End #main -->
 <!-- ======= Footer ======= -->
 <?php include('footer.php')?>
</html>
