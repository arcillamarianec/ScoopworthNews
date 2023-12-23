<?php
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
  <link href="assets/css/style.css" rel="stylesheet">
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

      <section class="mb-4 container">

    <!--Section heading-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1 class="h1-responsive font-weight-bold text-center my-auto"><big>MESSAGE SENT SUCCESSFULLY!</big></h1>
    <form id="contact-form" name="contact-form" action="aboutUs1.php">

        <!-- ======= Blog Grid ======= -->
      
      <br>
        <center><p>We are happy to inform you that your message has been successfully sent to the appointed personnel.
          <br>If you wish to make another, please click the button the below.
          <br>Thank you for your time and cooperation!
        </p>
        </center>

        <div class="col-xl-12">
                        <div class="md-form mb-0">
                          <br>
                          <br>
                        <center><input type ="submit" name = "Send" value ="Retry" class ="btn btn-primary"></center>
                        <br>
                        <br>
                        </div>
                    </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
          
    </form>

    </section>
    
      </main><!-- End #main -->
<!-- ======= Footer ======= -->
<?php include('footer.php')?>
</html>