<?php
// connect to database
  $conn = mysqli_connect('localhost','root','','scoopworth');

// for checking of connection
  if(!$conn){
    echo'Connection error:' . mysqli_connect_error();
  }
            $id_article = '15';
            $id_author = '6';
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

  <title>Two queer women fall in love while building a shelter in this book</title>
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
          <li><a class="nav-link  scrollto" href="sportsGrid.html">SPORTS</a></li>
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

  <!-- SHARE CONTENT -->
  <div id="at-custom-sidebar" class="at-custom-sidebar atss-left addthis-animated slideInLeft" style="background-color: rgb(255, 255, 255);">

  <div class="at-custom-sidebar-label at4-hide">
    
  </div>

  <div class="at-custom-sidebar-btns">

  <a role="button" tabindex="0" title="Facebook" class="at-share-btn at-svc-facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://lifestyle.inquirer.net/391468/two-queer-women-fall-in-love-while-building-a-shelter-in-this-book/#:~:text=The%20answer%2C%20in%20a%20nutshell%2C%20is%20no.?utm_campaign=sharedpost">

  <span class="at-icon-wrapper" style="background-color: rgb(255, 255, 255); line-height: 50px; height: 50px; width: 50px; border-radius: 0%;">

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-1" title="Facebook" alt="Facebook" style="fill: rgb(51, 51, 51); width: 32px; height: 32px;" class="at-icon at-icon-facebook">

    <title id="at-svg-facebook-1">Facebook</title>

    <g>

      <path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path>

    </g>

    </svg>
  </span>
  </a>

    <a role="button" tabindex="0" title="LinkedIn" class="at-share-btn at-svc-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=https://lifestyle.inquirer.net/391468/two-queer-women-fall-in-love-while-building-a-shelter-in-this-book/#:~:text=The%20answer%2C%20in%20a%20nutshell%2C%20is%20no.">

      <span class="at-icon-wrapper" style="background-color: rgb(255, 255, 255); line-height: 50px; height: 50px; width: 50px; border-radius: 0%;">

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-linkedin-3" title="LinkedIn" alt="LinkedIn" style="fill: rgb(51, 51, 51); width: 32px; height: 32px;" class="at-icon at-icon-linkedin">

          <title id="at-svg-linkedin-3">LinkedIn</title>

          <g>

            <path d="M26 25.963h-4.185v-6.55c0-1.56-.027-3.57-2.175-3.57-2.18 0-2.51 1.7-2.51 3.46v6.66h-4.182V12.495h4.012v1.84h.058c.558-1.058 1.924-2.174 3.96-2.174 4.24 0 5.022 2.79 5.022 6.417v7.386zM8.23 10.655a2.426 2.426 0 0 1 0-4.855 2.427 2.427 0 0 1 0 4.855zm-2.098 1.84h4.19v13.468h-4.19V12.495z" fill-rule="evenodd"></path>

          </g>

        </svg>
        </span>
        </a>

    <a role="button" tabindex="0" title="Reddit" class="at-share-btn at-svc-reddit" href="http://www.reddit.com/submit?url=https://lifestyle.inquirer.net/391468/two-queer-women-fall-in-love-while-building-a-shelter-in-this-book/#:~:text=The%20answer%2C%20in%20a%20nutshell%2C%20is%20no.">

      <span class="at-icon-wrapper" style="background-color: rgb(255, 255, 255); line-height: 50px; height: 50px; width: 50px; border-radius: 0%;">

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-reddit-3" title="Reddit" alt="Reddit" class="at-icon at-icon-reddit" style="fill: rgb(51, 51, 51); width: 32px; height: 32px;">

          <title id="at-svg-reddit-4">Reddit</title>

          <g>

            <path d="M27 15.5a2.452 2.452 0 0 1-1.338 2.21c.098.38.147.777.147 1.19 0 1.283-.437 2.47-1.308 3.563-.872 1.092-2.06 1.955-3.567 2.588-1.506.634-3.143.95-4.91.95-1.768 0-3.403-.316-4.905-.95-1.502-.632-2.69-1.495-3.56-2.587-.872-1.092-1.308-2.28-1.308-3.562 0-.388.045-.777.135-1.166a2.47 2.47 0 0 1-1.006-.912c-.253-.4-.38-.842-.38-1.322 0-.678.237-1.26.712-1.744a2.334 2.334 0 0 1 1.73-.726c.697 0 1.29.26 1.78.782 1.785-1.258 3.893-1.928 6.324-2.01l1.424-6.467a.42.42 0 0 1 .184-.26.4.4 0 0 1 .32-.063l4.53 1.006c.147-.306.368-.553.662-.74a1.78 1.78 0 0 1 .97-.278c.508 0 .94.18 1.302.54.36.36.54.796.54 1.31 0 .512-.18.95-.54 1.315-.36.364-.794.546-1.302.546-.507 0-.94-.18-1.295-.54a1.793 1.793 0 0 1-.533-1.308l-4.1-.92-1.277 5.86c2.455.074 4.58.736 6.37 1.985a2.315 2.315 0 0 1 1.757-.757c.68 0 1.256.242 1.73.726.476.484.713 1.066.713 1.744zm-16.868 2.47c0 .513.178.95.534 1.315.356.365.787.547 1.295.547.508 0 .942-.182 1.302-.547.36-.364.54-.802.54-1.315 0-.513-.18-.95-.54-1.31-.36-.36-.794-.54-1.3-.54-.5 0-.93.183-1.29.547a1.79 1.79 0 0 0-.54 1.303zm9.944 4.406c.09-.09.135-.2.135-.323a.444.444 0 0 0-.44-.447c-.124 0-.23.042-.32.124-.336.348-.83.605-1.486.77a7.99 7.99 0 0 1-1.964.248 7.99 7.99 0 0 1-1.964-.248c-.655-.165-1.15-.422-1.486-.77a.456.456 0 0 0-.32-.124.414.414 0 0 0-.306.124.41.41 0 0 0-.135.317.45.45 0 0 0 .134.33c.352.355.837.636 1.455.843.617.207 1.118.33 1.503.366a11.6 11.6 0 0 0 1.117.056c.36 0 .733-.02 1.117-.056.385-.037.886-.16 1.504-.366.62-.207 1.104-.488 1.456-.844zm-.037-2.544c.507 0 .938-.182 1.294-.547.356-.364.534-.802.534-1.315 0-.505-.18-.94-.54-1.303a1.75 1.75 0 0 0-1.29-.546c-.506 0-.94.18-1.3.54-.36.36-.54.797-.54 1.31s.18.95.54 1.315c.36.365.794.547 1.3.547z" fill-rule="evenodd"></path>

          </g>

        </svg>
      </span>
      </a>

      <a role="button" tabindex="0" title="Telegram" class="at-share-btn at-svc-telegram" href="https://telegram.me/share/url?url=https://lifestyle.inquirer.net/391468/two-queer-women-fall-in-love-while-building-a-shelter-in-this-book/#:~:text=The%20answer%2C%20in%20a%20nutshell%2C%20is%20no.">

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
                            <li class="author">by:  <a href="Two queer women fall in love while building a shelter in this book">
                            <?php echo htmlspecialchars($f_t[0]['firstname']); echo('&nbsp');echo htmlspecialchars($l_t[0]['lastname']);?>
                            </a></li>
                            <li class="date">date:<a href="#">November 17, 2021</a></li>
                          </ul>
                        </div>
                        <br>
                        
          				 <p style="text-align: center;"><img src="assets/img/LIFESTYLE3.png" class="img-responsive" alt="Purple-House" ></p>
           	           </div>
                     
                    
                      
                      <!-- <p class="mb-30"></p> -->
                      
                      
                      <p class="mb-30">Shelters, found families-those are essential in queer communities. Many queer folk struggle with homelessness and unemployment because of their queer 
                      identity, be it from homophobic parents or transphobic employers. These communal, makeshift shelters (often not an actual registered shelter, but the spare room or the 
                      couch of a queer sibling or elder) are how we take care of each other. You see a version of this in FX's "Pose" which has a drag queen starting a drag house in which 
                      she becomes the mother figure. And these halfway houses are not just for queer people, but for anyone who needs a place to stay. </p>
                      
                      <p class="mb-30">A shelter like this is the backdrop of "Dito, sa Purple House," a mixed Filipino and English novel by journalist Purple Romero. The eponymous Purple 
                      House is a place that welcomes in everyone: "student writers who lost their office after the government withdrew funding for them because the university publication 
                      was deemed too 'subversive,'" young unpaid scientists, and people turned away by their parents. One temporary resident of the house, Joy, was shunned by her tita for
					  supposedly being a communist. Another, Yesha, was a brilliant student thrown out by her dad after finding her stash of condoms.</p>
					  
					  <blockquote> But "Dito, sa Purple House" isn't just a story about a found family. It's primarily a love story. </blockquote>
                      
                      <p class="mb-30">The book follows its two protagonists: Ira and Sade. Ira is a Korean woman who moved to the Philippines to learn English, a trek that many young Korean 
                      students make. Meanwhile, Sade is a Filipina with an OFW mother and a grim family history. The two meet in a bar in Los Banos as students. </p>
      
                      <p class="mb-30">It's not love at first sight for them, though. While Ira is intrigued by Sade and her brazen confidence in asserting her sexuality, she finds herself 
                      falling in love instead with a student radio broadcaster, her Ate DJ, who she ends up publicly serenading. However, a man (of course it's a man) ruins the tender sweet 
                      moment by taking a video of it and posting it online. The video finds its way to virality, and ultimately to Ira's homophobic parents. </p>
                      
                      <p class="mb-30">Ira's parents soon cut her off, and, upon learning of her predicament, Sade takes her in. The two then make a home for themselves in Sade's tiny room, 
                      with them eating pancit canton and Ira teaching Korean on the side to get by. </p>
                      
                      <p class="mb-30">This is where the Purple House comes in. After Sade's mysterious landlady suddenly entrusts the whole house to her, the two turn it into a refuge. And 
                      while doing so, the two fall in love. </p>
                      
                      <p class="mb-30">"Dito, sa Purple House" is a tender story, but also a realistic one. The social realities that Ira, Sade, and their friends face mirror our own: 
                      relatives thinking you're a subversive communist rebel and red-tagging you just for being critical of the government, domestic abuse, and homophobia. A common thread 
                      is family trauma. Sade's father is physically abusive, while Ira's queer sister was forced to marry a man. As Romero said in an email to me, "'Dito, sa Purple House,'
                      tells the story of a woke Korean and Filipina who tried to navigate love and life in the time of political and health crises." </p>
                      
                      <p class="mb-30">Fair warning: While "Dito, sa Purple House" is short (the copy I got clocked in at 49 pages), the romance itself is a slow burn. 
                      The story takes us through different decades and stages of the girls' lives-some together, some apart. I'm not going to spoil what happens (again, it's very short, 
                      you can allot the time to read it), but I'll leave you this quote: "Baka masira ang Purple House if ever hindi sila mag-work-out. Magiba ang haligi, gumuho ang Pundasyon." </p>
                      
                      <p class="mb-30"> While reading it, the story reminded me a bit of those classic 90s and 2000s josei manga, like those written by Ebine Yamaji and Kyoko Okazaki and 
                      serialized in "Feel Young" and "Young You." There's a certain vibe to it, a maturity and frankness in its tone, that harkens back to that style of writing. </p>
                      
                      <p class="mb-30"> If you're interested in reading it, you can buy a copy of "Dito, sa Purple House" through Shopee. I've seen what y'all have mass ordered this 11.11 sale,
                       you can stand to add something a bit more meaningful to your carts.</p>
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