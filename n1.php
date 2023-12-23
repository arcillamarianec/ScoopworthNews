<?php
// connect to database
  $conn = mysqli_connect('localhost','root','','scoopworth');

// for checking of connection
  if(!$conn){
    echo'Connection error:' . mysqli_connect_error();
  }
            $id_article = '7';
            $id_author = '10';
            //writing queries
            $title = "SELECT title FROM articles WHERE id_article = $id_article";
            $fname = "SELECT firstname FROM author WHERE id_author = $id_author";
            $lname = "SELECT lastname FROM author WHERE id_author = $id_author";

            // make query and get results
            $result_t = mysqli_query($conn, $title);
            $result_f = mysqli_query($conn, $fname);
            $result_l = mysqli_query($conn, $lname);

            //fetch the resulting rows as an array
            $a_t = mysqli_fetch_all($result_t, MYSQLI_ASSOC);
            $f_t = mysqli_fetch_all($result_f, MYSQLI_ASSOC);
            $l_t = mysqli_fetch_all($result_l, MYSQLI_ASSOC);

            // free result form memory
            mysqli_free_result($result_t);
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

  <title>Army chief Andres Centino is next AFP chief</title>
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

  <!-- SHARE CONTENT -->
  <div id="at-custom-sidebar" class="at-custom-sidebar atss-left addthis-animated slideInLeft" style="background-color: rgb(255, 255, 255);">

  <div class="at-custom-sidebar-label at4-hide">
    
  </div>

  <div class="at-custom-sidebar-btns">

  <a role="button" tabindex="0" title="Facebook" class="at-share-btn at-svc-facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.rappler.com/nation/philippine-army-chief-andres-centino-next-armed-forces-of-the-philippines-chief/#:~:text=The%20answer%2C%20in%20a%20nutshell%2C%20is%20no.?utm_campaign=sharedpost">

  <span class="at-icon-wrapper" style="background-color: rgb(255, 255, 255); line-height: 50px; height: 50px; width: 50px; border-radius: 0%;">

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-1" title="Facebook" alt="Facebook" style="fill: rgb(51, 51, 51); width: 32px; height: 32px;" class="at-icon at-icon-facebook">

    <title id="at-svg-facebook-1">Facebook</title>

    <g>

      <path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path>

    </g>

    </svg>
  </span>
  </a>

    <a role="button" tabindex="0" title="LinkedIn" class="at-share-btn at-svc-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.rappler.com/nation/philippine-army-chief-andres-centino-next-armed-forces-of-the-philippines-chief/#:~:text=The%20answer%2C%20in%20a%20nutshell%2C%20is%20no.">

      <span class="at-icon-wrapper" style="background-color: rgb(255, 255, 255); line-height: 50px; height: 50px; width: 50px; border-radius: 0%;">

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-linkedin-3" title="LinkedIn" alt="LinkedIn" style="fill: rgb(51, 51, 51); width: 32px; height: 32px;" class="at-icon at-icon-linkedin">

          <title id="at-svg-linkedin-3">LinkedIn</title>

          <g>

            <path d="M26 25.963h-4.185v-6.55c0-1.56-.027-3.57-2.175-3.57-2.18 0-2.51 1.7-2.51 3.46v6.66h-4.182V12.495h4.012v1.84h.058c.558-1.058 1.924-2.174 3.96-2.174 4.24 0 5.022 2.79 5.022 6.417v7.386zM8.23 10.655a2.426 2.426 0 0 1 0-4.855 2.427 2.427 0 0 1 0 4.855zm-2.098 1.84h4.19v13.468h-4.19V12.495z" fill-rule="evenodd"></path>

          </g>

        </svg>
        </span>
        </a>

    <a role="button" tabindex="0" title="Reddit" class="at-share-btn at-svc-reddit" href="http://www.reddit.com/submit?url=https://www.rappler.com/nation/philippine-army-chief-andres-centino-next-armed-forces-of-the-philippines-chief/#:~:text=The%20answer%2C%20in%20a%20nutshell%2C%20is%20no.">

      <span class="at-icon-wrapper" style="background-color: rgb(255, 255, 255); line-height: 50px; height: 50px; width: 50px; border-radius: 0%;">

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-reddit-3" title="Reddit" alt="Reddit" class="at-icon at-icon-reddit" style="fill: rgb(51, 51, 51); width: 32px; height: 32px;">

          <title id="at-svg-reddit-4">Reddit</title>

          <g>

            <path d="M27 15.5a2.452 2.452 0 0 1-1.338 2.21c.098.38.147.777.147 1.19 0 1.283-.437 2.47-1.308 3.563-.872 1.092-2.06 1.955-3.567 2.588-1.506.634-3.143.95-4.91.95-1.768 0-3.403-.316-4.905-.95-1.502-.632-2.69-1.495-3.56-2.587-.872-1.092-1.308-2.28-1.308-3.562 0-.388.045-.777.135-1.166a2.47 2.47 0 0 1-1.006-.912c-.253-.4-.38-.842-.38-1.322 0-.678.237-1.26.712-1.744a2.334 2.334 0 0 1 1.73-.726c.697 0 1.29.26 1.78.782 1.785-1.258 3.893-1.928 6.324-2.01l1.424-6.467a.42.42 0 0 1 .184-.26.4.4 0 0 1 .32-.063l4.53 1.006c.147-.306.368-.553.662-.74a1.78 1.78 0 0 1 .97-.278c.508 0 .94.18 1.302.54.36.36.54.796.54 1.31 0 .512-.18.95-.54 1.315-.36.364-.794.546-1.302.546-.507 0-.94-.18-1.295-.54a1.793 1.793 0 0 1-.533-1.308l-4.1-.92-1.277 5.86c2.455.074 4.58.736 6.37 1.985a2.315 2.315 0 0 1 1.757-.757c.68 0 1.256.242 1.73.726.476.484.713 1.066.713 1.744zm-16.868 2.47c0 .513.178.95.534 1.315.356.365.787.547 1.295.547.508 0 .942-.182 1.302-.547.36-.364.54-.802.54-1.315 0-.513-.18-.95-.54-1.31-.36-.36-.794-.54-1.3-.54-.5 0-.93.183-1.29.547a1.79 1.79 0 0 0-.54 1.303zm9.944 4.406c.09-.09.135-.2.135-.323a.444.444 0 0 0-.44-.447c-.124 0-.23.042-.32.124-.336.348-.83.605-1.486.77a7.99 7.99 0 0 1-1.964.248 7.99 7.99 0 0 1-1.964-.248c-.655-.165-1.15-.422-1.486-.77a.456.456 0 0 0-.32-.124.414.414 0 0 0-.306.124.41.41 0 0 0-.135.317.45.45 0 0 0 .134.33c.352.355.837.636 1.455.843.617.207 1.118.33 1.503.366a11.6 11.6 0 0 0 1.117.056c.36 0 .733-.02 1.117-.056.385-.037.886-.16 1.504-.366.62-.207 1.104-.488 1.456-.844zm-.037-2.544c.507 0 .938-.182 1.294-.547.356-.364.534-.802.534-1.315 0-.505-.18-.94-.54-1.303a1.75 1.75 0 0 0-1.29-.546c-.506 0-.94.18-1.3.54-.36.36-.54.797-.54 1.31s.18.95.54 1.315c.36.365.794.547 1.3.547z" fill-rule="evenodd"></path>

          </g>

        </svg>
      </span>
      </a>

      <a role="button" tabindex="0" title="Telegram" class="at-share-btn at-svc-telegram" href="https://telegram.me/share/url?url=https://www.rappler.com/nation/philippine-army-chief-andres-centino-next-armed-forces-of-the-philippines-chief/#:~:text=The%20answer%2C%20in%20a%20nutshell%2C%20is%20no.">

      <span class="at-icon-wrapper" style="background-color: rgb(255, 255, 255); line-height: 50px; height: 50px; width: 50px; border-radius: 0%;">

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -2 17 20" version="1.1" role="img" aria-labelledby="at-svg-telegram-5" title="Telegram" alt="Telegram" class="at-icon at-icon-telegram" style="fill: rgb(51, 51, 51); width: 32px; height: 32px;">

          <title id="at-svg-telegram-5">Telegram</title>

          <g>

            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" fill-rule="evenodd"></path>

          </g>

        </svg>
      </span>
      </a>

  </div>
