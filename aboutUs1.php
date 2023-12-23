<?php
// connect to database
  $conn = mysqli_connect('localhost','root','','scoopworth');

// for checking of connectio
  if(!$conn){
    echo'Connection error:' . mysqli_connect_error();
  }
?>
<?php 
  $name = $email = $subject = $message = '';
  $errors = array('name'=>'','email'=>'','subject'=>'','message'=>'');

  if(isset($_POST['Send'])){  

    // check name if empty
    if(empty($_POST['name'])){
      $errors['name'] = 'Name is required <br>';
    }else{
      $name = $_POST['name'];
    }

    // check email if empty
    if(empty($_POST['email'])){
      $errors['email'] =  'Email is required <br>';
    }else{ 
      //for validating kung email add
      $email = $_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Email must be a valid email address.';
      }
    }

    // check subject if empty
    if(empty($_POST['subject'])){
      $errors['subject'] = 'Subject is required <br>';
    }else{
      $subject = $_POST['subject'];
    }

    // check message if empty
    if(empty($_POST['message'])){
      $errors['message'] = 'Message is required <br>';
    }else{
      $message = $_POST['message'];
    }
  
  if(array_filter($errors)){

  }else{
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    //create sql
    $sql = "INSERT INTO contact_us_form(name,email,subject,message) 
    VALUES('$name','$email','$subject','$message')";

    //save to mysql and to check
    if(mysqli_query($conn,$sql)){
      //success
    //for redirecting after magsagot successfully
    header('Location: Success.php');
    }else{
      //error
      echo'query error: '. mysqli_error($conn);
    }
  }
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About Us (Contact Us) - Scoopworth News</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include('templates1.php')?>
</head>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo"><img src="assets/img/snLogo.png" alt="" class="img-fluid"></a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">HOME</a></li>
          <li><a class="nav-link scrollto" href="nationGrid.php">NATION</a></li>
          <li><a class="nav-link scrollto" href="businessGrid.php">BUSINESS</a></li>
          <li><a class="nav-link scrollto" href="sportsGrid.php">SPORTS</a></li>
          <li><a class="nav-link scrollto" href="entertainmentGrid.php">ENTERTAINMENT</a></li>
          <li><a class="nav-link scrollto" href="lifestyleGrid.php">LIFESTYLE</a></li>
          <li class="dropdown"><a href="#"><span>ABOUT US</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="aboutUs.php">STAFF</a></li>
              <li><a href="aboutUs1.php">CONTACT US</a></li>
            </ul>
            </li>        
            <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

<body>
    <main id="main">

        <!-- ======= Blog Grid ======= -->
  <section class="mb-4 container">

    <!--Section heading-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1 class="h1-responsive font-weight-bold text-center my-auto">CONTACT US</h1>

    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="aboutUs1.php" method="POST">
            </div>
                <!--Grid row-->

                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control" placeholder="What is your name?" required type = "text"
                            value ="<?php echo $name ?>">
                        </div>
                          <div class ="red-text">
                            <?php echo $errors['name']; ?>
                        </div>
                    </div>
                  </div>
                  <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control" placeholder="What is your e-mail?"required type = "text"
                            value ="<?php echo $email ?>">
                        </div>
                        <div class ="red-text">
                            <?php echo $errors['email']; ?>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject"required type = "text"
                            value ="<?php echo $subject ?>">
                        </div>
                        <div class ="red-text">
                            <?php echo $errors['subject']; ?>
                        </div>
                    </div>
                </div>

                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        <input type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your message" required type = "text"
                            value ="<?php echo $message ?>">
                          </textarea>
                        </div>
                        <div class ="red-text">
                            <?php echo $errors['message']; ?>
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        <a href="Success.php"><center><input type ="submit" name = "Send" value ="Send" class ="btn btn-primary"></center></a>
                        <br>
                        <br>
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                </form>
</div>
      </div>

      </section>

        <!-- End Blog Grid -->
    
      </main>
      <!-- End #main -->
 <!-- ======= Footer ======= -->
 <?php include('footer.php')?>
</body>
</html>