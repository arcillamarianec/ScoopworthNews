<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lifestyle - Scoopworth News</title>
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
          <li><a class="nav-link  scrollto" href="entertainmentGrid.php">ENTERTAINMENT</a></li>
          <li><a class="nav-link  scrollto active" href="lifestyleGrid.php">LIFESTYLE</a></li>
          <li class="dropdown"><a href="#"><span>ABOUT US</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="aboutUs.php">STAFF</a></li>
              <li><a href="aboutUs1.php">CONTACT US</a></li>
            </ul>
            </li> 
        </ul>
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
        <div id="journal-blog" class="text-left paddsections">
    
    
    	<div class= "article">
          <div class="container">
            <div class="section-title text-center">
              <h1 class="category">LIFESTYLE</h1>
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
              <a href="l1.php"><img src="assets/img/LIFESTYLE1.jpg" alt="pica"></a>
						    <h2> <a href="l1.php"> Is Angel Locsin's very low 800-calorie diet safe?</a></h2>
                <p class="particle"><a href="l1.php"> Media platforms are now abuzz with actress Angel Locsin's current 800-kilocalorie diet, 
						    prescribed by a health clinic for weight loss. </a> </p>
						    <div class = "text">   <a href="l1.php"><button><font color = white> Read More </font></button></a></div>
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
              <a href="l2.php"><img src="assets/img/LIFESTYLE2.jpg" alt="pica"></a>
						    <h2> <a href="l2.php"> Baler welcomes tourists</a></h2>
						    <p class="particle"><a href="l2.php"> After more than a year of lockdowns, tourists are again welcome to visit Baler 
						    in Aurora province.</a> </p>
                <div class = "text">   <a href="l2.php"><button><font color = white> Read More </font></button></a></div>
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
              <a href="l3.php"><img src="assets/img/LIFESTYLE3.png" alt="pica"></a>
						    <h2> <a href="l3.php"> Two queer women fall in love while building a shelter in this book</a></h2>
						    <p class="particle"><a href="l3.php"> Many queer folk struggle with homelessness and unemployment because of their queer identity, 
                      be it from homophobic parents or transphobic employers. These communal, makeshift shelters are how we take care of each other. </a> </p>
                      <div class = "text">   <a href="l3.php"><button><font color = white> Read More </font></button></a></div>
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