</div>
</div>
</div>

    <!-- ======= Blog Single ======= -->
    <div class="main-content paddsection">
    <div class = "article" >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-md-offset-2">
            <div class="row">
              <div class="container-main single-main">
                <div class="col-md-12">
                  <div class="block-main mb-30">
                    <div class="content-main single-post padDiv">
                      <div class="journal-txt">
                      <h2><a href="#"><?php echo htmlspecialchars($a_t[0]['title']);?></a></h2>
                        <div class="post-meta">
                          <ul class="list-unstyled mb-0">
                            <li class="author">by:  <a href=https://www.rappler.com/nation/philippine-army-chief-andres-centino-next-armed-forces-of-the-philippines-chief>
                            <?php echo htmlspecialchars($f_t[0]['firstname']); echo('&nbsp');echo htmlspecialchars($l_t[0]['lastname']);?>
                            </a></li>
                            <li class="date">date:<a href="#">November 12, 2021</a></li>
                            <br>
                       		<p style="text-align: center;"><img src="assets/img/NATION1.jpg" class="img-responsive" alt="Andres Centino" ></p>
                          </ul>
                        </div>
           
                      </div>
                     
                    
                      
                      <!-- <p class="mb-30"></p> -->
                      
                      <p class="mb-30"> Lieutenant General Andres Centino replaces General Jose Faustino Jr., who is also a former Army chief.</p>
                      
                      <p class="mb-30">President Rodrigo Duterte named Philippine Army chief Lieutenant General Andres Centino as the next chief of 
                      staff of the Armed Forces of the Philippines (AFP).</p>
                      
                      <p class="mb-30">Centino's appointment was confirmed by Malacanang and the AFP on Friday, November 12. The newly appointed 
                      chief formally assumed command during the Change of Command Ceremony on Friday afternoon led by Undersecretary for Defense 
                      Operations Cesar Yano from the Department of National Defense.</p>
                      
                      <blockquote> "We are confident that General Centino will continue the initiatives of his predecessors to bring lasting 
                      peace and development in the country while securing the State and upgrading our defense capability," said Presidential 
                      Spokesperson Harry Roque in a statement on Friday. </blockquote>
                      
                      <p class="mb-30">Centino replaces outgoing chief of staff, General Jose Faustino Jr., who served for only four months - 
                      from July 30 to November 12. </p>
                      
                      <p class="mb-30">Centino is the 57th AFP chief and the 11th under President Rodrigo Duterte in less than six years. 
                      This rivals the 11 AFP chiefs appointed by Gloria Macapagal-Arroyo in her nine years as the military's commander in 
                      chief. </p>
                      
                      <p class="mb-30">In his first speech as AFP chief, Centino told the military to unleash its full force against communist 
                      rebels to deal the "final blow that will ultimately destroy the enemies of the state." He then issued a warning against 
                      insurgents and terrorist groups.</p>
                      
                      <p class="mb-30">"To the remaining insurgents and terrorist groups in this country: Let me emphasize that the national 
                      government is sincere and open to those who still want to return to the folds of the law. But if you insist, the full 
                      force of the AFP will hit you hard to the brink of your extinction," Centino said.</p>
                      
                      <p class="mb-30">The new AFP chief also vowed to help keep the high-stakes 2022 polls "fair, honest, peaceful, and secure."</p>
                      
                      <p class="mb-30">Without explicitly mentioning Chinese militarization of the West Philippine Sea, Centino said Philippine 
                      sovereignty must be protected and that he supported efforts to strengthen ties with Southeast Asian neighbors and 
                      other countries.</p>
                      
                      <blockquote>"Our actions must be in full support of the national government's efforts to assert our sovereignty. 
                      These challenging times provide opportunities for us to build and strengthen our security and diplomatic ties with 
                      our Southeast Asian neighbors and the rest of the world. We have much to gain from engaging and collaborating with our 
                      partners," Centino said.</blockquote>
                      
                      <p class="mb-30">The West Philippine Sea is a part of the South China Sea that belongs to Manila but which Beijing is falsely 
                      claiming as its own. A historic 2016 arbitral ruling already upheld the Philippines' rights over the West Philippine Sea and 
                      struck down China's expansive claim over the disputed waters. But no less than Duterte himself has been downplaying this 
                      victory in favor of loans and grants from China.</p>
                      
                      <p class="mb-30">The President argued asserting the ruling would spark a war with the regional giant, but critics have said 
                      the Philippines can push to forge stronger alliances with other foreign nations to put more pressure on China to leave 
                      the West Philippine Sea.</p>
                      
                      <h3> Centino to serve until 2023</h3>
                   	
                   	  <p class="mb-30">Unlike his predecessors, Centino still has two more years to serve because he will only reach the 
                   	  mandatory age of 56 by February 4, 2023. Duterte is known for appointing short-termed AFP chiefs who will serve in 
                   	  less than a year. </p>
                   	  
                   	  <p class="mb-30">Faustino served for only four months (July to November 2021), Cirilito Sobejana for six months (January 
                   	  to July 2021), and Gilbert Gapay for five months (August 2020 to January 2021). </p>
                   	  
                   	  <p class="mb-30">The new AFP chief was born in Tacloban City but grew up in Cebu City. He finished high school at 
                   	  the University of the Philippines College-Cebu High School before entering the Philippine Military Academy (PMA) in 1984.</p>
                   	  
                   	  <p class="mb-30">After graduating from the PMA, Centino finished his master of science degree in National Resource Strategy 
                   	  at the National Defense University in Washington DC, USA. He took up his master's in management at the University of the 
                   	  Philippines.</p>
                   	  
                   	  <p class="mb-30">Centino belongs to the now ruling PMA Maringal Class of 1988. His classmates include Air Force chief 
                   	  Lieutenant General Allen Paredes, Navy chief Vice Admiral Adeluis Bordado, and PNP chief Lieutenant General Dionardo Carlos.</p>
                      
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
    <!-- End Blog Single -->
 </main>
  <!-- ======= Footer ======= -->
  <?php include('footer.php')?>
</html>
