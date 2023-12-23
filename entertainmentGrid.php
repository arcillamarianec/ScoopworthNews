<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Entertainment - Scoopworth News</title>
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
          <li><a class="nav-link  scrollto" href="sportsGrid.php">SPORTS</a></li>
          <li><a class="nav-link  scrollto active" href="entertainmentGrid.php">ENTERTAINMENT</a></li>
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
              <h1 class="category">ENTERTAINMENT</h1>
              <main class="grid">
            </div>
          </div>
    
          <div class="container">
            <div class="journal-block">
              <div class="row">
    
                <div class="col-lg-4 col-md-6">
                  <div class="journal-info mb-30">
  
    
                    <div class="journal-txt">
                  
              <article>
                    <div class="card">
						  <div class="card-image-four"> </div>
						  <div class="card-text"> 
              <a href="e1.php"><img src="Entertainment/ENTERTAINMENT1.jpg" alt="e1"></a>
						    <h2><a href="e1.php"> The 'Jujutsu Kaisen' prequel trailer gets pretty chaotic (of course) </a></h2>
                <p class="particle"><a href="e1.php"> Released on Toho Animation's YouTube channel, the trailer for "Jujutsu Kaisen 0" introduces 
						    viewers to the prequel's big bad Suguru Geto, an arrogant sorcerer with a vendetta against non-magical folks.</a> </p>
						    <div class = "text">   <a href="e1.php"><button><font color = white> Read More </font></button></a></div>
              </div> 
            </div>
                    </div>
                  </div>
                </div>
						   
              
    
                <div class="col-lg-4 col-md-6">
                  <div class="journal-info mb-30">
                    <div class="journal-txt">
                      <div class="card">
						  <div class="card-image-five"> </div>
						  <div class="card-text"> 
              <a href="e2.php"><img src="Entertainment/entertainment5.png" alt="e2"></a>
                <h2> <a href="e2.php"> Enchong Dee shares greatest lesson learned from 15-year show biz career </a></h2>
						    <p class="particle"><a href="e2.php"> "My Plan B has always been to become a business tycoon, never to switch networks," said 
						    actor-TV host Enchong Dee when asked why he chose to remain an ABS-CBN talent for 15 long years.</a> </p>
						     <div class = "text"><a href="e2.php"><button><font color = white> Read More </font></button></a></div>
              </div> 
            </div>
                    </div>
                  </div>
                </div>
              


                <div class="col-lg-4 col-md-6">
                  <div class="journal-info mb-30">
                    <div class="journal-txt">        
                      <div class="card">
						  <div class="card-image-six"> </div>
						  <div class="card-text"> 
              <a href="e3.php"><img src="Entertainment/ENTERTAINMENT4.PNG" alt="e3"></a>
						    <h2> <a href="e3.php">Robinsons Malls ushers in the Holiday Season with Ben&Ben's Tuloy Pa Rin ang Pasko  </a></h2>
                <p class="particle"><a href="e3.php"> The joyous traditions of Christmas in the Philippines can't come soon enough for many of us who
						     have spent close to two years under some form of lockdown due to the pandemic.</a> </p>
						    <div class = "text"><a href="e3.php"><button><font color = white> Read More </font></button></a></div>
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
