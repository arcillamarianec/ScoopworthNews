<?php
?>  
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>Scoopworth News</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include('templates.php')?>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo"><img src="assets/img/snLogo.png" alt="" class="img-fluid"></a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">HOME</a></li>
          <li><a class="nav-link scrollto" href="nationGrid.php">NATION</a></li>
          <li><a class="nav-link  scrollto" href="businessGrid.php">BUSINESS</a></li>
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

  <!-- ======= HOME *LAGAY CAROUSEL ======= -->
  
  <div class = "article"> 
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleControls" data-slide-to="1"></li>
    <li data-target="#carouselExampleControls" data-slide-to="2"></li>
    <li data-target="#carouselExampleControls" data-slide-to="3"></li>
    <li data-target="#carouselExampleControls" data-slide-to="4"></li>
    </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a href="s1.php">
      <img class="d-block w-100" src="assets\Sports\SPORTS1.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h1> "Hidilyn Diaz's record-breaking lift is a golden moment in PH sports history" </h1>
        <p><font size="4"><i>Hidilyn Diaz would forever be known as the Filipino to achieve what many is calling the most significant feat in Philippine sports history winning the country's first ever Olympic gold medal.</p></font></i>
      </div>
    </div>
  </a>
    <div class="carousel-item">
      <a href="b1.php">
      <img class="d-block w-100" src="assets\img\BUSINESS 1.jpg"  alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
         <h1> "Price rise slows in October, but not for long, says central bank" </h1>
        <p><font size="4"><i>Despite the lower-than-expected October inflation rate, the prices of basic goods and services will continue to experience upward pressure as the holiday season approaches, the Bangko Sentral ng Pilipinas (BSP) said on Friday.</p></font></i>
      </div>
    </div>
  </a>
    <div class="carousel-item">
      <a href="n1.php">
      <img class="d-block w-100" src="Nation\NATION1.jpg"  alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h1> "Army chief Andres Centino is next AFP chief" </h1>
        <p><font size="4"><i>President Rodrigo Duterte named Philippine Army chief Lieutenant General Andres Centino as the next chief of staff of the Armed Forces of the Philippines (AFP).</p></font></i>
      </div>
    </div>
  </a>
   <div class="carousel-item">
      <a href="e1.php">
      <img class="d-block w-100" src="Entertainment\ENTERTAINMENT1.jpg" alt="Fourth slide">
      <div class="carousel-caption d-none d-md-block">
        <h1> "The 'Jujutsu Kaisen' prequel trailer gets pretty chaotic (of course)" </h1>
        <p><font size="4"><i>Released on Toho Animation's YouTube channel, the trailer for "Jujutsu Kaisen 0" introduces viewers to the prequel's big bad Suguru Geto, an arrogant sorcerer with a vendetta against non-magical folks.</p></font></i>
      </div>
    </div>
  </a>
  <div class="carousel-item">
      <a href="l1.php">
      <img class="d-block w-100" src="assets\img\LIFESTYLE1.jpg" alt="Fifth slide">
      <div class="carousel-caption d-none d-md-block">
        <h1> "Is Angel Locsin's very low 800-calorie diet safe?" </h1>
        <p><font size="4"><i>Media platforms are now abuzz with actress Angel Locsin's current 800-kilocalorie diet, prescribed by a health clinic for weight loss.</p></font></i>
      </div>
    </div>
  </a>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>
<!-- End Hero -->
<!-- ======= Footer ======= -->
<?php include('footer.php')?>
</html>