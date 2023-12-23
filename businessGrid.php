<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Business - Scoopworth News</title>
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
          <li><a class="nav-link  scrollto active" href="businessGrid.php">BUSINESS</a></li>
          <li><a class="nav-link  scrollto" href="sportsGrid.php">SPORTS</a></li>
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


<div class= "article">
  <div class="container">
    <div class="section-title text-center">
      <h1 class="category">BUSINESS</h1>
    </div>
  </div>

  <div class="container">
    <div class="journal-block">
      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="journal-info mb-30">
            <div class="journal-txt">
             <div class="card">
      <div class="card-image-seven"> </div>
      <div class="card-text"> 
      <a href="b1.php"><img src="assets/img/BUSINESS 1.jpg" alt="b1"></a>
        <h2> <a href="b1.php"> Price rise slows in October, but not for long, says central bank</a></h2>
        <p class="particle"><a href="b1.php">Despite the lower-than-expected October inflation rate, the prices of basic goods and services will continue to experience upward pressure as 
          the holiday season approaches, the Bangko Sentral ng Pilipinas (BSP) said on Friday.  </a> </p>
        <div class = "text">   <a href="b1.php"><button><font color = white> Read More </font> </button></a></div>
      </div> 
    </div>
            </div>
          </div>
        </div>
    
        
     

        <div class="col-lg-4 col-md-6">
          <div class="journal-info mb-30">
            <div class="journal-txt">
     <div class="card">
      <div class="card-image-eight"> </div>
      <div class="card-text">
      <a href="b2.php"><img src="assets/img/BUSINESS 2.jpg" alt="b2"></a>
        <h2> <a href="b2.php">Metrobank income rises by 131% on lower bad loan buffer</a></h2>
        <p class="particle"><a href="b2.php"> Ty family-led Metropolitan Bank & Trust Co. grew its third quarter net income by 131 percent year-on-year to P4.4 billion as loan loss provisioning 
          expense declined compared to last year, when pandemic disruptions dragged the economy into a record recession.</a> </p>
        <div class = "text">   <a href="b2.php"><button><font color = white> Read More </font></button> </a> </div>
      </div> 
    </div>
            </div>
          </div>
        </div>
            

        <div class="col-lg-4 col-md-6">
          <div class="journal-info mb-30">
            <div class="journal-txt">
    <div class="card">
      <div class="card-image-nine"> </div>
      <div class="card-text"> 
      <a href="b3.php"> <img src="assets/img/BUSINESS 3.png" alt="b3"></a>
        <h2> <a href="b3.php"> Majority of CebuPac's domestic destinations open for leisure travel</a></h2>
        <p class="particle"><a href="b3.php">The majority of destinations in Cebu Pacific's domestic network are now open for leisure travel, including popular beach destinations, the 
          publicly listed airline said on Friday (Nov 5).</a> </p>
              <div class = "text">   <a href="b3.php"><button><font color = white> Read More </font></button></a></div>
        </div>					  
    </div>		
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
 </div><!-- End Blog Grid -->

</main><!-- End #main -->
<!-- ======= Footer ======= -->
<?php include('footer.php')?>
</html>
