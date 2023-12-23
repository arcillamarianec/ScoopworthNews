<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nation - Scoopworth News</title>
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
          <li><a class="nav-link scrollto active" href="nationGrid.php">NATION</a></li>
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

<body>
    <main id="main">

        <!-- ======= Blog Grid ======= -->
        <div id="journal-blog" class="text-left paddsections">
    <div class = "article"> 
          <div class="container">
            <div class="section-title text-center">
              <h1 class="category">NATION</h1>
            </div>
          </div>
    
          <div class="container">
            <div class="journal-block">
              <div class="row">
    
                <div class="col-lg-4 col-md-6">
                  <div class="journal-info mb-30">
    
                    <div class="journal-txt">
    				   <div class="card">
						  <div class="card-image-ten"> </div>
						  <div class="card-text">
              <a href="n1.php"><img src="Nation/NATION1.jpg" alt="n1"></a>
						    <h2> <a href="n1.php"> Army chief Andres Centino is next AFP chief</a></h2>
						    <p><a href="n1.php"> President Rodrigo Duterte named Philippine Army chief Lieutenant General Andres Centino as the 
                      next chief of staff of the Armed Forces of the Philippines (AFP).  </a> </p>
						     <div class = "text">   <a href="n1.php"><button><font color = white> Read More </font></button></a></div>
              </div> 
            </div>
                    </div>
                  </div>
                </div>
                
                    
    
                <div class="col-lg-4 col-md-6">
                  <div class="journal-info mb-30">

                    <div class="journal-txt">
     						<div class="card">
							<div class="card-image-eleven"> </div>
						  <div class="card-text"> 
              <a href="n2.php"><img src="Nation/NATION2.jpg" alt="n2"></a>
						    <h2> <a href="n2.php"> More schools to be included in pilot face-to-face classes - DepEd</a></h2>
						    <p><a href="n2.php"> The Department of Education said Friday it will include more schools in its pilot run on resuming 
                      face-to-face classes this month following approval of President Rodrigo Duterte. </a> </p>
						    <div class = "text">   <a href="n2.php"><button><font color = white> Read More </font></button></a></div>
              </div> 
            </div>
                    </div>
                  </div>
                </div>
                     
    
                <div class="col-lg-4 col-md-6">
                  <div class="journal-info mb-30">

                    <div class="journal-txt">
    				<div class="card">
							<div class="card-image-twelve"> </div>
						  <div class="card-text"> 
              <a href="n3.php"><img src="Nation/NATION3.jfif" alt="n3"></a>
						    <h2> <a href="n3.php">Vaccination required for onsite workers </a></h2>
						    <p><a href="n3.php"> Government and private employees doing onsite work will be required to be inoculated against the 
                      coronavirus disease 2019 (Covid-19) starting December 1. </a> </p>
						     <div class = "text">   <a href="n3.php"><button><font color = white> Read More </font></button></a></div>
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
