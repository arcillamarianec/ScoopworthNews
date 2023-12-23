<?php
// connect to database
  $conn = mysqli_connect('localhost','root','','scoopworth');

// for checking of connection
  if(!$conn){
    echo'Connection error:' . mysqli_connect_error();
  }
            //writing queries
            $fname = "SELECT firstname FROM staff";
            $lname = "SELECT lastname FROM staff";

            // make query and get results
            $result_f = mysqli_query($conn, $fname);
            $result_l = mysqli_query($conn, $lname);

            //fetch the resulting rows as an array
            $f_t = mysqli_fetch_all($result_f, MYSQLI_ASSOC);
            $l_t = mysqli_fetch_all($result_l, MYSQLI_ASSOC);

            // free result form memory
            mysqli_free_result($result_f);
            mysqli_free_result($result_l);

            // close connection
            mysqli_close($conn);  
?>


<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About Us - Scoopworth News</title>
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
        <div class = "article"> 
        <div id="journal-blog" class="text-left  paddsections">
    
          <div class="container">
            <div class="section-title text-center">
              <h1>ABOUT US</h1>
            </div>
          </div>
    
				<center>
				<!-- Arcilla -->
                <div class="col-lg-4 col-md-6">
                  <div class="journal-info mb-30">
                    <a href="blog-single.html"><img src="assets/img/Arcilla.png" class="img-responsive" width="300" height="300" alt="img"></a>
    
                    <div class="journal-txt">
						<br>		
                      <h3><?php echo htmlspecialchars($l_t[0]['lastname']); echo(', &nbsp');echo htmlspecialchars($f_t[0]['firstname']);?></h3>
                      <p class="separator"> Wireframe Editor | Front-end Developer | Back-end Developer

                      </p>
    
                    </div>
    
                  </div>
                </div>
				<!-- Arquiza -->
				<div class="col-lg-4 col-md-6">
                  <div class="journal-info mb-30">
            <br>
            <br>
                    <a href="blog-single.html"><img src="assets/img/Zach.png" width="300" height="300" class="img-responsive" alt="img"></a>
    
                    <div class="journal-txt">
						<br>
            <h3><?php echo htmlspecialchars($l_t[1]['lastname']); echo(', &nbsp');echo htmlspecialchars($f_t[1]['firstname']);?></h3>
                      <p class="separator"> Researcher | Back-end Developer | Front-end Developer | Quality Assurance
                      </p>
    
                    </div>
    
                  </div>
                </div>
                
				<!-- Bugay -->
				<div class="col-lg-4 col-md-6">
                  <div class="journal-info mb-30">
            <br>
            <br>
                    <a href="blog-single.html"><img src="assets/img/Lean.png" width="300" height="300" class="img-responsive" alt="img"></a>
    
                    <div class="journal-txt">
						<br>
            <h3><?php echo htmlspecialchars($l_t[2]['lastname']); echo(', &nbsp');echo htmlspecialchars($f_t[2]['firstname']);?></h3>
                      <p class="separator"> Wireframe Editor | Researcher | Front-end Developer
 
                      </p>
    
                    </div>
    
                  </div>
                </div>
				
				<!-- Castro -->
				<div class="col-lg-4 col-md-6">
                  <div class="journal-info mb-30">
            <br>
            <br>
                    <a href="blog-single.html"><img src="assets/img/Castro.png" width="300" height="300" class="img-responsive" alt="img"></a>
    
                    <div class="journal-txt">
						<br>
            <h3><?php echo htmlspecialchars($l_t[3]['lastname']); echo(', &nbsp');echo htmlspecialchars($f_t[3]['firstname']);?></h3>
                      <p class="separator"> Researcher | Front-end Developer | Back-end Developer
                      </p>
    
                    </div>
    
                  </div>
                </div>
				<!-- Lacuna -->
				<div class="col-lg-4 col-md-6">
                  <div class="journal-info mb-30">
            <br>
            <br>
                    <a href="blog-single.html"><img src="assets/img/Leonard.png" width="300" height="300" class="img-responsive" alt="img"></a>
    
                    <div class="journal-txt">
						<br>
            <h3><?php echo htmlspecialchars($l_t[4]['lastname']); echo(', &nbsp');echo htmlspecialchars($f_t[4]['firstname']);?></h3>
                      <p class="separator"> Researcher | Back-end Developer | Quality Assurance
                      </p>
    
                    </div>
    
                  </div>
                </div>
				<!-- Pentecostes -->
				<div class="col-lg-4 col-md-6">
                  <div class="journal-info mb-30">
          
            <br>
            <br>
                    <a href="blog-single.html"><img src="assets/img/Ivan.png" width="300" height="300" class="img-responsive" alt="img"></a>
    
                    <div class="journal-txt">
						<br>
            <h3><?php echo htmlspecialchars($l_t[5]['lastname']); echo(', &nbsp');echo htmlspecialchars($f_t[5]['firstname']);?></h3>
                      <p class="separator"> Researcher | Back-end Developer | Quality Assurance
 
                      </p>
    
                    </div>
    
                  </div>
                </div>
				<!-- Solacito -->
				<div class="col-lg-4 col-md-6">
                  <div class="journal-info mb-30">
            <br>
            <br>
                    <a href="blog-single.html"><img src="assets/img/Paolo.png" width="300" height="300" class="img-responsive" alt="img"></a>
    
                    <div class="journal-txt">
						<br>
            <h3><?php echo htmlspecialchars($l_t[6]['lastname']); echo(', &nbsp');echo htmlspecialchars($f_t[6]['firstname']);?></h3>
                      <p class="separator"> Wireframe Editor | Researcher

                      </p>
    
                    </div>
    
                  </div>
                </div>
				
				</center>
				<center><p>"Scoopworth" serves as the official news website for the AlgoriTeam organization, wherein it covers breaking news in a daily, all around basis; categories varying from trivial to contemporary matters (i.e. Entertainment, Politics, Business, etc.). Being that the organization consists of multiple writers and editors which utilize this website as a proper platform to disseminate information in the form of compelling yet factual commentaries for the masses, focusing on the events all around our country: the Philippines.
          The news website also offers a variety of features such as easy channel navigation, strong social media presence, wherein our reach extends through other social media platforms besides our own (i.e. Facebook, Twitter, etc.), as well as a simple format all throughout the immersion.
      </p></center>>
					
               
    
              </div>
            </div>
          </div>
        </div>
        </div><!-- End Blog Grid -->
    
      </main><!-- End #main -->
  
 <!-- ======= Footer ======= -->
 <?php include('footer.php')?>
</html>